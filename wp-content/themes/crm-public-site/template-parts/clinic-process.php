<?php
$process = get_field('process');
$eyebrow = $process['eyebrow'] ?? '';
$title = $process['title'] ?? '';
$steps = $process['steps'] ?? [];
$button_text = $process['button_text'] ?? '';
$button_link = $process['button_link'] ?? '';
?>

<div class="g-bg-color--primary-ltr">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <?php if ($eyebrow || $title): ?>
            <div class="g-text-center--xs g-margin-b-100--xs">
                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                        <?php echo esc_html($eyebrow); ?>
                    </p>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($steps)): ?>
            <ul class="list-inline row g-margin-b-100--xs">
                <?php foreach ($steps as $index => $step): ?>
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">
                                    <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                </span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <?php if (!empty($step['title'])): ?>
                                    <h3 class="g-font-size-18--xs g-color--white"><?php echo esc_html($step['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($step['description'])): ?>
                                    <p class="g-color--white-opacity"><?php echo esc_html($step['description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($button_text && $button_link): ?>
            <div class="g-text-center--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <a href="<?php echo esc_url($button_link); ?>"
                       class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50"><?php echo esc_html($button_text); ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

