<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_portfolio',
        'title' => 'Services Portfolio',
        'fields' => array(
            array(
                'key' => 'field_services_portfolio_group',
                'label' => 'Services Portfolio',
                'name' => 'services_portfolio',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_services_portfolio_eyebrow',
                        'label' => 'Eyebrow Text',
                        'name' => 'eyebrow',
                        'type' => 'text',
                        'default_value' => 'Branding Work',
                    ),
                    array(
                        'key' => 'field_services_portfolio_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'default_value' => 'Projects',
                    ),
                    array(
                        'key' => 'field_services_portfolio_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'We are masters of most current technologies. Check us out and enjoy things that we know we\'re good at.',
                    ),
                    array(
                        'key' => 'field_services_portfolio_items',
                        'label' => 'Portfolio Items',
                        'name' => 'items',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'button_label' => 'Add Item',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_services_portfolio_item_image',
                                'label' => 'Image',
                                'name' => 'image',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                            ),
                            array(
                                'key' => 'field_services_portfolio_item_title',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                                'default_value' => 'Portfolio Item',
                            ),
                            array(
                                'key' => 'field_services_portfolio_item_author',
                                'label' => 'Author',
                                'name' => 'author',
                                'type' => 'text',
                                'default_value' => 'by KeenThemes Inc.',
                            ),
                            array(
                                'key' => 'field_services_portfolio_item_categories',
                                'label' => 'Categories',
                                'name' => 'categories',
                                'type' => 'text',
                                'instructions' => 'Space-separated category classes (e.g. motion graphic logos)',
                                'default_value' => 'motion graphic',
                            ),
                            array(
                                'key' => 'field_services_portfolio_item_link',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
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
                    'value' => 'acf/services-portfolio',
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

