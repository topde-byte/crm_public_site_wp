<?php //wp_footer(); ?><!--</body></html>-->
<footer class="g-bg-color--dark">

    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <?php 
                $nav_links = get_field('footer_navigation_links', 'option');
                $social_links = get_field('footer_social_links', 'option');
                $legal_links = get_field('footer_legal_links', 'option');
                $brand_title = get_field('footer_brand_title', 'option');
                $brand_description = get_field('footer_brand_description', 'option');
                ?>
                
                <?php if ($nav_links && !empty($nav_links)): ?>
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <?php foreach ($nav_links as $link): ?>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="<?php echo esc_url($link['url']); ?>">
                                        <?php echo esc_html($link['label']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <?php if ($social_links && !empty($social_links)): ?>
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <?php foreach ($social_links as $link): ?>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo esc_html($link['label']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <?php if ($legal_links && !empty($legal_links)): ?>
                    <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <?php foreach ($legal_links as $link): ?>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="<?php echo esc_url($link['url']); ?>">
                                        <?php echo esc_html($link['label']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <?php if ($brand_title || $brand_description): ?>
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                        <?php if ($brand_title): ?>
                            <h3 class="g-font-size-18--xs g-color--white"><?php echo esc_html($brand_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($brand_description): ?>
                            <p class="g-color--white-opacity"><?php echo esc_html($brand_description); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container g-padding-y-50--xs">
        <div class="row">
            <div class="col-xs-6">
                <?php 
                $footer_logo = get_field('footer_logo', 'option');
                $footer_logo_alt = get_field('footer_logo_alt', 'option') ?: 'Site Logo';
                
                if ($footer_logo):
                ?>
                    <a href="<?php echo home_url('/'); ?>">
                        <img class="g-width-100--xs g-height-auto--xs" src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr($footer_logo_alt); ?>">
                    </a>
                <?php else: ?>
                    <a href="<?php echo home_url('/'); ?>">
                        <img class="g-width-100--xs g-height-auto--xs" src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt="<?php echo esc_attr($footer_logo_alt); ?>">
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-xs-6 g-text-right--xs">
                <?php 
                $copyright_text = get_field('footer_copyright_text', 'option');
                if ($copyright_text):
                ?>
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><?php echo wp_kses_post($copyright_text); ?></p>
                <?php else: ?>
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">
                        <a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
