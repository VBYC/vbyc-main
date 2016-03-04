<?php
/* 
Template Name: Basic
*/

get_header(); ?>


    <section class="hero" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="hero-image-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image">
                        <?php

                            // Post thumbnail.
                            // twentyfifteen_post_nav_background();


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
                        <h3 class="heading">Being ourselves, together.</h3>
                        <div> 


                            <?php
                            // Start the loop.
                            while ( have_posts() ) : the_post();

                                // Include the page content template.
                                get_template_part( 'content', 'page' );


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