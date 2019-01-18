<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
 
/*Customizer Code HERE*/











function starter_customize_register( $wp_customize ) 
{
    $wp_customize->add_section( 'abc' , array(
    'title'      => 'abcd',
	'label'     => 'abc',
    'priority'   => 30, ) );    
}
add_action( 'customize_register', 'starter_customize_register');





function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'extra-menu' => 'Extra Menu'
    )
  );
}
add_action( 'after_setup_theme', 'register_my_menus' );














 
 





 
add_action('init', 'slider');
function slider() {
$slider = array(
'label' => __('Home Slider'),
'singular_label' => __('Home Slider'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-media-code',

        );
register_post_type('slider',$slider);
}

 
add_action('init', 'xyz');
function xyz() {
$ourteama = array(
'label' => __('xyz'),
'singular_label' => __('xyz'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'menu_icon'   => 'dashicons-media-code',
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-admin-home',
        );
register_post_type('xyz',$ourteama);
}



add_action('init', 'topFeature');
function topFeature() {
$topFeature = array(
'label' => __('Home topFeature'),
'singular_label' => __('Home topFeature'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-info',
        );
register_post_type('topFeature',$topFeature);
}
add_action('init', 'ourservices');
function ourservices() {
$ourservice = array(
'label' => __('Our services'),
'singular_label' => __('Our services'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
 'menu_icon'   => 'dashicons-admin-tools',
        );
register_post_type('ourservices',$ourservice);
}

add_action('init', 'aboutcompany');
function aboutcompany() {
$aboutcompany = array(
'label' => __('About company'),
'singular_label' => __('About company'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-format-gallery',
        );
register_post_type('aboutcompany',$aboutcompany);
}

add_action('init', 'Call_Action');
function Call_Action() {
$Call_Action = array(
'label' => __('Call Action'),
'singular_label' => __('Call Action'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-businessman',
        );
register_post_type('Call_Action',$Call_Action);
}

add_action('init', 'Our_Skills');
function Our_Skills() {
$Our_Skills = array(
'label' => __('Our Skills'),
'singular_label' => __('Our Skills'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-businessman',
        );
register_post_type('Our_Skills',$Our_Skills);
}

add_action('init', 'Facts');
function Facts() {
$Facts = array(
'label' => __('Facts'),
'singular_label' => __('Facts'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),

'menu_icon'   => 'dashicons-welcome-add-page',
        );
register_post_type('Facts',$Facts);
}

add_action('init', 'normal_slider');
function normal_slider() {
$normal_slider = array(
'label' => __('normal slider'),
'singular_label' => __('normal slider'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
 'menu_icon'   => 'dashicons-admin-users',
        );
register_post_type('normal_slider',$normal_slider);
}

add_action('init', 'Our_Clients');
function Our_Clients() {
$Our_Clients = array(
'label' => __('Our Clients'),
'singular_label' => __('Our Clients'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-feedback',
        );
register_post_type('Our_Clients',$Our_Clients);
}
add_action('init', 'Our_Clients_logo');
function Our_Clients_logo() {
$Our_Clients_logo = array(
'label' => __('Our Clients logo'),
'singular_label' => __('Our Clients logo'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-groups',
        );
register_post_type('Our_Clients_logo',$Our_Clients_logo);
}

add_action('init', 'Testimonials');
function Testimonials() {
$Testimonials = array(
'label' => __('Testimonials'),
'singular_label' => __('Testimonials'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail'),
'menu_icon'   => 'dashicons-phone',
        );
register_post_type('Testimonials',$Testimonials);
}
add_action('init', 'Testimonials_slider');
function Testimonials_slider() {
$Testimonials_slider = array(
'label' => __('Testimonials slider'),
'singular_label' => __('Testimonials slider'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('Testimonials_slider',$Testimonials_slider);
}

add_action('init', 'ourteam');
function ourteam() {
$ourteam = array(
'label' => __('Our team'),
'singular_label' => __('Our team'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('ourteam',$ourteam);
}

add_action('init', 'team_slider');
function team_slider() {
$team_slider = array(
'label' => __('team slider'),
'singular_label' => __('team slider'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('team_slider',$team_slider);
}

add_action('init', 'contact_us');
function contact_us() {
$contact_us = array(
'label' => __('contact us'),
'singular_label' => __('contact us'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('contact_us',$contact_us);
}
add_action('init', 'our_info');
function our_info() {
$our_info = array(
'label' => __('our info'),
'singular_label' => __('our info'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('our_info',$our_info);
}
add_action('init', 'footer_right');
function footer_right() {
$footer_right = array(
'label' => __('footer right'),
'singular_label' => __('footer right'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('footer_right',$footer_right);
}
add_action('init', 'footer_contact_us');
function footer_contact_us() {
$footer_contact_us = array(
'label' => __('footer contact us'),
'singular_label' => __('footer contact us'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('footer_contact_us',$footer_contact_us);
}
add_action('init', 'Our_Newsletter');
function Our_Newsletter() {
$Our_Newsletter = array(
'label' => __('Our Newsletter'),
'singular_label' => __('Our Newsletter'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('Our_Newsletter',$Our_Newsletter);
}
add_action('init', 'Copyright');
function Copyright() {
$Copyright = array(
'label' => __('Copyright'),
'singular_label' => __('Copyright'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('Copyright',$Copyright);
}

add_action('init', 'skill_con_biz');
function skill_con_biz() {
$skill_con_biz = array(
'label' => __('skill con biz'),
'singular_label' => __('skill con biz'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('skill_con_biz',$skill_con_biz);
}

add_action('init', 'fact_count');
function fact_count() {
$fact_count = array(
'label' => __('fact count'),
'singular_label' => __('fact count'),
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => true,
'supports' => array('title', 'editor', 'thumbnail')
        );
register_post_type('fact_count',$fact_count);
}

add_action( 'init', 'codex_book_init' );

function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}

function awesome_custom_taxonomy(){

	$labels = array(
		'name'               => 'Fields',
		'singular_name'      => 'Field',
		'menu_name'          => 'Field',
		'name_admin_bar'     => 'Field',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Field',
		'new_item'           => 'New Field',
		'edit_item'          => 'Edit Field',
		'view_item'          => 'View Field',
		'all_items'          => 'All Field',
		'search_items'       => 'Search Field',
		'parent_item_colon'  => 'Parent Field',
		'not_found'          => 'No field found',
		'not_found_in_trash' => 'No field found in Trash'
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'field' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_taxonomy( 'field',array('book'), $args );


}

add_action( 'init', 'awesome_custom_taxonomy' );

if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'footer contact', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 register_sidebar( array(
		'name'          => __('Home Contnet', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
 register_sidebar( array(
		'name'          => __('Home Contnet3', 'twentysixteen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
 register_sidebar( array(
		'name'          => __('Home Contnet2', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );











if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 840 <= $width ) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ( 'page' === get_post_type() ) {
		if ( 840 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if ( 840 > $width && 600 <= $width ) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif ( 600 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list'; 

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );
////////////////////////////////////////////////////////////////////////////////

function themename_customize_register($wp_customize){
    
    $wp_customize->add_section('themename_color_scheme', array(
        'title'    => __('Color Scheme', 'themename'),
        'description' => '',
        'priority' => 120,
    ));
     
     $wp_customize->add_setting('text_test', array(
        'default'        => 'value_xyz',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
    

    $wp_customize->add_control('text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'text_test',
    ));
	   //  =============================
    //  = Image Upload              =
    //  =============================
  $wp_customize->add_setting('image_upload_test', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'image_upload_test',
    )));
	
	  //  =============================
    //  = Textarea Input                =
    //  =============================
           $wp_customize->add_setting( 
            'theme_slug_customizer_text', 
            array(
                'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
            )
        );
         
        $wp_customize->add_control( 
            'theme_slug_customizer_text', 
            array(
                'label' => esc_html__( 'Your Setting with text input', 'theme_slug' ),
                'section' => 'themename_color_scheme',
                'type' => 'textarea'
            )
        );      
 
 
}
 
add_action('customize_register', 'themename_customize_register');

function themename_customize_registers($wp_customize){
    
    $wp_customize->add_section('social_scheme', array(
        'title'    => __('Color social', 'themename'),
        'description' => '',
        'priority' => 120,
    ));
     
   $wp_customize->add_setting('image_upload1', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload1', array(
        'label'    => __('Image Upload ', 'themename'),
        'section'  => 'social_scheme',
        'settings' => 'image_upload1',
    )));
	
	/////////////////////////////////
	 $wp_customize->add_setting('image_upload2', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload2', array(
        'label'    => __('Image Upload ', 'themename'),
        'section'  => 'social_scheme',
        'settings' => 'image_upload2',
    )));
	////////////////////////////////////////
	 $wp_customize->add_setting('image_upload3', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload3', array(
        'label'    => __('Image Upload ', 'themename'),
        'section'  => 'social_scheme',
        'settings' => 'image_upload3',
    )));
	
}
	add_action('customize_register', 'themename_customize_registers');
	