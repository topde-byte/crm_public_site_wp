<?php
$block = get_field('services_mockup');
$image = $block['image'] ?? '';

// Fallback to default mockup
if (empty($image)) {
    $image = get_template_directory_uri() . '/img/mockups/devices-01.png';
}
?>

<div class="container g-margin-t-o-150--xs">
    <div class="center-block s-mockup-v1">
        <img class="img-responsive" src="<?php echo esc_url($image); ?>" alt="Mockup Image">
    </div>
</div>

