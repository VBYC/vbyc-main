<? /* 
Template Name: Image Fills Whole Page
*/ ?>
<?php
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>

<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main class="main-content-container">   
        <img src="<?php echo $thumbnail['0']; ?>" class="img-full-width" alt="Map of Van BUren Youth Camp">
    </main>

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>