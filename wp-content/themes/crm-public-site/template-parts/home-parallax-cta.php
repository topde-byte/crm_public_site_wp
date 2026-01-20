<?php
$block = get_field('home_parallax_cta');
$background = $block['background_image'] ?? '';
$title = $block['title'] ?? '';
$button_text = $block['button_text'] ?? '';
$button_link = $block['button_link'] ?? '';

if (empty($background)) {
    $background = get_template_directory_uri() . '/img/1920x1080/03.jpg';
}
?>

<div class="js__parallax-window" style="background: url(<?php echo esc_url($background); ?>) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <?php if ($title): ?>
            <div class="g-margin-b-80--xs">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white"><?php echo esc_html($title); ?></h2>
            </div>
        <?php endif; ?>
        <?php if ($button_text && $button_link): ?>
            <a href="<?php echo esc_url($button_link); ?>" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50"><?php echo esc_html($button_text); ?></a>
        <?php endif; ?>
    </div>
</div>

