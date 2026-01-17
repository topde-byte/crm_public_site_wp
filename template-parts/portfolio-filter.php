<?php
$portfolio_filter = get_field('portfolio_filter');
$filters = $portfolio_filter['filters'] ?? [];
?>

<?php if (!empty($filters)): ?>
<div class="container g-padding-y-100--xs">
    <div class="s-portfolio">
        <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
            <?php foreach ($filters as $filter): ?>
                <div data-filter="<?php echo esc_attr($filter['filter_class'] ?? '*'); ?>" 
                     class="s-portfolio__filter-v1-item cbp-filter-item <?php echo ($filter['is_active'] ?? false) ? 'cbp-filter-item-active' : ''; ?>">
                    <?php echo esc_html($filter['label'] ?? ''); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

