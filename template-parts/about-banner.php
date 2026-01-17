<?php

$about_banner = get_field('about_banner');
$eyebrow = $about_banner['eyebrow'];
$title = $about_banner['title'];
$description = $about_banner['description'];
$bg_image = $about_banner['background_image'];
$learn_more = $about_banner['learn_more'];
$hire_us = $about_banner['hire_us'];
?>

<div class="g-position--relative g-fullheight--md js__parallax-window"
     style="background: url('<?= esc_url($bg_image['url']) ?>') 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
        <div class="g-margin-b-60--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                <?= $eyebrow ?></p>
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">
                <?= $title ?></h1>
            <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">
                <?= $description ?>
            </p>
        </div>
        <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="<?= $learn_more['url'] ?>"
                       class="text-uppercase s-btn s-btn-icon--md s-btn--primary-bg g-radius--50 g-padding-x-45--xs"> <?= $learn_more['title'] ?> </a>
                </span>
        <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="<?= $hire_us['url'] ?>"
                       class="text-uppercase s-btn s-btn-icon--md s-btn--white-brd g-radius--50 g-padding-x-65--xs"><?= $hire_us['title'] ?></a>
                </span>
    </div>
</div>
