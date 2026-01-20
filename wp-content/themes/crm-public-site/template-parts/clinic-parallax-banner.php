<?php
$parallax_banner = get_field('parallax_banner');
$background_image = $parallax_banner['background_image'] ?? '';
$title = $parallax_banner['title'] ?? '';
$button_text = $parallax_banner['button_text'] ?? '';
$button_link = $parallax_banner['button_link'] ?? '';
?>

<?php if ($background_image): ?>
<!-- Parallax -->
<div class="s-promo-block-v5 g-bg-position--center js__parallax-window"
     style="background: url(<?php echo esc_url($background_image); ?>) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <?php if ($title): ?>
            <div class="g-margin-b-80--xs">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">
                    <?php echo esc_html($title); ?>
                </h2>
            </div>
        <?php endif; ?>
        <?php if ($button_text && $button_link): ?>
            <a href="<?php echo esc_url($button_link); ?>" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">
                <?php echo esc_html($button_text); ?>
            </a>
        <?php endif; ?>
    </div>
</div>
<!-- End Parallax -->
<?php endif; ?>

