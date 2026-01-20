<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home_features',
        'title' => 'Home Features',
        'fields' => array(
            array(
                'key' => 'field_home_features_group',
                'label' => 'Home Features',
                'name' => 'home_features',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_home_features_eyebrow',
                        'label' => 'Eyebrow Text',
                        'name' => 'eyebrow',
                        'type' => 'text',
                        'default_value' => 'Welcome to Megakit',
                    ),
                    array(
                        'key' => 'field_home_features_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'textarea',
                        'rows' => 2,
                        'default_value' => 'We Create Beautiful Experiences <br> That Drive Successful Businesses.',
                    ),
                    array(
                        'key' => 'field_home_features_items',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_home_features_item_icon',
                                'label' => 'Icon Class',
                                'name' => 'icon',
                                'type' => 'text',
                                'default_value' => 'ti-desktop',
                                'instructions' => 'Themify icon class (e.g. ti-desktop, ti-settings)',
                            ),
                            array(
                                'key' => 'field_home_features_item_title',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                            ),
                            array(
                                'key' => 'field_home_features_item_desc',
                                'label' => 'Description',
                                'name' => 'description',
                                'type' => 'textarea',
                                'rows' => 2,
                            ),
                            array(
                                'key' => 'field_home_features_item_delay',
                                'label' => 'Animation Delay',
                                'name' => 'animation_delay',
                                'type' => 'text',
                                'default_value' => '0.1',
                                'instructions' => 'In seconds (e.g. 0.1, 0.2, 0.3)',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/home-features',
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

