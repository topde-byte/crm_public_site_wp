<?php
$faq_accordion = get_field('faq_accordion');
$items_left = $faq_accordion['items_left'] ?? [];
$items_right = $faq_accordion['items_right'] ?? [];
?>

<style>
.s-faq-accordion__item {
    padding: 0;
    margin: 0;
}
.s-faq-accordion__details {
    border: none;
    padding: 0;
    margin: 0;
    overflow: hidden;
}
.s-faq-accordion__summary {
    list-style: none;
    cursor: pointer;
    padding: 1.25rem 0;
    display: inline-block;
    border-bottom: 0.0625rem solid rgba(255, 255, 255, 0.3);
    margin: 0.3125rem 0;
    outline: none;
    width: 100%;
    position: relative;
    transition: all 0.3s ease;
}
.s-faq-accordion__summary:hover {
    opacity: 0.8;
}
.s-faq-accordion__summary::-webkit-details-marker {
    display: none;
}
.s-faq-accordion__header {
    display: flex;
    align-items: flex-start;
    gap: 0;
}
.s-faq-accordion__icon {
    flex-shrink: 0;
    width: 19px;
    height: 19px;
    margin-right: 15px;
    transition: transform 0.3s ease;
}

.s-faq-accordion__icon svg {
    width: 100%;
    height: 100%;
    fill: #fff;
}
.s-faq-accordion__title {
    flex: 1;
    margin: 0;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    transition: color 0.3s ease;
}
.s-faq-accordion__details[open] .s-faq-accordion__title {
    color: rgba(255, 255, 255, 1);
}
.s-faq-accordion__content {
    color: red;
    line-height: 1.8;
    font-size: 0.9rem;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, opacity 0.4s ease, padding 0.3s ease;
}
.s-faq-accordion__details[open] .s-faq-accordion__content {
    max-height: 1000px;
    opacity: 1;
    
    animation: slideDown 0.4s ease forwards;
}
.s-faq-accordion__content p {
    margin-bottom: 0.5rem;
    color: rgba(255, 255, 255, 1);
}
.s-faq-accordion__content p:last-child {
    margin-bottom: 0;
}

@keyframes slideDown {
    from {
        transform: translateY(-10px);
    }
    to {
        transform: translateY(0);
    }
}
</style>

<div class="s-faq g-bg-color--primary">
    <div class="container g-padding-y-125--xs">
        <div class="row">
            <?php if (!empty($items_left)): ?>
                <div class="col-sm-6">
                    <div class="s-faq-accordion">
                        <?php foreach ($items_left as $item): ?>
                            <div class="s-faq-accordion__item">
                                <details class="s-faq-accordion__details">
                                    <summary class="s-faq-accordion__summary">
                                        <div class="s-faq-accordion__header">
                                            <?php if (!empty($item['icon_svg'])): ?>
                                                <div class="s-faq-accordion__icon">
                                                    <?php echo $item['icon_svg']; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($item['title'])): ?>
                                                <h4 class="s-faq-accordion__title"><?php echo esc_html($item['title']); ?></h4>
                                            <?php endif; ?>
                                        </div>
                                    </summary>
                                    <?php if (!empty($item['content'])): ?>
                                        <div class="s-faq-accordion__content">
                                            <?php echo wp_kses_post(wpautop($item['content'])); ?>
                                        </div>
                                    <?php endif; ?>
                                </details>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($items_right)): ?>
                <div class="col-sm-6">
                    <div class="s-faq-accordion">
                        <?php foreach ($items_right as $item): ?>
                            <div class="s-faq-accordion__item">
                                <details class="s-faq-accordion__details">
                                    <summary class="s-faq-accordion__summary">
                                        <div class="s-faq-accordion__header">
                                            <?php if (!empty($item['icon_svg'])): ?>
                                                <div class="s-faq-accordion__icon">
                                                    <?php echo $item['icon_svg']; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($item['title'])): ?>
                                                <h4 class="s-faq-accordion__title"><?php echo esc_html($item['title']); ?></h4>
                                            <?php endif; ?>
                                        </div>
                                    </summary>
                                    <?php if (!empty($item['content'])): ?>
                                        <div class="s-faq-accordion__content">
                                            <?php echo wp_kses_post(wpautop($item['content'])); ?>
                                        </div>
                                    <?php endif; ?>
                                </details>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
