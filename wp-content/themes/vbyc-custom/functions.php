<?php

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


add_action( 'init', 'create_post_type' );
function create_post_type() {
    // Sessions
    register_post_type( 'sessions',
        array(
            'labels' => array(
                'name' => __( 'Session Name' ),
                'singular_name' => __( 'Session' ),
                'add_new' => _x('Add New', 'Session'),
                'add_new_item' => __('Add New Session'),
                'edit_item' => __('Edit Session'),
                'new_item' => __('New Session'),
                'all_items' => __('All Sessions'),
                'view_item' => __('View Sessions'),
                'search_items' => __('Search Sessions'),
                'not_found' =>  __('No Session found'),
                'not_found_in_trash' => __('No Sessions found in Trash'), 
                'menu_name' => 'Schedule',
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
    // Typical Day
    register_post_type( 'typicalday',
            array(
                'labels' => array(
                    'name' => __( 'Typical Day Event Name' ),
                    'singular_name' => __( 'Typical Day Event' ),
                    'add_new' => _x('Add New', 'Typical Day Event'),
                    'add_new_item' => __('Add New Typical Day Event'),
                    'edit_item' => __('Edit Typical Day Event'),
                    'new_item' => __('New Typical Day Event'),
                    'all_items' => __('All Typical Day Events'),
                    'view_item' => __('View Typical Day Events'),
                    'search_items' => __('Search Typical Day Events'),
                    'not_found' =>  __('No Typical Day Events found'),
                    'not_found_in_trash' => __('No Typical Day Events found in Trash'), 
                    'menu_name' => 'Typical Day',
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






// Remove height/width from featured image so it scales for responsive
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


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


/**
 * Hide editor for specific page templates.
 *
 */
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    
    if($template_file == 'templates/timeline.php' || 'templates/three-columns.php' || $template_file == 'templates/sessions.php' || $template_file == 'templates/contact.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}

