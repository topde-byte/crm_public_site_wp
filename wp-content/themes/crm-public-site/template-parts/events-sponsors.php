<?php
$sponsors = get_field('sponsors');
$title = $sponsors['title'] ?? '';
$description = $sponsors['description'] ?? '';
$sponsors_list = $sponsors['sponsors_list'] ?? [];
?>

<div class="g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-container--sm">
        <?php if ($title || $description): ?>
            <div class="g-text-center--xs g-margin-b-80--xs">
                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p class="g-font-size-18--md"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if (!empty($sponsors_list)): ?>
        <div class="g-container--md">
            <!-- Swiper Clients -->
            <div class="s-swiper js__swiper-clients">
                <div class="swiper-wrapper">
                    <?php foreach ($sponsors_list as $index => $sponsor): ?>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay="<?php echo esc_attr(($index * 0.1) + 0.1); ?>s">
                                <?php if (!empty($sponsor['logo']['url'])): ?>
                                    <img class="s-clients-v1" 
                                         src="<?php echo esc_url($sponsor['logo']['url']); ?>" 
                                         alt="<?php echo esc_attr($sponsor['logo']['alt'] ?? $sponsor['name'] ?? ''); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- End Swiper Clients -->
        </div>
    <?php endif; ?>
</div>

