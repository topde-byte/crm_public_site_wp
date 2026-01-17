<?php
$promo_block = get_field('promo_block');
$title = $promo_block['title'] ?? '';
$description = $promo_block['description'] ?? '';
$background_color = $promo_block['background_color'] ?? 'sky-light';
?>

<div class="g-bg-color--<?php echo esc_attr($background_color); ?>">
    <div class="container g-padding-y-125--xs">
        <div class="g-padding-y-50--xs">
            <?php if ($title): ?>
                <h1 class="g-font-size-35--xs g-font-size-55--sm g-font-size-70--lg"><?php echo esc_html($title); ?></h1>
            <?php endif; ?>
            <?php if ($description): ?>
                <p class="g-font-size-22--xs g-font-size-24--md g-margin-b-0--xs"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

