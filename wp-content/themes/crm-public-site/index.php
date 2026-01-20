<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>clear</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
