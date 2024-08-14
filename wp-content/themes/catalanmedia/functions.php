<?php

function register_menu() {

    register_nav_menus(array(
        'menu-sup' => __('Menu sup'),
        'footer-menu' => __('Footer Menu')
    ));
}

add_action('init', 'register_menu');


class CM_Menu extends Walker_Nav_Menu {

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        
        $title = $data_object->title;
        $permalink = $data_object->url;

        $output .= "<div class='nav-item'>";
        $output .= "<a class='nav-link border m-1 custom_a' href='$permalink'>";
        $output .= "$title";
        $output .= "</a>";
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= "</div>";
    }
}

class CM_Depth_Menu extends Walker_Nav_Menu {

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        // Ajout de la classe dropdown-menu pour les sous-menus
        $indentation = str_repeat("\t", $depth);
        $output .= "\n$indentation<ul class=\"dropdown-menu\">\n";
    }

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $title = $data_object->title;
        $permalink = $data_object->url;
        $indentation = str_repeat("\t", $depth);
        $classes = empty($data_object->classes) ? array() : (array) $data_object->classes;
        $class_name = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $data_object));

        // Vérification si l'élément a des sous-menus (dropdown)
        $has_children = !empty($args->has_children);
        $dropdown_class = $has_children ? ' dropdown' : '';
        $nav_item_class = $depth > 0 ? 'dropdown-item' : 'nav-item';
        
        // Modification du rendu des éléments de menu
        $output .= $indentation . '<li class="' . esc_attr($nav_item_class . $dropdown_class) . '">';

        // Gestion des liens et des classes Bootstrap
        $link_class = $depth > 0 ? 'dropdown-item' : 'nav-link';

        // Ajoute 'dropdown-toggle' uniquement si l'élément a des enfants
        if ($has_children) {
            $link_class .= ' dropdown-toggle';
            $output .= '<a href="' . esc_url($permalink) . '" class="' . esc_attr($link_class) . '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        } else {
            $output .= '<a href="' . esc_url($permalink) . '" class="' . esc_attr($link_class) . '">';
        }

        $output .= $title;
        $output .= '</a>';
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indentation = str_repeat("\t", $depth);
        $output .= "$indentation</ul>\n";
    }

    // Pour indiquer que l'élément a des enfants (sous-menus)
    public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        if (isset($children_elements[$element->ID])) {
            $element->classes[] = 'has-children';
            $args[0]->has_children = true;
        } else {
            $args[0]->has_children = false;
        }

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
