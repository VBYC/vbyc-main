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

	

    <!-- BODY -->
	<!-- WP: <div id="primary" class="content-area">
		WP <main id="main" class="site-main" role="main"> -->

	<section class="main-content">
        <div class="container"> 
            <article class="main-article">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">

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

			        </div>
                </div><!-- /.row -->
            </article><!-- /.main-article -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->


		<!-- WP </main> --><!-- .site-main -->
	<!-- WP </div> --><!-- .content-area -->

<?php get_footer(); ?>
