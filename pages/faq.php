<?php
/*
Template Name: FAQ Page
*/
get_header();
?>

<?php
while ( have_posts() ) :
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'textdomain' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
    </article>
    <?php
endwhile;
?>

<?php
get_footer();
?>
