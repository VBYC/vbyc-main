<?php
get_header(); ?>

<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero.php"); ?> 

    <section class="main-content">
        <div class="container"> 
            <article class="main-article">

                <?php   

                /* FEATURED IMAGES - SECONDARY (Group of 4) */ 
                include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/featured_images_secondary.php");
                
                ?>

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
            </article><!-- /.main-article -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>