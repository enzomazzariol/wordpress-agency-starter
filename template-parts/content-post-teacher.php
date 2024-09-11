<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($class = 'mb-3'); ?>>

    <div class="container-fluid entry-content ">
        <div class="row justify-content-md-center">
            <div class="col-md-12 px-0">
                <?php the_content(); ?>
            </div>
            <?php the_posts_pagination(); ?>
        </div><!-- .entry-content -->
    </div>

        <?php if ( get_edit_post_link() ) : ?>
        <div class="entry-footer">
            <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'wp_guarapo' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            
            <?php endif; ?>
        
        </div><!-- .entry-footer -->
        
</article>

<!-- #post-<?php the_ID(); ?> -->