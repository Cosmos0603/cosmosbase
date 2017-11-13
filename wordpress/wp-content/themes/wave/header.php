<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wave
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fullwidth">    
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wave' ); ?></a>
    <header id="masthead-short" class="site-header" role="banner">                
		<nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="nav-width">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#9776;', 'wave' ); ?></button>				
            <h1 class="site-title-short"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </div>
		</nav><!-- #site-navigation -->
		<?php if ( is_home() ) : ?>
		<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a> 
	<?php endif; // End header image check. ?>
		<?php endif; // End home page check. ?>
		
	</header><!-- #masthead -->
    
<div class="main-page">
	<div id="content" class="site-content">
        
