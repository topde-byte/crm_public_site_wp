<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home_hero_slider',
        'title' => 'Home Hero Slider',
        'fields' => array(
            array(
                'key' => 'field_home_hero_slider_group',
                'label' => 'Home Hero Slider',
                'name' => 'home_hero_slider',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_home_hero_slider_slides',
                        'label' => 'Slides',
                        'name' => 'slides',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'button_label' => 'Add Slide',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_home_hero_slider_slide_bg',
                                'label' => 'Background Image',
                                'name' => 'background_image',
                                'type' => 'image',
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                            ),
                            array(
                                'key' => 'field_home_hero_slider_slide_title',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'textarea',
                                'rows' => 2,
                                'instructions' => 'Use <br> for line breaks',
                            ),
                            array(
                                'key' => 'field_home_hero_slider_slide_video',
                                'label' => 'Video URL',
                                'name' => 'video_url',
                                'type' => 'url',
                                'instructions' => 'YouTube video URL',
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
                    'value' => 'acf/home-hero-slider',
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

