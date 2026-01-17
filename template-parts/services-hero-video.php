<?php
$block = get_field('services_hero_video');
$video_mp4 = $block['video_mp4'] ?? '';
$video_webm = $block['video_webm'] ?? '';
$poster = $block['poster'] ?? '';
$title_line_1 = $block['title_line_1'] ?? 'More Than a Look,';
$title_line_2 = $block['title_line_2'] ?? 'Design is Functional.';

if (empty($video_mp4)) {
    $video_mp4 = get_template_directory_uri() . '/include/media/mp4_video.mp4';
}
if (empty($video_webm)) {
    $video_webm = get_template_directory_uri() . '/include/media/webm_video.webm';
}
if (empty($poster)) {
    $poster = get_template_directory_uri() . '/include/media/fallback.jpg';
}
?>

<style>
.s-video-hero {
    position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 500px;
}
.s-video-hero__video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translateX(-50%) translateY(-50%);
    z-index: 0;
}
.s-video-hero__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}
.s-video-hero__content {
    position: relative;
    z-index: 2;
}
</style>

<section class="s-video-hero s-video-v2__bg">
    <video class="s-video-hero__video" autoplay muted loop playsinline poster="<?php echo esc_attr($poster); ?>">
        <?php if ($video_mp4): ?>
            <source src="<?php echo esc_url($video_mp4); ?>" type="video/mp4">
        <?php endif; ?>
        <?php if ($video_webm): ?>
            <source src="<?php echo esc_url($video_webm); ?>" type="video/webm">
        <?php endif; ?>
    </video>
    <div class="s-video-hero__overlay"></div>
    <div class="s-video-hero__content">
        <div class="container g-position--overlay g-text-center--xs">
            <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                <?php if ($title_line_1): ?>
                    <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white"><?php echo esc_html($title_line_1); ?></h1>
                <?php endif; ?>
                <?php if ($title_line_2): ?>
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white"><?php echo esc_html($title_line_2); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
