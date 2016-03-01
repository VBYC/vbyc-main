<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<!-- HERO -->
	<section class="hero">
        <div class="hero-image-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image">
                        <img src="/images/heroes/about.jpg" alt="Campers at campfire">
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
        <div class="container-fluid hero-text-container clearfix">
             <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero-text">
                            <h1 class="page-name">About Us</h1>
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

    <!-- BODY -->
	<!-- WP: <div id="primary" class="content-area">
		WP <main id="main" class="site-main" role="main"> -->

	<section class="main-content">
		<div class="container"> 
		    <article class="main-article">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

			</article><!-- /.main-article -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

		<!-- WP </main> --><!-- .site-main -->
	<!-- WP </div> --><!-- .content-area -->

<?php get_footer(); ?>
