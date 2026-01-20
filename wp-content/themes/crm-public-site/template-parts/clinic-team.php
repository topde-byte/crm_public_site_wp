<?php
$team = get_field('team');
$eyebrow = $team['eyebrow'] ?? '';
$title = $team['title'] ?? '';
$members = $team['members'] ?? [];
?>

<?php if ($eyebrow || $title): ?>
<div class="container g-text-center--xs g-padding-y-80--xs">
    <?php if ($eyebrow): ?>
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
            <?php echo esc_html($eyebrow); ?>
        </p>
    <?php endif; ?>
    <?php if ($title): ?>
        <h2 class="g-font-size-32--xs g-font-size-36--sm"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if (!empty($members)): ?>
<!-- Team -->
<div class="row g-row-col--0">
    <?php foreach ($members as $index => $member): ?>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay="<?php echo esc_attr(($index * 0.1) + 0.1); ?>s">
                <!-- Team -->
                <div class="s-team-v1">
                    <?php if (!empty($member['image']['url'])): ?>
                        <img class="img-responsive g-width-100-percent--xs" 
                             src="<?php echo esc_url($member['image']['url']); ?>" 
                             alt="<?php echo esc_attr($member['image']['alt'] ?? $member['name'] ?? ''); ?>">
                    <?php endif; ?>
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <?php if (!empty($member['name'])): ?>
                            <h2 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo esc_html($member['name']); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($member['specialty'])): ?>
                            <span class="g-font-size-15--xs g-color--text"><i><?php echo esc_html($member['specialty']); ?></i></span>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- End Team -->
<?php endif; ?>

