<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_pricing',
        'title' => 'Services Pricing',
        'fields' => array(
            array(
                'key' => 'field_services_pricing_group',
                'label' => 'Services Pricing',
                'name' => 'services_pricing',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_services_pricing_eyebrow',
                        'label' => 'Eyebrow Text',
                        'name' => 'eyebrow',
                        'type' => 'text',
                        'default_value' => 'Plan',
                    ),
                    array(
                        'key' => 'field_services_pricing_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'default_value' => 'Finding your Plan',
                    ),
                    array(
                        'key' => 'field_services_pricing_plans',
                        'label' => 'Plans',
                        'name' => 'plans',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'button_label' => 'Add Plan',
                        'max' => 3,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_services_pricing_plan_icon',
                                'label' => 'Icon Class',
                                'name' => 'icon',
                                'type' => 'text',
                                'default_value' => 'ti-archive',
                                'instructions' => 'Themify icon class (e.g. ti-archive, ti-package, ti-gift)',
                            ),
                            array(
                                'key' => 'field_services_pricing_plan_name',
                                'label' => 'Plan Name',
                                'name' => 'name',
                                'type' => 'text',
                                'default_value' => 'Individual',
                            ),
                            array(
                                'key' => 'field_services_pricing_plan_features',
                                'label' => 'Features',
                                'name' => 'features',
                                'type' => 'repeater',
                                'layout' => 'table',
                                'button_label' => 'Add Feature',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_services_pricing_plan_feature',
                                        'label' => 'Feature',
                                        'name' => 'feature',
                                        'type' => 'text',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'field_services_pricing_plan_price',
                                'label' => 'Price',
                                'name' => 'price',
                                'type' => 'text',
                                'default_value' => '39',
                            ),
                            array(
                                'key' => 'field_services_pricing_plan_button_text',
                                'label' => 'Button Text',
                                'name' => 'button_text',
                                'type' => 'text',
                                'default_value' => 'Signup',
                            ),
                            array(
                                'key' => 'field_services_pricing_plan_button_link',
                                'label' => 'Button Link',
                                'name' => 'button_link',
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
                    'value' => 'acf/services-pricing',
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

