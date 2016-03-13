<?php
/* 
Template Name: Plain (No Hero Image)
*/

get_header(); ?>

    <section class="hero" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php /* HERO TEXT */ ?>
        <?php  include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/_hero-text.php"); ?> 
  
    </section>

    <section class="main-content">
        <div class="container"> 
            <article class="main-article">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                      
                        <?php  include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/_content_headline.php"); ?> 

                        <div> 

                            <?php
                            // Start the loop.
                            while ( have_posts() ) : the_post();

                                // Include the page content template.
                                the_content(); 

                            // End the loop.
                            endwhile;
                            ?>

                        </div>
                    </div>

                </div><!-- /.row -->
            </article><!-- /.main-article -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

<?php get_footer(); ?>