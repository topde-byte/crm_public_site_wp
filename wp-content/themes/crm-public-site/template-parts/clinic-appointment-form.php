<?php
$appointment = get_field('appointment');
$form_title = $appointment['form_title'] ?? '';
$contact_title = $appointment['contact_title'] ?? '';
$contacts = $appointment['contacts'] ?? [];
$social_links = $appointment['social_links'] ?? [];
$anchor_id = $appointment['anchor_id'] ?? '';
?>

<div id="<?php echo esc_attr($anchor_id ?: 'js__scroll-to-appointment'); ?>" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
    <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
        <div class="row">
            <!-- Form -->
            <div class="col-md-8 js__form-eqaul-height-v1">
                <div class="g-padding-x-40--xs g-padding-y-50--xs">
                    <?php if ($form_title): ?>
                        <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs"><?php echo esc_html($form_title); ?></h2>
                    <?php endif; ?>
                    <form>
                        <div class="row g-margin-b-30--xs g-margin-b-50--md">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs"
                                       placeholder="* Full Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs"
                                       placeholder="* Phone Number">
                            </div>
                        </div>
                        <div class="row g-margin-b-50--xs g-margin-b-50--md">
                            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs"
                                       placeholder="* Department">
                            </div>
                            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs"
                                       placeholder="* Doctor">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs"
                                       placeholder="* DD/MM/YY">
                            </div>
                        </div>
                        <div class="g-margin-b-50--xs">
                            <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5"
                                      placeholder="* What ails you?"></textarea>
                        </div>
                        <div class="g-text-center--xs">
                            <button type="submit"
                                    class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Form -->

            <!-- Contacts -->
            <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
                <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                    <?php if ($contact_title): ?>
                        <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs"><?php echo esc_html($contact_title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($contacts)): ?>
                        <ul class="list-unstyled g-margin-b-70--xs">
                            <?php foreach ($contacts as $contact): ?>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <?php if (!empty($contact['icon'])): ?>
                                            <i class="g-font-size-20--xs g-color--white-opacity-light <?php echo esc_attr($contact['icon']); ?>"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="g-media__body">
                                        <?php echo wp_kses_post(nl2br($contact['content'] ?? '')); ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (!empty($social_links)): ?>
                        <ul class="list-inline g-ul-li-lr-15--xs">
                            <?php foreach ($social_links as $social): ?>
                                <?php if (!empty($social['link']) && !empty($social['icon'])): ?>
                                    <li>
                                        <a href="<?php echo esc_url($social['link']); ?>" target="_blank" rel="noopener">
                                            <i class="g-font-size-20--xs g-color--white-opacity <?php echo esc_attr($social['icon']); ?>"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments"
                       style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
                </div>
            </div>
            <!-- End Contacts -->
        </div>
    </div>
</div>
<!-- End Form -->

