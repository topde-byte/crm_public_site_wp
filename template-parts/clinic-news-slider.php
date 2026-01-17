<?php
$news = get_field('news');
$eyebrow = $news['eyebrow'] ?? '';
$title = $news['title'] ?? '';
$description = $news['description'] ?? '';
$items = $news['items'] ?? [];
?>

<div class="container-fluid g-padding-y-80--xs g-padding-y-125--sm">
    <?php if ($eyebrow || $title || $description): ?>
        <div class="g-text-center--xs g-margin-b-80--xs">
            <?php if ($eyebrow): ?>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                    <?php echo esc_html($eyebrow); ?>
                </p>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-15--xs"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>
            <?php if ($description): ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($items)): ?>
        <!-- Swiper -->
        <div class="s-swiper js__swiper-news">
            <!-- Wrapper -->
            <div class="swiper-wrapper">
                <?php foreach ($items as $item): ?>
                    <article class="s-promo-block-v6 g-bg-position--center swiper-slide"
                             style="background: url('<?php echo esc_url($item['background_image'] ?? ''); ?>');">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs">
                            <div class="g-margin-b-25--xs">
                                <?php if (!empty($item['title'])): ?>
                                    <h3 class="g-font-size-16--xs g-color--white g-margin-b-5--xs"><?php echo esc_html($item['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($item['description'])): ?>
                                    <p class="g-color--white"><?php echo esc_html($item['description']); ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($item['button_text']) && !empty($item['button_link'])): ?>
                                <a href="<?php echo esc_url($item['button_link']); ?>"
                                   class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50"><?php echo esc_html($item['button_text']); ?></a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <!-- End Wrapper -->
            <!-- Pagination -->
            <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--dark g-text-center--xs js__swiper-pagination"></div>
        </div>
        <!-- End Swiper -->
    <?php endif; ?>
</div>

