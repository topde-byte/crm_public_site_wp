<?php
$faq_hero = get_field('faq_hero');
$background_image = $faq_hero['background_image'] ?? '';
$title = $faq_hero['title'] ?? '';
$subtitle = $faq_hero['subtitle'] ?? '';
$anchor_id = $faq_hero['anchor_id'] ?? 'js__scroll-to-section';
?>

<?php if ($background_image): ?>
<div class="js__parallax-window" style="background: url(<?php echo esc_url($background_image); ?>) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <div class="g-margin-b-60--xs">
            <?php if ($title): ?>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">
                    <?php echo esc_html($title); ?>
                </h1>
            <?php endif; ?>
            <?php if ($subtitle): ?>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">
                    <?php echo esc_html($subtitle); ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($anchor_id): ?>
            <a href="#<?php echo esc_attr($anchor_id); ?>">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

