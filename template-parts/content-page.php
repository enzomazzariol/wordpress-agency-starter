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
			<div class="col-6">
				<div class="container px-5 py-5">
					<h1 class="mb-4 ff-yaldevi"><?php echo get_the_title(); ?></h1>
					<p>Lorem ipsum dolor sit amet consectetur. Porttitor est amet sed nisi ac eget facilisi.</p>
				</div>
			</div>

			<div class="col-6 d-lg-block d-sm-none">
				<img src="<?php echo get_template_directory_uri() . "/src/assets/images/Banner/dudamel.jpg" ?>"
                alt="comillas" class="img-fluid" />
			</div>
		</div>
	</header>
	<?php endif; ?>

	<div class="entry-content">
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
