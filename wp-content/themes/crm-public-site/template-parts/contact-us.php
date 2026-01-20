<?php

$contact_us = get_field('contact_us');
$eyebrow  = $contact_us['eyebrow'];
$title    = $contact_us['title'];
$contacts = $contact_us['contacts'];
?>

<section class="g-position--relative g-bg-color--primary">
    <div class="g-container--md g-padding-y-125--xs">

        <?php if ($eyebrow || $title): ?>
            <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">

                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                        <?= esc_html($eyebrow); ?>
                    </p>
                <?php endif; ?>

                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">
                        <?= esc_html($title); ?>
                    </h2>
                <?php endif; ?>

            </div>
        <?php endif; ?>

        <?php if ($contacts): ?>
            <div class="row g-row-col--5 g-margin-b-80--xs">

                <?php foreach ($contacts as $contact): ?>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs">
                        <div class="g-text-center--xs">

                            <?php if (!empty($contact['icon'])): ?>
                                <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs <?= esc_attr($contact['icon']); ?>"></i>
                            <?php endif; ?>

                            <?php if (!empty($contact['title'])): ?>
                                <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">
                                    <?= esc_html($contact['title']); ?>
                                </h4>
                            <?php endif; ?>

                            <?php if (!empty($contact['description'])): ?>
                                <p class="g-color--white-opacity">
                                    <?= esc_html($contact['description']); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
        <form class="center-block g-width-500--sm g-width-550--md">
            <div class="g-margin-b-30--xs">
                <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
            </div>
            <div class="row g-row-col-5 g-margin-b-50--xs">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                </div>
            </div>
            <div class="g-margin-b-80--xs">
                <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
            </div>
            <div class="g-text-center--xs">
                <button type="submit"
                        class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">
                    Submit
                </button>
            </div>
        </form>

    </div>
</section>
