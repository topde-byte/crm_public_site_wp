<?php
// Register ACF Options Page for Header Settings
add_action('acf/init', function() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Header Settings',
            'menu_title'    => 'Header Settings',
            'menu_slug'     => 'header-settings',
            'capability'    => 'edit_posts',
            'icon_url'      => 'dashicons-admin-customizer',
            'position'      => 30,
        ));
    }
});

// Register ACF Fields for Header
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_header_settings',
        'title' => 'Header Settings',
        'fields' => array(
            array(
                'key' => 'field_header_logo_section',
                'label' => 'Logo Settings',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_header_logo_white',
                'label' => 'White Logo (Default)',
                'name' => 'header_logo_white',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'instructions' => 'Logo displayed on transparent/dark backgrounds',
            ),
            array(
                'key' => 'field_header_logo_dark',
                'label' => 'Dark Logo (Shrunk Header)',
                'name' => 'header_logo_dark',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'instructions' => 'Logo displayed when header is scrolled/shrunk',
            ),
            array(
                'key' => 'field_header_logo_alt',
                'label' => 'Logo Alt Text',
                'name' => 'header_logo_alt',
                'type' => 'text',
                'default_value' => 'Site Logo',
            ),
            array(
                'key' => 'field_header_social_section',
                'label' => 'Social Media',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_header_social_links',
                'label' => 'Social Media Links',
                'name' => 'header_social_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Social Link',
                'sub_fields' => array(
                    array(
                        'key' => 'field_header_social_icon',
                        'label' => 'Icon Class',
                        'name' => 'icon',
                        'type' => 'text',
                        'default_value' => 'ti-facebook',
                        'instructions' => 'Themify icon class (e.g. ti-facebook, ti-twitter, ti-dribbble)',
                    ),
                    array(
                        'key' => 'field_header_social_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_header_social_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'default_value' => 'Facebook',
                        'instructions' => 'Text shown on larger screens',
                    ),
                ),
            ),
            array(
                'key' => 'field_header_language_section',
                'label' => 'Language Switcher',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_header_language_links',
                'label' => 'Language Links',
                'name' => 'header_language_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Language',
                'sub_fields' => array(
                    array(
                        'key' => 'field_header_language_code',
                        'label' => 'Language Code',
                        'name' => 'code',
                        'type' => 'text',
                        'default_value' => 'En',
                        'instructions' => 'Language code (e.g. En, Fr, De)',
                    ),
                    array(
                        'key' => 'field_header_language_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                    ),
                    array(
                        'key' => 'field_header_language_active',
                        'label' => 'Active',
                        'name' => 'active',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'instructions' => 'Mark as active language',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'header-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,
        'show_in_rest' => 0,
    ));
});

