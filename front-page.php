<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

get_header();
?>

<!--Hero-->
<?php get_template_part( 'template-components/home', 'header' ); ?>

<!--Description-->
<?php get_template_part( 'template-components/home', 'description' ); ?>

<!--Programs-->
<?php get_template_part( 'template-components/home', 'programs' ); ?>

<!--Support-->
<?php get_template_part( 'template-components/home', 'support' ); ?>

<!--Testimonial-->
<?php get_template_part( 'template-components/home', 'testimonial' ); ?>

<!--Banner-->
<?php get_template_part( 'template-components/home', 'banner' ); ?>

<!--Sponsors-->
<?php get_template_part( 'template-components/home', 'sponsors' ); ?>

<!--Faqs-->
<?php get_template_part( 'template-components/home', 'faqs' ); ?>


<?php
get_footer();