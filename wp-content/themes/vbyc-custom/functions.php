<?php

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action( 'init', 'create_post_type' );
    function create_post_type() {
        // register_post_type( 'small_bios',
        //  array(
        //      'labels' => array(
        //          'name' => __( 'Small Bios' ),
        //          'singular_name' => __( 'Small Bio' ),
        //          'add_new' => _x('Add New', 'Small Bio'),
        //          'add_new_item' => __('Add New Small Bio'),
        //          'edit_item' => __('Edit Small Bio'),
        //          'new_item' => __('New Small Bio'),
        //          'all_items' => __('All Small Bios'),
        //          'view_item' => __('View Small Bio'),
        //          'search_items' => __('Search Small Bios'),
        //          'not_found' =>  __('No Small Bios found'),
        //          'not_found_in_trash' => __('No Small Bios found in Trash'), 
        //          'menu_name' => 'Small Bio Details',
        //          'show_ui' => true,
        //          'show_in_nav_menus' => true,
        //          'show_in_menu' => true
        //      ),
        //      'hierarchical' => true,
        //      'supports' => array('title', 'custom-fields'),
        //      'public' => true,
        //      'has_archive' => true
        //  )
        // );
        register_post_type( 'team_bios',
            array(
                'labels' => array(
                    'name' => __( 'Team Bios' ),
                    'singular_name' => __( 'Team Bios' ),
                    'add_new' => _x('Add New', 'Team Bios'),
                    'add_new_item' => __('Add New Team Bios'),
                    'edit_item' => __('Edit Team Bios'),
                    'new_item' => __('New Team Bios'),
                    'all_items' => __('All Team Bios'),
                    'view_item' => __('View Team Bios'),
                    'search_items' => __('Search Team Bios'),
                    'not_found' =>  __('No Team Bios found'),
                    'not_found_in_trash' => __('No Team Bios found in Trash'), 
                    'menu_name' => 'Team Bios',
                    'show_ui' => true,
                    'show_in_nav_menus' => true,
                    'show_in_menu' => true
                ),
                'hierarchical' => true,
                'supports' => array('title', 'custom-fields'),
                'public' => true,
                'has_archive' => true,
                'exclude_from_search' => true
            )
        );
        register_post_type( 'partners',
            array(
                'labels' => array(
                    'name' => __( 'Partners' ),
                    'singular_name' => __( 'Partner' ),
                    'add_new' => _x('Add New', 'Partner'),
                    'add_new_item' => __('Add New Partner'),
                    'edit_item' => __('Edit Partner'),
                    'new_item' => __('New Partner'),
                    'all_items' => __('All Partners'),
                    'view_item' => __('View Partner'),
                    'search_items' => __('Search Partners'),
                    'not_found' =>  __('No Partners found'),
                    'not_found_in_trash' => __('No Partners found in Trash'), 
                    'menu_name' => 'Partner Details',
                    'show_ui' => true,
                    'show_in_nav_menus' => true,
                    'show_in_menu' => true
                ),
                'hierarchical' => true,
                'supports' => array('title', 'custom-fields'),
                'public' => true,
                'has_archive' => true
            )
        );
	
};



/**
 * Prevents responsive error
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'vbyc_setup' ) ) :

add_action( 'after_setup_theme', 'vbyc_setup' );
function vbyc_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

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
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'footer'  => __( 'Footer Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif; // vbyc_setup





add_action( 'widgets_init', 'vbyc_widgets_init' );
function vbyc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}



// add_action( 'wp_head', 'vbyc_javascript_detection', 0 );
// function vbyc_javascript_detection() {
// 	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
// }



add_action( 'wp_enqueue_scripts', 'vbyc_scripts' );
function vbyc_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

}


add_action('wp_footer', 'add_jquery_local');
function add_jquery_local() { ?>
	<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 
<?php
} 


add_action( 'wp_enqueue_scripts', 'vbyc_footer_scripts' );
function vbyc_footer_scripts(){
    wp_register_script(
    'jq',
    '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',  
    array('jquery'),
    false,
    '1.0',
    true
    );
    wp_enqueue_script('jq');

    wp_register_script(
    'modernizr',
    get_stylesheet_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', /* put in mine */
    array('jquery'),
    false,
    '1.0',
    true
    );
    wp_enqueue_script('modernizr');

	wp_register_script(
    'bootstrap',
    get_stylesheet_directory_uri() . '/js/vendor/bootstrap.min.js', /* put in mine */
    array('jquery'),
    false,
    '1.0',
    true
    );
    wp_enqueue_script('bootstrap');

    wp_register_script(
    'ekko',
    get_stylesheet_directory_uri() . '/js/vendor/ekko-lightbox.min.js', /* put in mine */
    array('jquery'),
    false,
    '1.0',
    true
    );
    wp_enqueue_script('ekko');


    wp_register_script(
    'main',
    get_stylesheet_directory_uri() . '/js/main.js', 
    array('jquery'),
    false,
    '1.0',
    true
    );
    wp_enqueue_script('main');
}



add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
	<script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-8152298-1','auto');ga('send','pageview');
    </script> 
<?php
} 



add_filter( 'body_class', 'my_class_names' );
function my_class_names( $classes ) {
	// add 'class-name' to the $classes array
	$classes[] = 'has-sticky-main-nav section-sessions  ';
	// return the $classes array
	return $classes;
}

