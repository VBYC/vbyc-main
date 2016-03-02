<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<section class="hero" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="hero-image-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image">
                        <?php

		// Post thumbnail.
		twentyfifteen_post_nav_background();


		if ( has_post_thumbnail() ) {
	the_post_thumbnail('full');
} 
	?>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
        <div class="container-fluid hero-text-container clearfix">
             <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero-text">
                            <?php the_title( '<h1 class="page-name">', '</h1>' ); ?>
                        </div>
                    </div>         
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="hero-text">
                            <div class="description">
                                <p>&ldquo;Van Buren Youth Camp is dedicated to serving youth by providing opportunities for mental, physical and spiritual growth.&rdquo; - Our mission statement since 1950.
</p>
                            </div> 
                        </div> 
                    </div>         
                </div><!-- /.row -->
            </div>
        </div>
    </section>

        <section class="main-content">
        <div class="container"> 
            <article class="main-article">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">


	

	



	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

                </div>
            </div><!-- /.row -->
        </article><!-- /.main-article -->
    </div><!-- /.container -->
</section><!-- /.main-content -->
