<?php
$block = get_field('services_counter');
$background_image = $block['background_image'] ?? '';
$counters = $block['counters'] ?? [];

// Fallback to default image
if (empty($background_image)) {
    $background_image = get_template_directory_uri() . '/img/1920x1080/02.jpg';
}
?>

<div class="js__parallax-window" style="background: url('<?php echo esc_url($background_image); ?>') 50% 0 no-repeat fixed;">
    <div class="container g-padding-y-125--xs">
        <div class="row">
            <?php if (have_rows('services_counter')): ?>
                <?php while (have_rows('services_counter')): the_row(); ?>
                    <?php if (have_rows('counters')): ?>
                        <?php while (have_rows('counters')): the_row();
                            $number = get_sub_field('number') ?: '0';
                            $suffix = get_sub_field('suffix') ?: '';
                            $label = get_sub_field('label') ?: '';
                        ?>
                            <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                                <div class="g-text-center--xs">
                                    <div class="g-margin-b-10--xs">
                                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter"><?php echo esc_html($number); ?></figure>
                                        <?php if ($suffix): ?>
                                            <span class="g-font-size-40--xs g-color--white"><?php echo esc_html($suffix); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                    <?php if ($label): ?>
                                        <h4 class="g-font-size-18--xs g-color--white"><?php echo esc_html($label); ?></h4>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

