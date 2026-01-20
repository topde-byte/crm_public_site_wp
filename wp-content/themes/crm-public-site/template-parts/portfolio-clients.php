<?php
$portfolio_clients = get_field('portfolio_clients');
$clients = $portfolio_clients['clients'] ?? [];
?>

<?php if (!empty($clients)): ?>
<div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <!-- Swiper Clients -->
    <div class="s-swiper js__swiper-clients">
        <div class="swiper-wrapper">
            <?php foreach ($clients as $index => $client): ?>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay="<?php echo esc_attr(($index + 1) * 0.1); ?>s">
                        <?php if (!empty($client['logo'])): ?>
                            <img class="s-clients-v1" 
                                 src="<?php echo esc_url(is_array($client['logo']) ? $client['logo']['url'] : $client['logo']); ?>" 
                                 alt="<?php echo esc_attr(is_array($client['logo']) ? ($client['logo']['alt'] ?? $client['name'] ?? 'Client Logo') : ($client['name'] ?? 'Client Logo')); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End Swiper Clients -->
</div>
<?php endif; ?>
