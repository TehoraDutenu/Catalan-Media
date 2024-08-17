<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        <!-- Styles -->
        <!-- Mes styles -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/header.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/frontpage.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/rugby-league.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/rl-sidebar.css"; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/footer.css"; ?>">

        <title>Catalan Media</title>
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="titles">
                <!-- Logo -->
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <img class="logo" src=<?php echo get_template_directory_uri() . "/images/logos/logo2.png"; ?> alt="logo catalan media">
                </a>
                <!-- Description -->
                <div class="description">
                    <h4 class="blog-description"><?php echo get_bloginfo('description'); ?></h4>
                    <div class="social-media">
                        <a href="https://x.com/catalanmedia" class="text-decoration-none">
                            <i class="bi bi-twitter fs-4"></i>
                        </a>
                        <a href="https://www.facebook.com/catalanmedia?locale=fr_FR">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                </div>
                </div>
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
