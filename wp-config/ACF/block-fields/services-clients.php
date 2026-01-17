<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_clients',
        'title' => 'Services Clients',
        'fields' => array(
            array(
                'key' => 'field_services_clients_group',
                'label' => 'Services Clients',
                'name' => 'services_clients',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_services_clients_items',
                        'label' => 'Client Logos',
                        'name' => 'clients',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Client',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_services_clients_logo',
                                'label' => 'Logo',
                                'name' => 'logo',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
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
                    'value' => 'acf/services-clients',
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

