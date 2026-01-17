<?php
$services = get_field('services');
$eyebrow = $services['eyebrow'] ?? '';
$title = $services['title'] ?? '';
$description = $services['description'] ?? '';
$service_list = $services['service_list'] ?? [];
$images = $services['images'] ?? [];
?>

<div class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row g-margin-b-10--xs">
        <?php if (!empty($images)): ?>
        <div class="col-md-6 g-margin-b-60--xs g-margin-b-0--lg">
            <!-- Masonry Grid -->
            <div class="row g-overflow--hidden">
    
    <div class="col-xs-6 g-padding-r-0--xs">
        <?php
        if (!empty($images[0])):
            $img = $images[0];
            $url = is_array($img) ? $img['url'] : wp_get_attachment_image_url($img, 'full');
            $alt = is_array($img) ? $img['alt'] : '';
        ?>
            <img
                src="<?= esc_url($url); ?>"
                alt="<?= esc_attr($alt); ?>"
                class="img-responsive"
            >
        <?php endif; ?>
    </div>

    <div class="col-xs-6 ">
        <div class="row">

            <?php if (!empty($images[1])):
                $img = $images[1];
                $url = is_array($img) ? $img['url'] : wp_get_attachment_image_url($img, 'full');
                $alt = is_array($img) ? $img['alt'] : '';
            ?>
                <div class="col-xs-12 g-margin-b-20--xs">
                    <img
                        src="<?= esc_url($url); ?>"
                        alt="<?= esc_attr($alt); ?>"
                        class="img-responsive"
                    >
                </div>
            <?php endif; ?>

            <?php if (!empty($images[2])):
                $img = $images[2];
                $url = is_array($img) ? $img['url'] : wp_get_attachment_image_url($img, 'full');
                $alt = is_array($img) ? $img['alt'] : '';
            ?>
                <div class="col-xs-12">
                    <img
                        src="<?= esc_url($url); ?>"
                        alt="<?= esc_attr($alt); ?>"
                        class="img-responsive"
                    >
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>

            <!-- End Masonry Grid -->
        </div>
        <?php endif; ?>
        <div class="col-md-5 g-margin-b-10--xs g-margin-b-0--lg g-margin-t-10--lg g-margin-l-20--lg">
            <div class="g-margin-b-30--xs">
                <?php if ($eyebrow): ?>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs">
                        <?php echo esc_html($eyebrow); ?>
                    </p>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
            <?php if (!empty($service_list)): ?>
                <div class="row">
                    <?php 
                    $columns = 3;
                    $per_column = ceil(count($service_list) / $columns);
                    for ($col = 0; $col < $columns; $col++): 
                        $start = $col * $per_column;
                        $column_items = array_slice($service_list, $start, $per_column);
                    ?>
                        <?php if (!empty($column_items)): ?>
                            <ul class="list-unstyled col-xs-4 g-full-width--xs g-ul-li-tb-5--xs g-margin-b-20--xs g-margin-b-0--sm">
                                <?php foreach ($column_items as $item): ?>
                                    <li>
                                        <i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        <?php echo esc_html($item['service_name']); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

