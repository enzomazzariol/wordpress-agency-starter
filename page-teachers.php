<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

get_header();
?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>

    <header class="container-fluid px-0 teachers-banner">
    <?php
				 if (has_post_thumbnail()) {
					the_post_thumbnail('full', array( 'class' => 'cover-img' ) );
				    }
				else { ?>
                <img class="teachers-img" src="<?php echo catch_that_image(); ?>" alt="feature default" />
                <?php } ?>
	</header>

    <div class="container-fluid px-0 py-5 bg--gray">
        <div class="container ">
            <h1 class="mb-4"><?php single_post_title(); ?></h1>
            <?php
		    the_content();
		    ?>
        </div>
    </div>


<?php endif; ?>


<?php 

$glossaryposts = get_posts( $args ); 
$posts = get_posts(array(
    'posts_per_page'    => 12,
    'post_type'         => 'teachers',
));

if( $posts ): ?>
    
    <div class="container py-5">
		<div class="row">
        
    <?php foreach( $posts as $post ): 
        
        setup_postdata( $post );
        
        get_template_part( 'template-parts/content', 'loop' );
        ?>

    
    <?php endforeach; ?>
    
    </div></div>
    
    <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php
get_footer();