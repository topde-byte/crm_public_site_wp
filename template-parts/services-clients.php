<?php
$block = get_field('services_clients');
$clients = $block['clients'] ?? [];
?>

<div class="g-container--md g-padding-y-80--xs g-padding-y-100--sm">
    <div class="s-swiper js__swiper-clients">
        <div class="swiper-wrapper">
            <?php if (have_rows('services_clients')): ?>
                <?php while (have_rows('services_clients')): the_row(); ?>
                    <?php if (have_rows('clients')): ?>
                        <?php $delay = 0.1; ?>
                        <?php while (have_rows('clients')): the_row();
                            $logo = get_sub_field('logo');
                        ?>
                            <div class="swiper-slide">
                                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay="<?php echo $delay; ?>s">
                                    <img class="s-clients-v1" src="<?php echo esc_url($logo); ?>" alt="Clients Logo">
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

