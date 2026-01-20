<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title>Crm</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
    <!-- Navbar -->
    <div class="s-header__navbar">
        <div class="s-header__container">
            <div class="s-header__navbar-row">
                <div class="s-header__navbar-row-col">
                    <!-- Logo -->
                    <div class="s-header__logo">
                        <a href="index.html" class="s-header__logo-link">
                            <img class="s-header__logo-img s-header__logo-img-default" src="img/logo-white.png" alt="Megakit Logo">
                            <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-dark.png" alt="Megakit Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <div class="s-header__navbar-row-col">
                    <!-- Trigger -->
                    <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                        <span class="s-header__trigger-icon"></span>
                        <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                            <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                        </svg>
                    </a>
                    <!-- End Trigger -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <div class="s-header-bg-overlay js__bg-overlay">
        <nav class="s-header__nav js__scrollbar">
            <div class="container-fluid">

                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu_right',
                    'container' => false,
                    'menu_class' => 'list-unstyled s-header__nav-menu',
                    'fallback_cb' => false,
                    'walker' => new My_Walker_Nav_Menu(),
                ]);
                ?>

                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu_left',
                    'container' => false,
                    'menu_class' => 'list-unstyled s-header__nav-menu',
                    'fallback_cb' => false,
                    'walker' => new My_Walker_Nav_Menu(),
                ]);
                ?>
            </div>
        </nav>

        <!-- End Nav -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--lb">
            <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
            <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
        </ul>
        <!-- End Action -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--rb">
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="https://www.behance.net/keenthemes">
                    <i class="g-padding-r-5--xs ti-facebook"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="https://twitter.com/keenthemes">
                    <i class="g-padding-r-5--xs ti-twitter"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="https://dribbble.com/keenthemes">
                    <i class="g-padding-r-5--xs ti-dribbble"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Dribbble</span>
                </a>
            </li>
        </ul>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->
</header>
