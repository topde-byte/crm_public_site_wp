<?php
$features = get_field('features');
$features_list = $features['features_list'] ?? [];
?>

<div class="g-hor-divider__solid--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <?php if (!empty($features_list)): ?>
            <?php 
            // Group features into rows of 3
            $rows = array_chunk($features_list, 3);
            foreach ($rows as $row_index => $row): 
            ?>
                <div class="row g-margin-b-60--xs g-margin-b-70--md">
                    <?php foreach ($row as $index => $feature): ?>
                        <div class="col-sm-4 <?php echo $index < count($row) - 1 ? 'g-margin-b-60--xs g-margin-b-0--md' : ''; ?>">
                            <!-- Media -->
                            <div class="clearfix">
                                <div class="g-media g-width-60--xs">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay="<?php echo esc_attr(($row_index * 0.3) + ($index * 0.1) + 0.1); ?>s">
                                        <?php if (!empty($feature['icon_svg'])): ?>
                                            <?php echo $feature['icon_svg']; ?>
                                        <?php elseif (!empty($feature['icon_class'])): ?>
                                            <i class="g-font-size-60--xs g-color--primary <?php echo esc_attr($feature['icon_class']); ?>"></i>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="g-media__body g-padding-x-20--xs">
                                    <?php if (!empty($feature['title'])): ?>
                                        <h3 class="g-font-size-18--xs g-margin-b-10--xs"><?php echo esc_html($feature['title']); ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($feature['description'])): ?>
                                        <p class="g-margin-b-0--xs"><?php echo esc_html($feature['description']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- End Media -->
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

