<?php
$how_it_works = get_field('how_it_works');

if (!$how_it_works) {
    return;
}

$eyebrow    = $how_it_works['eyebrow'] ?? '';
$title      = $how_it_works['title'] ?? '';
$steps      = $how_it_works['work_steps'] ?? [];
$link       = $how_it_works['link'] ?? null;
?>

<section class="g-bg-color--primary-ltr">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">

        <?php if ($eyebrow || $title): ?>
            <div class="g-text-center--xs g-margin-b-100--xs">
                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                        <?= esc_html($eyebrow); ?>
                    </p>
                <?php endif; ?>

                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">
                        <?= esc_html($title); ?>
                    </h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($steps)): ?>
            <ul class="list-inline row g-margin-b-100--xs">
                <?php foreach ($steps as $index => $step): ?>
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs">
                        <div class="center-block g-text-center--xs">

                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs
                                             g-width-100--xs
                                             g-height-100--xs
                                             g-font-size-38--xs
                                             g-color--primary
                                             g-bg-color--white
                                             g-box-shadow__dark-lightest-v4
                                             g-padding-x-20--xs
                                             g-padding-y-20--xs
                                             g-radius--circle">
                                    <?= sprintf('%02d', $index + 1); ?>
                                </span>
                            </div>

                            <div class="g-padding-x-20--xs">
                                <?php if (!empty($step['step_name'])): ?>
                                    <h3 class="g-font-size-18--xs g-color--white">
                                        <?= esc_html($step['step_name']); ?>
                                    </h3>
                                <?php endif; ?>

                                <?php if (!empty($step['step_description'])): ?>
                                    <p class="g-color--white-opacity">
                                        <?= esc_html($step['step_description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>

                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if ($link): ?>
            <div class="g-text-center--xs">
                <a href="<?= esc_url($link['url']); ?>"
                   target="<?= esc_attr($link['target'] ?: '_self'); ?>"
                   class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs">
                    <?= esc_html($link['title']); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>
