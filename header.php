<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package air
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'air' ); ?></a>

  <header class="site-header">
  		<div class="container">

  			<div class="site-branding">
  				<?php
  				if ( is_front_page() && is_home() ) : ?>
  					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span><?php echo file_get_contents( esc_url( get_theme_file_uri( '/svg/logo.svg' ) ) ); ?></a></h1>
  				<?php else : ?>
  					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span><?php echo file_get_contents( esc_url( get_theme_file_uri( '/svg/logo.svg' ) ) ); ?></a></p>
  				<?php
  				endif;
  				$description = get_bloginfo( 'description', 'display' );
  				if ( $description || is_customize_preview() ) : ?>
  					<p class="site-description screen-reader-text"><?php echo $description; /* WPCS: xss ok. */ ?></p>
  				<?php
  				endif; ?>
  			</div><!-- .site-branding -->

  			<button id="nav-toggle" class="nav-toggle" aria-controls="nav" aria-expanded="false"><span class="burger-icon"></span> <span id="nav-toggle-label"><?php esc_html_e( 'Menu', 'air' ); ?></span></button>

  			<nav id="nav" class="nav-collapse">

  				<?php
  					wp_nav_menu( array(
  						'theme_location'    => 'primary',
  						'container'       	=> false,
  						'depth'             => 4,
  						'menu_class'        => 'menu-items',
  						'menu_id' 					=> 'menu',
  						'echo'            	=> true,
  						'fallback_cb'       => 'wp_page_menu',
  						'items_wrap'      	=> '<ul class="%2$s" id="%1$s">%3$s</ul>',
  						'walker'            => new Air_Walker(),
  						)
  					);
  				?>

  			</nav><!-- #site-navigation -->

  		</div><!-- .container -->
  	</header>

	<div id="content" class="site-content">
