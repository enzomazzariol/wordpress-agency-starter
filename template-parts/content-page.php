<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article id="post-<?php the_ID(); ?>">
    <?php if(!is_front_page()): ?>
    <header class="container-fluid px-0">
        <div class="row g-0 bg--gray">
            <div class="col-12 col-md-6 cover-pages d-flex align-items-center justify-content-center cover-pages-title order-2 order-md-1"  data-aos="fade-up">
                <h1 class="mx-5"><?php echo get_the_title(); ?></h1>
            </div>
            <div class="col-12 col-md-6 cover-pages-img order-1 order-md-2">
                <?php
					if (has_post_thumbnail()) {
						the_post_thumbnail('full', array( 'class' => 'cover-img' ) );
					}
					else { ?>
						<img class="cover-img" src="<?php echo catch_that_image(); ?>" alt="feature default" />
				<?php } ?>
            </div>
        </div>
    </header>
    <?php endif; ?>

    <div class="container entry-content mt-5">
        <?php
		the_content();
		?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
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
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->