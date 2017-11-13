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
		<nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="nav-width">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#9776;', 'wave' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </div>
		</nav><!-- #site-navigation -->
    
    <?php global $post; ?>
      <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
       ?>
    <div class="header-img" style="background: url(<?php echo get_theme_mod( 'header_img', '' ); ?> );">
    <div class="nav-width">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        
        </div>
    </div>
<div class="line-hd">    
</div>
	</header><!-- #masthead -->
<div class="main-page">
	<div id="content" class="site-content">
        
