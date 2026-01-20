<?php
$block = get_field('home_hero_slider');
$slides = $block['slides'] ?? [];
?>

<div class="s-swiper js__swiper-one-item">
    <div class="swiper-wrapper">
        <?php if (have_rows('home_hero_slider')): ?>
            <?php while (have_rows('home_hero_slider')): the_row(); ?>
                <?php if (have_rows('slides')): ?>
                    <?php while (have_rows('slides')): the_row();
                        $background = get_sub_field('background_image');
                        $title = get_sub_field('title');
                        $video_url = get_sub_field('video_url');
                    ?>
                        <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                             style="background: url('<?php echo esc_url($background); ?>');">
                            <div class="container g-text-center--xs g-ver-center--xs">
                                <div class="g-margin-b-30--xs">
                                    <?php if ($title): ?>
                                        <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"><?php echo wp_kses_post($title); ?></h1>
                                    <?php endif; ?>
                                </div>
                                <?php if ($video_url): ?>
                                    <a class="js__popup__youtube" href="<?php echo esc_url($video_url); ?>" title="Intro Video">
                                        <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- Arrows -->
    <a href="javascript:void(0);"
       class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);"
       class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->

    <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
        <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
        <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
    </a>
</div>

