<?php
$block = get_field('services_testimonials');
$eyebrow = $block['eyebrow'] ?? 'Testimonials';
$testimonials = $block['testimonials'] ?? [];
?>

<div class="g-hor-divider__dashed--sky-light g-padding-y-80--xs g-padding-y-125--xsm">
    <div class="container g-text-center--xs">
        <?php if ($eyebrow): ?>
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        
        <div class="s-swiper js__swiper-testimonials">
            <div class="swiper-wrapper g-margin-b-50--xs">
                <?php if (have_rows('services_testimonials')): ?>
                    <?php while (have_rows('services_testimonials')): the_row(); ?>
                        <?php if (have_rows('testimonials')): ?>
                            <?php while (have_rows('testimonials')): the_row();
                                $image = get_sub_field('image');
                                $quote = get_sub_field('quote');
                                $name = get_sub_field('name');
                                $company = get_sub_field('company');
                            ?>
                                <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                                    <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                        <?php if ($image): ?>
                                            <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs"
                                                 src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
                                        <?php endif; ?>
                                        <div class="g-margin-b-40--xs">
                                            <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" <?php echo esc_html($quote); ?> "</i></p>
                                        </div>
                                        <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                        <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs"><?php echo esc_html($name); ?> / <?php echo esc_html($company); ?></h4>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <!-- Arrows -->
            <div class="g-font-size-22--xs g-color--heading js__swiper-fraction"></div>
            <a href="javascript:void(0);"
               class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);"
               class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
        </div>
    </div>
</div>

