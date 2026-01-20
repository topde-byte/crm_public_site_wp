<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home_about',
        'title' => 'Home About',
        'fields' => array(
            array(
                'key' => 'field_home_about_group',
                'label' => 'Home About',
                'name' => 'home_about',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_home_about_eyebrow',
                        'label' => 'Eyebrow Text',
                        'name' => 'eyebrow',
                        'type' => 'text',
                        'default_value' => 'Culture',
                    ),
                    array(
                        'key' => 'field_home_about_title_1',
                        'label' => 'Title Line 1',
                        'name' => 'title_line_1',
                        'type' => 'text',
                        'default_value' => 'About',
                    ),
                    array(
                        'key' => 'field_home_about_title_2',
                        'label' => 'Title Line 2',
                        'name' => 'title_line_2',
                        'type' => 'text',
                        'default_value' => 'Megakit',
                    ),
                    array(
                        'key' => 'field_home_about_paragraph_1',
                        'label' => 'Paragraph 1',
                        'name' => 'paragraph_1',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_home_about_paragraph_2',
                        'label' => 'Paragraph 2',
                        'name' => 'paragraph_2',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                    array(
                        'key' => 'field_home_about_image',
                        'label' => 'Side Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/home-about',
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

