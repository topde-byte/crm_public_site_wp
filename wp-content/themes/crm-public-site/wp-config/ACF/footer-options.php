<?php
// Register ACF Options Page for Footer Settings
add_action('acf/init', function() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Footer Settings',
            'menu_title'    => 'Footer Settings',
            'menu_slug'     => 'footer-settings',
            'capability'    => 'edit_posts',
            'icon_url'      => 'dashicons-arrow-down-alt',
            'position'      => 31,
        ));
    }
});

// Register ACF Fields for Footer
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_footer_settings',
        'title' => 'Footer Settings',
        'fields' => array(
            array(
                'key' => 'field_footer_logo_section',
                'label' => 'Footer Logo',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_footer_logo',
                'label' => 'Footer Logo',
                'name' => 'footer_logo',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'instructions' => 'Logo displayed in footer bottom section',
            ),
            array(
                'key' => 'field_footer_logo_alt',
                'label' => 'Footer Logo Alt Text',
                'name' => 'footer_logo_alt',
                'type' => 'text',
                'default_value' => 'Site Logo',
            ),
            array(
                'key' => 'field_footer_brand_section',
                'label' => 'Brand Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_footer_brand_title',
                'label' => 'Brand Title',
                'name' => 'footer_brand_title',
                'type' => 'text',
                'default_value' => 'Megakit',
            ),
            array(
                'key' => 'field_footer_brand_description',
                'label' => 'Brand Description',
                'name' => 'footer_brand_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'We are a creative studio focusing on culture, luxury, editorial & art. Somewhere between sophistication and simplicity.',
            ),
            array(
                'key' => 'field_footer_navigation_section',
                'label' => 'Navigation Links',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_footer_navigation_links',
                'label' => 'Navigation Links',
                'name' => 'footer_navigation_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Link',
                'sub_fields' => array(
                    array(
                        'key' => 'field_footer_nav_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_footer_nav_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'field_footer_social_section',
                'label' => 'Social Links',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_footer_social_links',
                'label' => 'Social Media Links',
                'name' => 'footer_social_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Social Link',
                'sub_fields' => array(
                    array(
                        'key' => 'field_footer_social_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_footer_social_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'field_footer_legal_section',
                'label' => 'Legal Links',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_footer_legal_links',
                'label' => 'Legal Links',
                'name' => 'footer_legal_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Legal Link',
                'sub_fields' => array(
                    array(
                        'key' => 'field_footer_legal_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_footer_legal_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'field_footer_copyright_section',
                'label' => 'Copyright',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_footer_copyright_text',
                'label' => 'Copyright Text',
                'name' => 'footer_copyright_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => '<a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a>',
                'instructions' => 'HTML allowed',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'footer-settings',
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

