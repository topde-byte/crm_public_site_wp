<?php
$about_blog = get_field('about_blog');
$about_blog_eyebrow = $about_blog['eyebrow'] ?? '';
$about_blog_title = $about_blog['title'] ?? '';
$news_rows = $about_blog['news'] ?? [];
?>
<div class="g-bg-color--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                <?= esc_html($about_blog_eyebrow) ?>
            </p>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">
                <?= esc_html($about_blog_title) ?>
            </h2>
        </div>

        <?php if (!empty($news_rows)) : ?>
            <div class="row">
                <?php foreach ($news_rows as $news_item) :
                    $post_obj = $news_item['news_post'] ?? null;
                    if (!$post_obj) continue;

                    $post = $post_obj;
                    setup_postdata($post);

                    $thumbnail_url = get_the_post_thumbnail_url($post, 'full');
                    if (!$thumbnail_url) {
                        $thumbnail_url = get_template_directory_uri() . '/img/970x970/placeholder.jpg';
                    }

                    $description = wp_trim_words($post_obj->post_excerpt, 20);
                    ?>
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <article>
                            <img class="img-responsive" src="<?= esc_url($thumbnail_url); ?>" alt="<?= the_title_attribute(['echo' => false]); ?>">

                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                                    News
                                </p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1">
                                    <a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
                                </h3>
                                <p><?= esc_html(wp_trim_words($description, 20)); ?></p>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
