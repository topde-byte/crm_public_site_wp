<?php
$faq_intro = get_field('faq_intro');
$anchor_id = $faq_intro['anchor_id'] ?? 'js__scroll-to-section';
$title = $faq_intro['title'] ?? '';
$left_column = $faq_intro['left_column'] ?? '';
$left_highlighted = $faq_intro['left_highlighted'] ?? [];
$right_column = $faq_intro['right_column'] ?? '';
$bottom_text = $faq_intro['bottom_text'] ?? '';
?>

<div id="<?php echo esc_attr($anchor_id); ?>" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <?php if ($title): ?>
        <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs">
            <?php echo wp_kses_post(nl2br($title)); ?>
        </h2>
    <?php endif; ?>
    <div class="row g-margin-b-50--xs">
        <?php if ($left_column || !empty($left_highlighted)): ?>
            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--sm">
                <?php if ($left_column): ?>
                    <p><?php echo esc_html($left_column); ?></p>
                <?php endif; ?>
                <?php if (!empty($left_highlighted)): ?>
                    <div class="s-faq__pseudo g-padding-y-40--xs">
                        <?php foreach ($left_highlighted as $index => $item): ?>
                            <div class="<?php echo $index > 0 ? 'g-margin-l-70--xs' : ''; ?>">
                                <p class="g-color--primary g-font-family--playfair"><i><?php echo esc_html($item['text'] ?? ''); ?></i></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($right_column): ?>
            <div class="col-sm-6">
                <?php echo wp_kses_post(wpautop($right_column)); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if ($bottom_text): ?>
        <div class="g-text-center--xs">
            <?php echo wp_kses_post(wpautop($bottom_text)); ?>
        </div>
    <?php endif; ?>
</div>

