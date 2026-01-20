<?php
$block = get_field('services_portfolio');
$eyebrow = $block['eyebrow'] ?? 'Branding Work';
$title = $block['title'] ?? 'Projects';
$description = $block['description'] ?? '';
$items = $block['items'] ?? [];
?>

<div class="container g-padding-y-80--xs g-padding-y-125--xsm">
    <div class="row g-margin-b-30--xs">
        <div class="col-sm-4">
            <div class="g-margin-t-20--md g-margin-b-40--xs">
                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"><?php echo esc_html($eyebrow); ?></p>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--md"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p><?php echo wp_kses_post($description); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-sm-8">
            <div id="js__grid-portfolio-gallery" class="s-portfolio__paginations-v1 cbp">
                <?php if (have_rows('services_portfolio')): ?>
                    <?php while (have_rows('services_portfolio')): the_row(); ?>
                        <?php if (have_rows('items')): ?>
                            <?php while (have_rows('items')): the_row();
                                $image = get_sub_field('image');
                                $item_title = get_sub_field('title') ?: 'Portfolio Item';
                                $author = get_sub_field('author') ?: 'by KeenThemes Inc.';
                                $categories = get_sub_field('categories') ?: 'motion graphic';
                                $link = get_sub_field('link') ?: '#';
                            ?>
                                <div class="s-portfolio__item cbp-item <?php echo esc_attr($categories); ?>">
                                    <div class="s-portfolio__img-effect">
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($item_title); ?>">
                                    </div>
                                    <div class="s-portfolio__caption-hover--cc">
                                        <div class="g-margin-b-25--xs">
                                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-5--xs"><?php echo esc_html($item_title); ?></h3>
                                            <p class="g-color--white-opacity"><?php echo esc_html($author); ?></p>
                                        </div>
                                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                            <li>
                                                <a href="<?php echo esc_url($image); ?>"
                                                   class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
                                                   data-title="<?php echo esc_attr($item_title); ?> <br/> <?php echo esc_attr($author); ?>">
                                                    <i class="ti-fullscreen"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo esc_url($link); ?>"
                                                   class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                                    <i class="ti-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

