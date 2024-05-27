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
		<div class="row g-0 bg--gray cover-pages">
			<div class="col col-md-6 cover-pages d-flex align-items-center justify-content-center">
				<h1 class=""><?php echo get_the_title(); ?></h1>
			</div>
			<div class="col col-md-6 d-lg-block d-none cover-pages">
				<img src="<?php echo get_template_directory_uri() . "/src/assets/images/Banner/dudamel.jpg" ?>"
                alt="comillas" class="img-fluid" />
			</div>
		</div>
	</header>
	<?php endif; ?>

	<div class="container entry-content">
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
