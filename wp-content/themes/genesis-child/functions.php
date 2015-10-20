<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.0' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


//* END - Code from Genesisi sample theme

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// START - VBYC CUSTOM CODE 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


/* Code to Display Featured Image on top of the post */
add_action( 'genesis_before_entry', 'featured_post_image', 8 );
function featured_post_image() {
  if ( ! is_singular( 'post' ) )  return;
	the_post_thumbnail('post-image');
}


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// HEADER
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// remove_action( 'genesis_after_header', 'genesis_do_nav' );

// add_action( 'genesis_header', 'genesis_do_nav', 12 );


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// FOOTER
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Add support for 4-column footer widgets
add_theme_support( 'genesis-footer-widgets', 4 );

// Remove the existing Footer
remove_action( 'genesis_footer', 'genesis_do_footer' );

//Add in new Widget areas
function genesischild_extra_widgets() {
	genesis_register_sidebar( array(
	'id'          => 'footercontent',
	'name'        => __( 'Footer', 'genesischild' ),
	'description' => __( 'This is the general footer area', 'genesischild' ),
	'before_widget' => '<div class="footercontent">',
    'after_widget' => '</div>',
	) );
}

//Position the Footer Area
function genesischild_footer_widget() {
    genesis_widget_area ('footercontent', array(
        'before' => '<div class="footercontainer">',
        'after' => '</div>',));
}


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// SESSIONS LIST
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// 1. Register after post widget area
genesis_register_sidebar( array(
	'id'            => 'sessions-list-nav',
	'name'          => __( 'Sessions List Nav', 'list' ),
	'description'   => __( 'Extra', 'extra' ),
) );

// 2. Hook after post widget area after post content
add_action( 'genesis_entry_header', 'get_sessions_list_nav' );

// 3. Make function to get widget area content
function get_sessions_list_nav() {	
	genesis_widget_area( 'sessions-list-nav', array(
		'before' => '<div class="sessions-list-nav-wrapper widget-area">',
		'after' => '</div>',
	));
}




//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// END - VBYC CUSTOM CODE 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

/*
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// START - NAYT TUTORIALS 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// WIDGETS - How to add my own widget 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// 1. Register after post widget area
// genesis_register_sidebar( array(
// 	'id'            => 'test-widget-id',
// 	'name'          => __( 'Test Widget', 'test-widget-name' ),
// 	'description'   => __( 'This is test widget', 'test-widget-name' ),
// ) );

// 2. Hook after post widget area after post content
// add_action( 'genesis_entry_content', 'test_widget_function' );

// 3. Make function to get widget area content
function test_widget_function() {
	echo "TEST: test_widget_function";
	if ( is_singular( 'post' ) )
		genesis_widget_area( 'test-widget-id', array(
			'before' => '<div class="after-post widget-area">ss[footer_copyright]',
			'after' => '</div>',
	) );
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// FILTERS
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Test: Replace SEO descripotion text
// add_filter( 'genesis_seo_description', 'test_filter_function' );
function test_filter_function() {
	echo 'test filter function ';
}
// add_filter( 'genesis_post_title_text', 'custom_footer_creds_text' );

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// CONDITIONALS AND PAGE IDENTIFIERS
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Test: Get the ID of a page by it's slug. I can also look at the classes on the <body>.
// get_id_by_slug('about-us');
function get_id_by_slug($page_slug) {
	echo 'any-page-slug: ';
	$page = get_page_by_path($page_slug);
	if ($page) {
		echo $page->ID;
	} else {
		return null;
	}
}

// Test: display if we are on a certain page or not
// add_action( 'genesis_before', 'test_is_page' );
function test_is_page() {
	echo "is_page functions.php: ".is_page('about-us')."<br><br>";
}



//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// END - NAYT TUTORIALS 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

*/












