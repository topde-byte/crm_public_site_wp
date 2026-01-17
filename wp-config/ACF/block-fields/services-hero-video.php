<?php
add_action('acf/include_fields', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_services_hero_video',
        'title' => 'Services Hero Video',
        'fields' => array(
            array(
                'key' => 'field_services_hero_video_group',
                'label' => 'Services Hero Video',
                'name' => 'services_hero_video',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_services_hero_video_mp4',
                        'label' => 'Video MP4',
                        'name' => 'video_mp4',
                        'type' => 'file',
                        'return_format' => 'url',
                        'mime_types' => 'mp4',
                        'instructions' => 'Upload MP4 video file',
                    ),
                    array(
                        'key' => 'field_services_hero_video_webm',
                        'label' => 'Video WebM',
                        'name' => 'video_webm',
                        'type' => 'file',
                        'return_format' => 'url',
                        'mime_types' => 'webm',
                        'instructions' => 'Upload WebM video file',
                    ),
                    array(
                        'key' => 'field_services_hero_video_poster',
                        'label' => 'Poster Image',
                        'name' => 'poster',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'instructions' => 'Fallback image when video cannot play',
                    ),
                    array(
                        'key' => 'field_services_hero_video_title_1',
                        'label' => 'Title Line 1',
                        'name' => 'title_line_1',
                        'type' => 'text',
                        'default_value' => 'More Than a Look,',
                    ),
                    array(
                        'key' => 'field_services_hero_video_title_2',
                        'label' => 'Title Line 2',
                        'name' => 'title_line_2',
                        'type' => 'text',
                        'default_value' => 'Design is Functional.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/services-hero-video',
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

