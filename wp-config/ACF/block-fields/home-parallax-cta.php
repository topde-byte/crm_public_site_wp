<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home_parallax_cta',
        'title' => 'Home Parallax CTA',
        'fields' => array(
            array(
                'key' => 'field_home_parallax_cta_group',
                'label' => 'Home Parallax CTA',
                'name' => 'home_parallax_cta',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_home_parallax_cta_bg',
                        'label' => 'Background Image',
                        'name' => 'background_image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),
                    array(
                        'key' => 'field_home_parallax_cta_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'default_value' => 'The Fastest Way To Develop',
                    ),
                    array(
                        'key' => 'field_home_parallax_cta_btn_text',
                        'label' => 'Button Text',
                        'name' => 'button_text',
                        'type' => 'text',
                        'default_value' => 'Learn More',
                    ),
                    array(
                        'key' => 'field_home_parallax_cta_btn_link',
                        'label' => 'Button Link',
                        'name' => 'button_link',
                        'type' => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/home-parallax-cta',
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

