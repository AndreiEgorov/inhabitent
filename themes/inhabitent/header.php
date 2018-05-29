<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php wp_head(); ?>
	</head>



	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="header-container">
					<div class="menu-container">
					
						<div class="site-branding">
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<!-- get rid of "Just another WordPress site"
							<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> --> 
						</div><!-- .site-branding -->

						<div class="white-logo">	
						<a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-tent-white.svg"  alt="Inhabitent Logo" /></a>
						</div>
						<div class="green-logo">
						<a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-tent.svg"  alt="Inhabitent Logo" /></a>
						</div>

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

						
							<?php get_search_form(); ?>

						</nav><!-- #site-navigation -->
					</div>
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
<a href="<?php get_home_url()?>"></a>