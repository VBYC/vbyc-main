<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


    <main class="main-content-container">

        
        <section class="hero">
            <?php 

            /* HERO IMAGE */ 
            if ( has_post_thumbnail() ) { 
                include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-image.php"); 
            
            } ?>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <?php    

                    /* HERO HEADLINE */ 
                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-headlines.php"); 

                    /* HERO TEXT */ 
                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-intro.php"); 
                    
                    ?> 
                </div>
            </div>
        </section>

        <section class="main-content">
            <div class="container"> 
                <article class="main-article">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">

                            <?php   

                            /* CONTENT HEADLINE (First red one) */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content_headline.php");

                            /* MAIN CONTENT */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content_main.php"); 
                            
                            ?> 
                        </div>
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <hr>

                             <? // Start the loop.
                            while ( have_posts() ) : the_post();

                                // Previous/next post navigation.
                                the_post_navigation( array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next: ', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous: ', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                ) );

                            // End the loop.
                            endwhile;
                            ?>

                        </div>
                    </div><!-- /.row -->

                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php get_footer(); ?>
