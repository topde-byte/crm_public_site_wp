<?php

function crm_theme_enqueue_assets() {
    wp_enqueue_style(
        'crm-theme-style',
        get_template_directory_uri() . '/build/css/style.css',
        [],
        filemtime(get_template_directory() . '/build/css/style.css')
    );

    wp_enqueue_style(
        'crm-global-style',
        get_template_directory_uri() . '/build/css/global.css',
        [],
        filemtime(get_template_directory() . '/build/css/global.css')
    );
}
add_action('wp_enqueue_scripts', 'crm_theme_enqueue_assets');


function megakit_enqueue_assets() {

    $theme = get_template_directory_uri();
    $path  = get_template_directory();

    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');

    wp_enqueue_script(
        'vendor-jquery',
        $theme . '/vendor/jquery.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'vendor-jquery-migrate',
        $theme . '/vendor/jquery.migrate.min.js',
        ['vendor-jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'theme-global',
        $theme . '/build/js/global.js',
        ['vendor-jquery'],
        filemtime($path . '/build/js/global.js'),
        true
    );

//    wp_enqueue_script(
//        'theme-scrollbar',
//        $theme . '/build/js/components/scrollbar.js',
//        ['vendor-jquery'],
//        filemtime($path . '/build/js/components/scrollbar.js'),
//        true
//    );
//    wp_enqueue_script(
//        'portfolio-3col',
//        $theme . '/build/js/components/portfolio-3-col.js',
//        ['vendor-jquery'],
//        filemtime($path . '/build/js/components/scrollbar.js'),
//        true
//    );

//    wp_enqueue_script(
//        'theme-magnific',
//        $theme . '/build/js/components/magnific-popup.js',
//        ['vendor-jquery'],
//        filemtime($path . '/build/js/components/magnific-popup.js'),
//        true
//    );

    wp_enqueue_script(
        'theme-swiper',
        $theme . '/build/js/components/swiper.js',
        ['vendor-jquery'],
        filemtime($path . '/build/js/components/swiper.js'),
        true
    );

//    wp_enqueue_script(
//        'theme-wow',
//        $theme . '/build/js/components/wow.js',
//        ['vendor-jquery'],
//        filemtime($path . '/build/js/components/wow.js'),
//        true
//    );

    wp_enqueue_script(
        'vendor-bootstrap',
        $theme . '/vendor/bootstrap/js/bootstrap.js',
        ['vendor-jquery'],
        null,
        true
    );
//    wp_enqueue_script(
//        'cubeportfolio',
//        $theme . '/vendor/cubeportfolio/js/jquery.cubeportfolio.js',
//        ['vendor-jquery'],
//        null,
//        true
//    );

    wp_register_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11.1.0/swiper-bundle.min.js',
        [],
        null,
        true
    );
    wp_register_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11.1.0/swiper-bundle.min.css',
        [],
        null
    );

    wp_enqueue_style('swiper');

    wp_enqueue_script('swiper');
    wp_enqueue_script(
        'custom-swiper',
        get_template_directory_uri() . '/src/js/components/swiper.js',
        ['swiper'],
        null,
        true
    );


    wp_enqueue_style('megakit-bootstrap', $theme . '/vendor/bootstrap/css/bootstrap.min.css');
//    wp_enqueue_style('cubeportfolio', $theme . '/vendor/cubeportfolio/css/cubeportfolio.min.css');
    wp_enqueue_style('megakit-animate', $theme . '/css/animate.css');
    wp_enqueue_style('megakit-themify', $theme . '/vendor/themify/assets/themify-icons/themify-icons.css');
//    wp_enqueue_style('megakit-scrollbar', $theme . '/vendor/scrollbar/scrollbar.min.css');
//    wp_enqueue_style('megakit-magnific', $theme . '/vendor/magnific-popup/magnific-popup.css');
    wp_enqueue_style('megakit-style', $theme . '/css/style.css');
    wp_enqueue_style('megakit-global-legacy', $theme . '/css/global/global.css');
    wp_enqueue_style('megakit-google-fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700', [], null
    );
    wp_enqueue_style('megakit-google-fonts-playfair',
        'https://fonts.googleapis.com/css?family=Playfair+Display:400,700', [], null
    );
}

add_action('wp_enqueue_scripts', 'megakit_enqueue_assets');

function my_theme_setup() {
    add_theme_support('menus');

    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

function my_register_menus() {
    register_nav_menus([
        'main_menu_left'  => __('Main Menu Left', 'crm-public-site'),
        'main_menu_right' => __('Main Menu Right', 'crm-public-site'),
    ]);
}
add_action('after_setup_theme', 'my_register_menus');

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = 's-header__nav-menu-item';
        $output .= '<li class="' . esc_attr($classes) . '">';
        $output .= '<a class="s-header__nav-menu-link s-header__nav-menu-link-divider' . ($item->current ? ' -is-active' : '') . '" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }

    function start_lvl(&$output, $depth = 0, $args = null) {}
    function end_lvl(&$output, $depth = 0, $args = null) {}
}
function post_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'post_setup');


function enqueue_vidbg_script() {
    wp_enqueue_script(
        'vidbg',
        get_template_directory_uri() . '/vendor/video-background/js/vidbg.min.js',
        ['vendor-jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'vidbg-init',
        get_template_directory_uri() . '/src/js/components/vidbg-init.js',
        ['vendor-jquery','vidbg'],
        null,
        true
    );
    wp_add_inline_script('vidbg', 'const themeUrl = "' . get_template_directory_uri() . '";', 'before');

}
add_action('wp_enqueue_scripts', 'enqueue_vidbg_script');

function mytheme_enqueue_cubeportfolio() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'cubeportfolio-js',
        get_template_directory_uri() . '/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js',
        ['vendor-jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'cubeportfolio-init',
        get_template_directory_uri() . '/build/js/cubeportfolio-init.js',
        ['vendor-jquery', 'cubeportfolio-js'],
        null,
        true
    );

    wp_enqueue_style(
        'cubeportfolio-css',
        get_template_directory_uri() . '/vendor/cubeportfolio/css/cubeportfolio.min.css'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_cubeportfolio');

