<?php

/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    GLOBAL VARIABLES
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

// Defer placeholder image to load large images below the fold after everything else loaded
$src_defer = 'data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=';


/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    CLEANUP
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    404 ERROR
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

// Ensures this function is only called after the theme is setup
// You could bind to the "init" event if "after_setup_theme" doesn't work well for you.
add_action('after_setup_theme', 'create_404_page');

// Insert a privately published page we can query for our 404 page
function create_404_page() {

  // Check if the 404 page exists
    $page_exists = get_page_by_title( '404' );

    if (!isset($page_exists->ID)) {

        // Page array
        $page = array(
            'post_author' => 1,
            'post_content' => '',
            'post_name' =>  '404',
            'post_status' => 'private',
            'post_title' => '404',
            'post_type' => 'page',
            'post_parent' => 0,
            'menu_order' => 0,
            'to_ping' =>  '',
            'pinged' => '',
        );

        $insert = wp_insert_post($page);

        // The insert was successful
        if ($insert) {
            // Store the value of our 404 page
            update_option( '404pageid', (int) $insert );
        }
    }

}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    AFP PRO 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

if( function_exists('acf_add_options_page') ) {
    
    // CONTACT INFO

    acf_add_options_page(array(
        'page_title'    => 'Contact Info Settings',
        'menu_title'    => 'Contact Info',
        'menu_slug'     => 'contact-info-global',
        'icon_url'      => 'dashicons-id-alt', 
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
        
    acf_add_options_sub_page(array(
        'page_title'    => 'Social Media Settings',
        'menu_title'    => 'Social Media',
        'parent_slug'   => 'contact-info-global',        
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'contact-info-global',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Camp Minder Settings',
        'menu_title'    => 'Camp Minder',
        'parent_slug'   => 'contact-info-global',
    ));


    // SCHEDULE


    acf_add_options_page(array(
        'page_title'    => 'Session Schedule Settings',
        'menu_title'    => 'Session Schedule',
        'menu_slug'     => 'session-schedule',
        'icon_url'      => 'dashicons-calendar-alt', 
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));





    
    
}



/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    NON AFP 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/






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
	// add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 254, 70, true );

    // the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
    // the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
    // the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
    // the_post_thumbnail('full');            // Original image resolution (unmodified)


    add_image_size( 'featured',                     1440, 400, true); 
    add_image_size( 'social',                       1200, 630, true);
    // add_image_size( 'featured-mobile',           800, 229, true);
    add_image_size( 'content-tertiary',             800, 229, true);
    add_image_size( 'timeline',                     460, 290, true);
    add_image_size( 'square',                       425, 425, true); 
    add_image_size( 'content-primary',              425, 425, true);
    add_image_size( 'content-secondary',            305, 203, true); // Also Large
    // add_image_size( 'medium-large',              360, 250, true);
    add_image_size( 'gallery',                      360, 250, true);
    // add_image_size( 'thumbnail-landscape',       300, 86, true); // Also Medium
    add_image_size( 'home-promo',                   730, 400, true);

    // New thumb sizes:
    // 600 x 315 (social) 
    // 700 x 200 (featured) (7:2)
    // 254 x 73 (7:2)



    // Featured         = Featured  1400 x 400

    // Social           = Social        1200 x (630)
    
    // Post thumbnail   = Ter, mobile   800 x 229 (remove 825 x 510)
    
    // Large            = Timeline      460 x (290)
    
    // Square           = Cont Prim     425 x 425
    //                    Profile  
    
    // Medium_large     = Mini Gallery  360 x 250
    //                    Gallery
    
    // Cont Sec         = Cont Sec  380 x 202
    
    // Thumbnail        = Thumbnail 150 x 150

    // Thumbnail Lns    = TL        150 x 50






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


// $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
//     if( !isset( $post_id ) ) return;

//     // // Get the name of the Page Template file.
//     $template_file = get_post_meta($post_id, '_wp_page_template', true);
    

 



add_action( 'wp_enqueue_scripts', 'vbyc_footer_scripts' );
function vbyc_footer_scripts(){
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    $test = 'Hello';

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


add_filter( 'body_class', 'my_class_names' );
function my_class_names( $classes ) {

	// add 'class-name' to the $classes array
    // The home page has no sticky nav. If other body classes are needed, adjust this if statement.
    if ( !is_front_page() ) {  
	   $classes[] = ' has-sticky-main-nav ';
    }
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

    // // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    // if (
    //     $template_file == 'templates/category.php' ||
    //     $template_file == 'templates/faqs.php' || 
    //     $template_file == 'templates/home.php' || 
    //     $template_file == 'templates/image-fills-whole-page.php' ||
    //     $template_file == 'templates/intro-only.php'|| 
    //     $template_file == 'templates/news.php' ||
    //     $template_file == 'templates/page.php' ||
    //     $template_file == 'templates/profile.php' || 
    //     $template_file == 'templates/schedule.php' ||
    //     $template_file == 'templates/timeline.php' 
    // ){ // edit the template name
        remove_post_type_support('page', 'editor');
    // }
}


// Customeize Gallery

// Custom filter function to modify default gallery shortcode output
function my_post_gallery( $output, $attr ) {

    // Initialize
    global $post, $wp_locale;

    // Gallery instance counter
    static $instance = 0;
    $instance++;

    // Validate the author's orderby attribute
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( ! $attr['orderby'] ) unset( $attr['orderby'] );
    }

    // Get attributes from shortcode
    extract( shortcode_atts( array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'div',
        'icontag'    => 'div',
        'descriptiontag' => 'div',
        'columns'    => 3,
        'size'       => 'large',
        'include'    => '',
        'exclude'    => ''
    ), $attr ) );

    $link_classes = '';
    $link_data_attributes = '';
    $image_classes = '';

    // Initialize
    $id = intval( $id );
    $attachments = array();
    if ( $order == 'RAND' ) $orderby = 'none';

    if ( ! empty( $include ) ) {

        // Include attribute is present
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array( 'include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );

        // Setup attachments array
        foreach ( $_attachments as $key => $val ) {
            $attachments[ $val->ID ] = $_attachments[ $key ];
        }

    } else if ( ! empty( $exclude ) ) {

        // Exclude attribute is present 
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );

        // Setup attachments array
        $attachments = get_children( array( 'post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );
    } else {
        // Setup attachments array
        $attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );
    }

    if ( empty( $attachments ) ) return '';

    // Filter gallery differently for feeds
    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment ) $output .= wp_get_attachment_link( $att_id, $size, true ) . "\n";
        return $output;
    }

    // Filter tags and attributes
    $itemtag = tag_escape( $itemtag );
    $descriptiontag = tag_escape( $descriptiontag );
    $columns = intval( $columns );
    $itemwidth = $columns > 0 ? floor( 100 / $columns ) : 100;
    $float = is_rtl() ? 'right' : 'left';
    $selector = "gallery-{$instance}";

    // Filter gallery CSS
    $output = apply_filters( 'gallery_style', "
       

        <!-- see gallery_shortcode() in wp-includes/media.php -->
        <div id='$selector' class='galleryid-{$id}'>"
    );

    

    // Iterate through the attachments in this gallery instance
    $i = 0;
    foreach ( $attachments as $id => $attachment ) {

        // Debugging
        // print_r($attachments); 

        // Variables
        $link               = isset( $attr['link'] ) && 'file' == $attr['link'] ? wp_get_attachment_link( $id, $size, false, false ) : wp_get_attachment_link( $id, $size, true, false ); 
        $post_img_thumbnail = wp_get_attachment_image_src ($id,$size)[0];
        $post_img_large     = wp_get_attachment_image_src ($id,'full')[0];
        $post_title         = $attachment->post_title;
        $post_description   = wptexturize($attachment->post_content);

        // Start itemtag
        $output .= "<{$itemtag} class='col-xs-12 col-sm-4'>";

        // print_r($attachments);

        // Link and image tag
        $output .= "
            <a href='" . $post_img_large. "' 
                class='gallery' 
                data-toggle='lightbox' 
                data-type='image' 
                data-gallery='multiimages' 
                data-title='" . $post_title. "'
                data-footer='" . $post_description. "'> 
                <img 
                    src='" . $post_img_thumbnail. "' 
                    class='img-responsive img-fluid grid-item' 
                    alt='" . $post_title. "'>

            <h3 class='gallery-label'>$post_title</h3>
        </a>";


        if ( $descriptiontag && trim( $attachment->post_excerpt ) ) {

            // descriptiontag
            $output .= "
            <{$descriptiontag} class='visible-xs-block details'>
                <p class='description'><strong>" . $post_title. "</strong> &mdash; 
                " . $post_description . "
                </p>
            </{$descriptiontag}>";

        }

        // End itemtag
        $output .= "</{$itemtag}>";

        // Line breaks by columns set
        if($columns > 0 && ++$i % $columns == 0) $output .= '<br style="clear: both">';

    }

    // End gallery output
    $output .= "
        <br style='clear: both;'>
    </div>\n";

    return $output;

}



/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ADMIN STYLES
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

add_action('admin_head', 'admin_styles');
function admin_styles() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    // // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    if($template_file == 'templates/faqs.php') { 
    ?>

    <style>
        .acf-editor-wrap iframe {
            height: 100px !important;
            min-height: 100px;
        }
        .acf-field textarea  {
            height: 160px !important;
            min-height: 150px;
        }
    </style>
    <?php
    }
}












