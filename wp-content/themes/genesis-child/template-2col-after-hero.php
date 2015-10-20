<?php
/* 
Template Name: 2 Column After Hero
*/


// remove_action( 'genesis_entry_header', 'genesis_do_post_title');
// add_action( 'genesis_before_content', 'genesis_do_post_title');


// GENESIS HOMEPAGE TEMPLATE //



// FORCE FULL WIDTH LAYOUT

// Homepage CUSTOM LOOP
// remove_action( 'genesis_loop', 'genesis_do_loop' );
// add_action( 'genesis_loop', 'my_custom_loop' );
function my_custom_loop () {
?>
 <div id="main_container">
  <div id="single-post" class="entry-content">
  
  // Add WP Query or Custom Columns for Home page Here
  
  </div> <!-- end single post -->
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>