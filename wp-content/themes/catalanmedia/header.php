<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/header.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/frontpage.css"; ?>">

        <title>Catalan Media</title>
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="titles">
                <!-- Logo -->
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <img class="logo" src=<?php echo get_template_directory_uri() . "/images/2.png"; ?> alt="logo catalan media">
                </a>
                <!-- Description -->
                <h4 class="blog-description"><?php echo get_bloginfo('description'); ?></h4>
            </div>

            <!-- Menu -->
            <div class="navigation">
                <?php wp_nav_menu([
                    "theme_location" => "menu-sup",
                    "menu_class" => "custom-menu",
                    "container" => false,
                    "walker" => new CM_Depth_Menu()
                    ]
                )
                ?>
            </div>
            
            
        </header>
