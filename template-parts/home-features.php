<?php
$block = get_field('home_features');
$eyebrow = $block['eyebrow'] ?? 'Welcome to Megakit';
$title = $block['title'] ?? '';
$features = $block['features'] ?? [];
?>

<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-100--xs">
        <?php if ($eyebrow): ?>
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>
        <?php if ($title): ?>
            <h2 class="g-font-size-32--xs g-font-size-36--md"><?php echo wp_kses_post($title); ?></h2>
        <?php endif; ?>
    </div>
    
    <?php if (have_rows('home_features')): ?>
        <?php while (have_rows('home_features')): the_row(); ?>
            <?php if (have_rows('features')): ?>
                <?php 
                $all_features = [];
                while (have_rows('features')): the_row();
                    $all_features[] = array(
                        'icon' => get_sub_field('icon'),
                        'title' => get_sub_field('title'),
                        'description' => get_sub_field('description'),
                        'delay' => get_sub_field('animation_delay') ?: '0.1'
                    );
                endwhile;
                
                $half = ceil(count($all_features) / 2);
                $first_row = array_slice($all_features, 0, $half);
                $second_row = array_slice($all_features, $half);
                ?>
                
                <div class="row g-margin-b-60--xs g-margin-b-70--md">
                    <?php foreach ($first_row as $feature): ?>
                        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                            <div class="clearfix">
                                <div class="g-media g-width-30--xs">
                                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay="<?php echo esc_attr($feature['delay']); ?>s">
                                        <i class="g-font-size-28--xs g-color--primary <?php echo esc_attr($feature['icon']); ?>"></i>
                                    </div>
                                </div>
                                <div class="g-media__body g-padding-x-20--xs">
                                    <h3 class="g-font-size-18--xs"><?php echo esc_html($feature['title']); ?></h3>
                                    <p class="g-margin-b-0--xs"><?php echo esc_html($feature['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <?php if (!empty($second_row)): ?>
                    <div class="row">
                        <?php foreach ($second_row as $feature): ?>
                            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay="<?php echo esc_attr($feature['delay']); ?>s">
                                            <i class="g-font-size-28--xs g-color--primary <?php echo esc_attr($feature['icon']); ?>"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-20--xs">
                                        <h3 class="g-font-size-18--xs"><?php echo esc_html($feature['title']); ?></h3>
                                        <p class="g-margin-b-0--xs"><?php echo esc_html($feature['description']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

