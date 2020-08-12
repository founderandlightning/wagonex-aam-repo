<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom-theme.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/theme-style.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/landing_carousel.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/landing_carousel_theme.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/landing_page.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body>
		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-inner section-inner">
				<div class="header-titles-wrapper">					
					<div>
						<a href="<?php bloginfo('template_url'); ?>">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" />
						</a>
					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'mycardirect' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->
				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">
					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>
							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
								<ul class="primary-menu reset-list-style">
								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);
								}
								?>
								</ul>
							</nav><!-- .primary-menu-wrapper -->
						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>
						<div class="header-toggles hide-no-js">
						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>
							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text">
											<?php _e( 'Menu', 'twentytwenty' ); ?>
										</span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->
							</div><!-- .nav-toggle-wrapper -->
							<?php
							}
						?>
						</div><!-- .header-toggles -->
					<?php
					}
					?>
				</div><!-- .header-navigation-wrapper -->
			    <div class="auth-block">
					<ul class="nav navbar-nav flex-row">
						<li><a href="http://app.wagonex.local/request-call-back" class="request-call-button">Request call back</a></li>
						<li><a href="https://app-dev.wagonex.com/signin" class="login">Log in</a></li>
						<li><a href="https://app-dev.wagonex.com/register" class="join-us">Join Us</a></li>
					</ul>				
				</div>
			</div><!-- .header-inner -->
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
