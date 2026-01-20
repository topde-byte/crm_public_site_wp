<?php
$block = get_field('services_pricing');
$eyebrow = $block['eyebrow'] ?? 'Plan';
$title = $block['title'] ?? 'Finding your Plan';
$plans = $block['plans'] ?? [];
?>

<div class="g-bg-color--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <?php if ($eyebrow): ?>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"><?php echo esc_html($eyebrow); ?></p>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="g-font-size-32--xs g-font-size-36--md"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>
        </div>

        <div class="row g-row-col--5">
            <?php if (have_rows('services_pricing')): ?>
                <?php while (have_rows('services_pricing')): the_row(); ?>
                    <?php if (have_rows('plans')): ?>
                        <?php $delay = 0.1; ?>
                        <?php while (have_rows('plans')): the_row();
                            $icon = get_sub_field('icon') ?: 'ti-archive';
                            $plan_name = get_sub_field('name') ?: 'Plan';
                            $features = get_sub_field('features') ?: [];
                            $price = get_sub_field('price') ?: '0';
                            $button_text = get_sub_field('button_text') ?: 'Signup';
                            $button_link = get_sub_field('button_link') ?: '#';
                        ?>
                            <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay="<?php echo $delay; ?>s">
                                    <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                        <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs <?php echo esc_attr($icon); ?>"></i>
                                        <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"><?php echo esc_html($plan_name); ?></h3>
                                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                            <?php if (is_array($features)): ?>
                                                <?php foreach ($features as $feature): ?>
                                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> <?php echo esc_html($feature['feature']); ?></li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                        <div class="g-margin-b-40--xs">
                                            <span class="s-plan-v1__price-mark">$</span>
                                            <span class="s-plan-v1__price-tag"><?php echo esc_html($price); ?></span>
                                        </div>
                                        <a href="<?php echo esc_url($button_link); ?>" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs"><?php echo esc_html($button_text); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php $delay += 0.1; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

