<?php
$speakers = get_field('speakers');
$eyebrow = $speakers['eyebrow'] ?? '';
$title = $speakers['title'] ?? '';
$speakers_list = $speakers['speakers_list'] ?? [];
?>

<div class="g-hor-divider__dashed--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <?php if ($eyebrow || $title): ?>
            <div class="g-text-center--xs g-margin-b-80--xs">
                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                        <?php echo esc_html($eyebrow); ?>
                    </p>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($speakers_list)): ?>
            <div class="row g-overflow--hidden">
                <?php foreach ($speakers_list as $index => $speaker): ?>
                    <div class="col-xs-6 g-full-width--xs <?php echo $index === 0 ? 'g-margin-b-30--xs g-margin-b-0--lg' : ''; ?>">
                        <!-- Speaker -->
                        <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                            <?php if (!empty($speaker['image']['url'])): ?>
                                <img class="img-responsive g-width-100-percent--xs" 
                                     src="<?php echo esc_url($speaker['image']['url']); ?>" 
                                     alt="<?php echo esc_attr($speaker['image']['alt'] ?? $speaker['name'] ?? ''); ?>">
                            <?php endif; ?>
                            <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                                <?php if (!empty($speaker['name'])): ?>
                                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">
                                            <?php echo esc_html($speaker['name']); ?>
                                        </h4>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($speaker['role'])): ?>
                                    <p class="g-font-weight--700"><?php echo esc_html($speaker['role']); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($speaker['description'])): ?>
                                    <p><?php echo esc_html($speaker['description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- End Speaker -->
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

