<section>
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">

        <?php if (have_rows('about_event')): ?>
            <?php $i = 0; ?>

            <?php while (have_rows('about_event')): the_row(); ?>
                <?php
                $i++;

                $item = get_sub_field('culture');

                if (!$item) continue;

                $first_img   = $item['first_image'];
                $second_img  = $item['second_image'];
                $eyebrow     = $item['eyebrow'];
                $title       = $item['title'];
                $description = $item['description'];

                $is_second = $i === 2;
                ?>

                <div class="row g-hor-centered-row--md g-row-col--5 <?= $is_second ? '' : 'g-margin-b-60--xs g-margin-b-100--md' ?>">

                    <div class="col-sm-3 col-xs-6 <?= $is_second ? 'col-sm-push-6' : '' ?> g-hor-centered-row__col">
                        <div class="wow <?= $is_second ? 'fadeInRight' : 'fadeInLeft' ?>" data-wow-duration=".3" data-wow-delay=".<?= $is_second ? '2' : '1' ?>s">
                            <?php if ($first_img): ?>
                                <img class="img-responsive" src="<?= esc_url($first_img['url']) ?>" alt="Image">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6 <?= $is_second ? 'col-sm-push-6' : '' ?> g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                        <div class="wow <?= $is_second ? 'fadeInRight' : 'fadeInLeft' ?>" data-wow-duration=".3" data-wow-delay=".<?= $is_second ? '1' : '2' ?>s">
                            <?php if ($second_img): ?>
                                <img class="img-responsive" src="<?= esc_url($second_img['url']) ?>" alt="Image">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-5 <?= $is_second ? 'col-sm-pull-7 g-text-left--xs g-text-right--md' : '' ?> g-hor-centered-row__col">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                            <?= esc_html($eyebrow) ?>
                        </p>

                        <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">
                            <?= esc_html($title) ?>
                        </h2>

                        <p class="g-font-size-18--sm">
                            <?= esc_html($description) ?>
                        </p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>
