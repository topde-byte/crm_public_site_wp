<?php
$team_speakers = get_field('team_speakers');
$speakers = $team_speakers['speakers'] ?? [];
?>

<?php if (!empty($speakers)): ?>
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row g-overflow--hidden">
            <?php foreach ($speakers as $index => $speaker): ?>
                <?php
                $img = $speaker['image'] ?? null;
                $name = $speaker['name'] ?? '';
                $role = $speaker['role'] ?? '';
                $description = $speaker['description'] ?? '';
                ?>
                <div class="col-xs-6 g-full-width--xs <?php echo $index === 0 ? 'g-margin-b-30--xs g-margin-b-0--lg' : ''; ?>">
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <?php if (!empty($img['url'])): ?>
                            <img class="img-responsive g-width-100-percent--xs"
                                 src="<?php echo esc_url($img['url']); ?>"
                                 alt="<?php echo esc_attr($img['alt'] ?? $name); ?>">
                        <?php endif; ?>
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <?php if ($name): ?>
                                <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                    <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">
                                        <?php echo esc_html($name); ?>
                                    </h4>
                                </div>
                            <?php endif; ?>
                            <?php if ($role): ?>
                                <p class="g-font-weight--700"><?php echo esc_html($role); ?></p>
                            <?php endif; ?>
                            <?php if ($description): ?>
                                <p><?php echo esc_html($description); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


