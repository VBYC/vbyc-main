<?php

get_header(); ?>

    <section class="hero" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php /* HERO IMAGE */ ?>
        <?php if ( has_post_thumbnail() ) { ?>

            <?php  include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-image.php"); ?> 
           
        <?php } ?>

        <?php /* HERO TEXT */ ?>
        <?php  include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-text.php"); ?> 

    </section>

    <section class="main-content">
        <div class="container"> 
            <article class="main-article">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                      
                        <?php
                        $has_content_headline = get_field( "content_headline" );
                        if ( $has_content_headline ) { ?>

                            <h3 class="heading"><?php the_field('content_headline'); ?></h3> 

                        <? } ?>

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