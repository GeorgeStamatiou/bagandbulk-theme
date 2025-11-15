<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">

        <!-- LOGO -->
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Bag & Bulk Logo">
        </a>

        <!-- DESKTOP NAVIGATION -->

        <nav class="main-nav">
            <div class="nav-inner">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'nav-menu',
                    ]);
                ?>
                <a href="/build-your-machine" class="header-cta-btn">Build Your Machine</a>
            </div>
        </nav>

        <!-- MOBILE MENU TOGGLE -->
        <div class="mobile-menu-toggle" id="mobileMenuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

    <!-- MOBILE NAVIGATION (hidden by default) -->
    <div class="mobile-nav" id="mobileNav">
        <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'mobile-nav-menu',
            ]);
        ?>
    </div>
</header>
