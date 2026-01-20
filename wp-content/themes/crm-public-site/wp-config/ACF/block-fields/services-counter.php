<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_counter',
        'title' => 'Services Counter',
        'fields' => array(
            array(
                'key' => 'field_services_counter_group',
                'label' => 'Services Counter',
                'name' => 'services_counter',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_services_counter_bg_image',
                        'label' => 'Background Image',
                        'name' => 'background_image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                    ),
                    array(
                        'key' => 'field_services_counter_items',
                        'label' => 'Counters',
                        'name' => 'counters',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Counter',
                        'max' => 4,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_services_counter_number',
                                'label' => 'Number',
                                'name' => 'number',
                                'type' => 'text',
                                'default_value' => '0',
                            ),
                            array(
                                'key' => 'field_services_counter_suffix',
                                'label' => 'Suffix',
                                'name' => 'suffix',
                                'type' => 'text',
                                'instructions' => 'e.g. k, x, +, %',
                            ),
                            array(
                                'key' => 'field_services_counter_label',
                                'label' => 'Label',
                                'name' => 'label',
                                'type' => 'text',
                                'default_value' => 'Label',
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
                    'value' => 'acf/services-counter',
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

