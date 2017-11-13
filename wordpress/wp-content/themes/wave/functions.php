<?php
/**
 * wave functions and definitions
 *
 * @package wave
 */

if ( ! function_exists( 'wave_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wave_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wave, use a find and replace
	 * to change 'wave' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wave', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add Custom image in header.
	add_theme_support( 'custom-header' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Adding Support to infinite scroll
	 */
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer' => 'page',
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'wave' ),
	) );
    
    register_nav_menus(
array(
'footer_nav' => __( 'Footer Menu', 'wave' ),
'top_menu' => __( 'Top Menu', 'wave' )
)
);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
    /*
	 * For custom Background.
	 */
   
}
endif; // wave_setup
add_action( 'after_setup_theme', 'wave_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wave_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wave_content_width', 640 );
}
add_action( 'after_setup_theme', 'wave_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wave_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wave' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
 
    register_sidebar( array(
	'name' => __( 'Author Page', 'wave' ),
	'id' => 'author',
	'description' => __( 'Author Page Widget', 'wave' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h1 class="widget-title">',
	'after_title' => '</h1>',
) );
    
    register_sidebar( array(
	'name' => __( 'Footer Widget One', 'wave' ),
	'id' => 'sidebar-4',
	'description' => __( 'Footer Widget 1', 'wave' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

    register_sidebar( array(
	'name' => __( 'Footer Widget Two', 'wave' ),
	'id' => 'sidebar-5',
	'description' => __( 'Footer Widget 2', 'wave' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

    register_sidebar( array(
	'name' => __( 'Footer Widget Three', 'wave' ),
	'id' => 'sidebar-6',
	'description' => __( 'Footer Widget 3', 'wave' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'wave_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wave_scripts() {
	wp_enqueue_style( 'wave-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'wave-dashicons', get_stylesheet_directory_uri(), array('dashicons'), '1.0' );

	wp_enqueue_script( 'wave-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20150206', true );

	wp_enqueue_script( 'wave-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150115', true );
    
    wp_enqueue_script( 'wave-smoothup', get_template_directory_uri() . '/js/backtotop.js', array( 'jquery' ), '160115',  true );
    
    wp_register_style('wave-googleFontsone', 'http://fonts.googleapis.com/css?family=Dosis|Pacifico|Dancing+Script:700'); wp_enqueue_style( 'wave-googleFontsone');
    
    wp_register_style('wave-googleFontstwo', 'http://fonts.googleapis.com/css?family=Dosis'); wp_enqueue_style( 'wave-googleFontstwo');
    
    wp_register_style('wave-googleFontsthree', 'http://fonts.googleapis.com/css?family=Josefin+Slab:400,600italic'); wp_enqueue_style( 'wave-googleFontsthree');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wave_scripts' );

/**
 * Adding hook to wp_head
 */

function meta_tags()
{
echo '<meta name="theme-color" content="#83C1B2">
      <meta name="msapplication-navbutton-color" content="#83C1B2">
      <meta name="apple-mobile-web-app-status-bar-style" content="#83C1B2">';
}
add_action('wp_head', 'meta_tags');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*===================================================================================
 * Featured Images Support
 * =================================================================================*/


if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' ); } 
	add_image_size( 'recent-thumbnails', 55, 55, true );
	add_image_size('author-thumb', 120, 120, true);
add_action( 'after_setup_theme', 'wave_theme_setup' );

function wave_theme_setup() {
    add_image_size( 'featuredImage');
}

function wave_custom_sizes( $sizes ) {
    
    return array_merge( $sizes, array(
        'custom-size' => __( 'featuredImage', 'wave' ),
    ) );
}

/*===================================================================================
 * Comments Section
 * =================================================================================*/

add_filter( 'comment_form_defaults', 'wave_comment_fields' );
function wave_comment_fields( $args ) {
  $args['title_reply'] = __( 'Join the discussion', 'wave' );

  return $args;
}

/* Add Placehoder in comment Form Field */
function modify_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( ' ' ) . '</label> ' . ( $req ? '<span class="required"></span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder="Your Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></p>';
	
	$fields['email'] = '<p class="comment-form-email">' .'<label for="email">'  . __( ' ' ) . '</label> ' .( $req ? '<span class="required"></span>' : '' ) .
                '<input id="email" name="email" placeholder="Email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . ' $aria_req . />'.'</p>';

	$fields['url'] = '<p class="comment-form-url">' . __( ' ' ) . '<label for="url">' . '</label> '  .
        '<input id="url" name="url" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></p>';
    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');


add_filter( 'comment_form_defaults', 'wave_textarea_placeholder' ); 
function wave_textarea_placeholder( $fields )
{  
        $fields['comment_field'] = '<p>' .'<label for="comment">'  . __( ' ' ) . '</label>' .'<textarea id="comment" placeholder=" Your Thoughts.." name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
                '</p>';
    return $fields;
}

/*===================================================================================
 * Search Form
 * =================================================================================*/

function search_from( $form ) { 
     $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'wave') . '</label>
     <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="I am looking for..." />
     </form></section>';
     return $form;
}
 add_filter( 'get_search_form', 'search_from' );

/*===================================================================================
 * Tag Cloud
 * =================================================================================*/

function wave_tag_cloud_widget($args){
    $args['number'] = 45;
    $args['largest'] = 18;
    $args['smallest'] = 10;
    $args['unit'] = 'px';
    $args['format'] = 'flat';
    $args['orderby'] = 'name';
    $args['order'] = 'ASC';
    return $args;
}
add_filter('widget_tag_cloud_args','wave_tag_cloud_widget');
