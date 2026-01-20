<?php
$portfolio_gallery = get_field('portfolio_gallery');
$items = $portfolio_gallery['items'] ?? [];
?>

<?php if (!empty($items)): ?>
<div class="container">
    <div id="js__grid-portfolio-gallery" class="cbp">
        <?php foreach ($items as $item): ?>
            <div class="s-portfolio__item cbp-item <?php echo esc_attr($item['categories'] ?? ''); ?>">
                <?php if (!empty($item['image'])): ?>
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo esc_url(is_array($item['image']) ? $item['image']['url'] : $item['image']); ?>" alt="<?php echo esc_attr(is_array($item['image']) ? ($item['image']['alt'] ?? $item['title'] ?? 'Portfolio Image') : ($item['title'] ?? 'Portfolio Image')); ?>">
                    </div>
                <?php endif; ?>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <?php if (!empty($item['title'])): ?>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs"><?php echo esc_html($item['title']); ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($item['description'])): ?>
                            <p class="g-color--white-opacity"><?php echo esc_html($item['description']); ?></p>
                        <?php endif; ?>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <?php 
                        $lightbox_url = '';
                        if (!empty($item['lightbox_image'])) {
                            $lightbox_url = is_array($item['lightbox_image']) ? $item['lightbox_image']['url'] : $item['lightbox_image'];
                        } elseif (!empty($item['image'])) {
                            $lightbox_url = is_array($item['image']) ? $item['image']['url'] : $item['image'];
                        }
                        if ($lightbox_url): 
                        ?>
                            <li>
                                <a href="<?php echo esc_url($lightbox_url); ?>"
                                   class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
                                   data-title="<?php echo esc_attr($item['lightbox_title'] ?? $item['title'] ?? ''); ?><?php if (!empty($item['description'])): ?> <br/> <?php echo esc_attr($item['description']); ?><?php endif; ?>">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($item['link_url'])): ?>
                            <li>
                                <a href="<?php echo esc_url($item['link_url']); ?>"
                                   class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle"
                                   <?php if (!empty($item['link_target'])): ?>target="<?php echo esc_attr($item['link_target']); ?>"<?php endif; ?>>
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

