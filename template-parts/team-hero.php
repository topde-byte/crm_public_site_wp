<?php
$team_hero = get_field('team_hero');
$background_image = $team_hero['background_image'] ?? '';
$eyebrow = $team_hero['eyebrow'] ?? '';
$title = $team_hero['title'] ?? '';
?>

<?php if ($background_image): ?>
    <div class="g-bg-position--center js__parallax-window"
         style="background: url(<?php echo esc_url($background_image); ?>) 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <?php if ($eyebrow): ?>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                    <?php echo esc_html($eyebrow); ?>
                </p>
            <?php endif; ?>
            <?php if ($title): ?>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">
                    <?php echo esc_html($title); ?>
                </h1>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>


