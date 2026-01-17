<?php
$block = get_field('home_about');
$eyebrow = $block['eyebrow'] ?? 'Culture';
$title_line_1 = $block['title_line_1'] ?? 'About';
$title_line_2 = $block['title_line_2'] ?? 'Megakit';
$paragraph_1 = $block['paragraph_1'] ?? '';
$paragraph_2 = $block['paragraph_2'] ?? '';
$image = $block['image'] ?? '';
?>

<div class="g-promo-section">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row">
            <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"><?php echo esc_html($eyebrow); ?></p>
                <?php endif; ?>
                <?php if ($title_line_1): ?>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md"><?php echo esc_html($title_line_1); ?></h2>
                    </div>
                <?php endif; ?>
                <?php if ($title_line_2): ?>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md"><?php echo esc_html($title_line_2); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <?php if ($paragraph_1): ?>
                    <p class="g-font-size-18--xs"><?php echo esc_html($paragraph_1); ?></p>
                <?php endif; ?>
                <?php if ($paragraph_2): ?>
                    <p class="g-font-size-18--xs"><?php echo esc_html($paragraph_2); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if ($image): ?>
        <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
            <img class="img-responsive" src="<?php echo esc_url($image); ?>" alt="Image">
        </div>
    <?php endif; ?>
</div>

