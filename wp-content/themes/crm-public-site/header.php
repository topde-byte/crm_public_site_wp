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
                        <a href="<?php echo home_url('/'); ?>" class="s-header__logo-link">
                            <?php 
                            $logo_white = get_field('header_logo_white', 'option');
                            $logo_dark = get_field('header_logo_dark', 'option');
                            $logo_alt = get_field('header_logo_alt', 'option') ?: 'Site Logo';
                            
                            // Fallback to default logos if not set
                            if (empty($logo_white)) {
                                $logo_white = get_template_directory_uri() . '/img/logo-white.png';
                            }
                            if (empty($logo_dark)) {
                                $logo_dark = get_template_directory_uri() . '/img/logo-dark.png';
                            }
                            ?>
                            <img class="s-header__logo-img s-header__logo-img-default" src="<?php echo esc_url($logo_white); ?>" alt="<?php echo esc_attr($logo_alt); ?>">
                            <img class="s-header__logo-img s-header__logo-img-shrink" src="<?php echo esc_url($logo_dark); ?>" alt="<?php echo esc_attr($logo_alt); ?>">
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
        <?php 
        $language_links = get_field('header_language_links', 'option');
        if ($language_links && !empty($language_links)):
        ?>
            <ul class="list-inline s-header__action s-header__action--lb">
                <?php foreach ($language_links as $lang): ?>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link <?php echo !empty($lang['active']) ? '-is-active' : ''; ?>" 
                           href="<?php echo !empty($lang['url']) ? esc_url($lang['url']) : '#'; ?>">
                            <?php echo esc_html($lang['code']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!-- End Action -->

        <!-- Action -->
        <?php 
        $social_links = get_field('header_social_links', 'option');
        if ($social_links && !empty($social_links)):
        ?>
            <ul class="list-inline s-header__action s-header__action--rb">
                <?php foreach ($social_links as $social): ?>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener noreferrer">
                            <i class="g-padding-r-5--xs <?php echo esc_attr($social['icon']); ?>"></i>
                            <?php if (!empty($social['label'])): ?>
                                <span class="g-display-none--xs g-display-inline-block--sm"><?php echo esc_html($social['label']); ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->
</header>
