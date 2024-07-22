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
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'wp_guarapo'); ?></a>

        <div class="container-fluid bg--gray">
            <div class="container">
                <ul class="social-banner-list d-flex justify-content-end align-items-center py-3 me-3">
                    <li class="ms-3">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <header class="container site-header">
            <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
                <div class="container-fluid">
				<a class="navbar-brand d-flex flex-column" href="<?php bloginfo('url') ?>">
						<?php
						if (has_custom_logo()) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
						$description = get_bloginfo('description');
						?> 
								<img class="navbar-brand-logo" alt="<?php bloginfo('name') ?>" src="<?php echo $image[0] ?>"/> 
							
						<?php
						} else {
							bloginfo('name');
						}
						?>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            			<span class="navbar-toggler-icon"></span>
        			</button>

                    <div class="collapse navbar-collapse" id="main-menu">
                        <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto me-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
                    </div>
                    <span class="d-none d-lg-block">
                        <?php dynamic_sidebar('header_area_icons'); ?>
                    </span>
                </div>
            </nav>
        </header><!-- #masthead -->