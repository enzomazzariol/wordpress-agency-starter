<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_guarapo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wp_guarapo'); ?></a>
		<header class="container gx-0 site-header">
			<nav class="navbar navbar-expand-lg navbar-light py-0" id="mainNav">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
     					 <span class="navbar-toggler-icon"></span>
					</button>
						<?php
						wp_nav_menu(array(
							'theme_location'    => 'menu-1',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse justify-content-start',
							'container_id'      => 'navbarScroll',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
						?>
					<span class="d-none d-md-block">
						<?php dynamic_sidebar('header_area_icons'); ?>
					</span>
					<div class="button button-outline d-none d-lg-block d-xl-block">
						<a href="https://twitter.com/messages/compose?recipient_id=2344175338" target="_blank" rel="noopener noreferrer">Get in touch →</a>
					</div>
					<div class="button button-outline d-sm-block d-md-block d-lg-none">
						<a href="https://twitter.com/messages/compose?recipient_id=2344175338" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-x-twitter" aria-label='icon'></i>
						</a>
					</div>
			</nav>
		</header><!-- #masthead -->