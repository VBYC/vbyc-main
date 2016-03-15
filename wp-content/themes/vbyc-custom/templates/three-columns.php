<?php
/* 
Template Name: Three Columns
*/
?>

<?php get_header(); ?>

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
                    <div class="col-xs-12 col-sm-4">
                        <?php the_field('col_1_of_3'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <?php the_field('col_2_of_3'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <?php the_field('col_3_of_3'); ?>
                    </div>
                </div><!-- /.row -->
                
            </article><!-- /.main-article -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>