<?php
$upcoming_event = get_field('upcoming_event');
$background_image = $upcoming_event['background_image'] ?? '';
$title = $upcoming_event['title'] ?? '';
$day = $upcoming_event['day'] ?? '';
$month = $upcoming_event['month'] ?? '';
$ordinal = $upcoming_event['ordinal'] ?? '';
$description = $upcoming_event['description'] ?? '';
$button_text = $upcoming_event['button_text'] ?? '';
$button_link = $upcoming_event['button_link'] ?? '';
$form_title = $upcoming_event['form_title'] ?? '';
?>

<?php if ($background_image): ?>
<div class="s-promo-block-v2 js__parallax-window"
     style="background: url(<?php echo esc_url($background_image); ?>) 50% 0 no-repeat fixed; background-size: cover;">
    <div class="container">
        <div class="row g-hor-centered-row--md">
            <div class="col-md-7 g-hor-centered-row__col g-padding-y-80--xs">
                <?php if ($title): ?>
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if ($day || $month): ?>
                    <div class="g-margin-b-20--xs">
                        <?php if ($day): ?>
                            <span class="g-font-size-30--xs g-font-weight--700 g-color--white"><?php echo esc_html($day); ?></span>
                        <?php endif; ?>
                        <?php if ($ordinal): ?>
                            <span class="g-font-size-14--xs g-color--white"><?php echo esc_html($ordinal); ?></span>
                        <?php endif; ?>
                        <?php if ($month): ?>
                            <span class="g-font-size-30--xs g-color--white g-padding-x-5--xs"><i>of</i></span>
                            <span class="g-font-size-30--xs g-font-weight--700 g-color--white"><?php echo esc_html($month); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p class="g-font-size-18--xs g-color--white-opacity g-margin-b-40--xs"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                <?php if ($button_text && $button_link): ?>
                    <a href="<?php echo esc_url($button_link); ?>"
                       class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">
                        <?php echo esc_html($button_text); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-md-5 g-hor-centered-row__col g-margin-b-80--xs">
                <form class="center-block s-promo-block-v2__form g-width-100-percent--xs g-width-400--sm g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4">
                    <?php if ($form_title): ?>
                        <div class="g-text-center--xs g-margin-b-40--xs">
                            <h2 class="g-font-size-30--xs g-color--white"><?php echo esc_html($form_title); ?></h2>
                        </div>
                    <?php endif; ?>
                    <div class="g-margin-b-40--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit"
                                class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">
                            Join Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

