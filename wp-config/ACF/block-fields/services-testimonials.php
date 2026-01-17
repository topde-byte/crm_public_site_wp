<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_testimonials',
        'title' => 'Services Testimonials',
        'fields' => array(
            array(
                'key' => 'field_services_testimonials_group',
                'label' => 'Services Testimonials',
                'name' => 'services_testimonials',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_services_testimonials_eyebrow',
                        'label' => 'Eyebrow Text',
                        'name' => 'eyebrow',
                        'type' => 'text',
                        'default_value' => 'Testimonials',
                    ),
                    array(
                        'key' => 'field_services_testimonials_items',
                        'label' => 'Testimonials',
                        'name' => 'testimonials',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'button_label' => 'Add Testimonial',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_services_testimonials_image',
                                'label' => 'Photo',
                                'name' => 'image',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                            ),
                            array(
                                'key' => 'field_services_testimonials_quote',
                                'label' => 'Quote',
                                'name' => 'quote',
                                'type' => 'textarea',
                                'rows' => 3,
                            ),
                            array(
                                'key' => 'field_services_testimonials_name',
                                'label' => 'Name',
                                'name' => 'name',
                                'type' => 'text',
                            ),
                            array(
                                'key' => 'field_services_testimonials_company',
                                'label' => 'Company',
                                'name' => 'company',
                                'type' => 'text',
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
                    'value' => 'acf/services-testimonials',
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

