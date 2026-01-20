<?php
$hero_slider = get_field('hero_slider');
$slides = $hero_slider['slides'] ?? [];
?>

<?php if (!empty($slides)): ?>
<div class="s-swiper js__swiper-slider">
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
            <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide"
                 style="background: url('<?php echo esc_url($slide['background_image']); ?>');">
                <div class="container g-ver-center--xs <?php echo $slide['alignment'] === 'right' ? 'g-text-right--xs' : ''; ?>">
                    <div class="row">
                        <div class="col-md-7 <?php echo $slide['alignment'] === 'right' ? 'col-md-offset-5' : ''; ?>">
                            <div class="g-margin-b-50--xs">
                                <?php if (!empty($slide['title'])): ?>
                                    <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-60--md g-color--white">
                                        <?php echo wp_kses_post(nl2br($slide['title'])); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if (!empty($slide['description'])): ?>
                                    <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">
                                        <?php echo esc_html($slide['description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($slide['button_text']) && !empty($slide['button_link'])): ?>
                                <a href="<?php echo esc_url($slide['button_link']); ?>"
                                   class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">
                                    <?php echo esc_html($slide['button_text']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- End Swiper Wrapper -->
    <!-- Pagination -->
    <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
</div>
<?php endif; ?>

