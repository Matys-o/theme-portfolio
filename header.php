<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/fbb8zhm.css">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>

<header class="site-header animate-header">
    <div class="header-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/photo/identité good taille_Plan de travail 1-02.png" alt="Logo" class="animate-logo">
        </a>
    </div>
    <nav class="main-navigation">
        <ul class="nav-menu">
            <li class="animate-nav-item"><a href="<?php echo get_permalink(get_page_by_title('Galerie')); ?>">Mes photos</a></li>
            <li class="animate-nav-item"><a href="<?php echo get_permalink(get_page_by_title('Design')); ?>">Mes Designs</a></li>
            <li class="animate-nav-item"><a href="<?php echo get_permalink(get_page_by_title('Videos')); ?>">Mes Videos</a></li>
        </ul>
    </nav>
   <!-- Menu Burger -->
   <div class="burger-menu animate-burger" onclick="toggleMenu()">
        <span></span>
        <span></span>
    </div>

    <!-- Menu Plein Écran -->
    <div id="fullscreenMenu" class="fullscreen-menu">
        <ul class="menu-list animate-menu-list">
            <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>">Contact</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_title('A propos')); ?>">À propos</a></li>
        </ul>
    </div>
</header>
