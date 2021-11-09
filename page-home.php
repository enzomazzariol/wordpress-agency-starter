<?php /* Template Name: Home Template */ 

get_header();
?>

<main id="primary" class="site-main container">

<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );

endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();