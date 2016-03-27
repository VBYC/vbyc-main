<?
/* 
Template Name: Gallery
*/
?>


<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
                       
                            <?php   

                   

                            /* MAIN CONTENT */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content_main.php"); 



                            
                            ?> 

                            <? /*
                            <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Washburn Lodge"; ?>
                            <? $grid_description = "Dining together, all-camp activities, visiting the library, or lounging in the couch area at free time makes Washburn Lodge the heart of Camp. It’s also home to more than 65 years of souvenirs, photos, and Camp’s mascot, Cleo the Moose, whom you'll have to kiss if you get caught with your elbows on the table. The lodge is both heated and air conditioned.  It has a front deck facing Great Bear Lake for people to enjoy cool breezes during activities or hanging out with friends." ?>
                            <a href="/images/pages/facilities/lg/lodge.jpg" 
                            class="gallery" 
                            data-toggle="lightbox" 
                            data-type="image" 
                            data-gallery="multiimages" 
                                data-title="<?=$grid_title?>" 
                                data-footer="<?=$grid_description?>">
                                <img src="/images/pages/facilities/sm/lodge.jpg" c
                                lass="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p class="description"><strong><?=$grid_title?></strong> &mdash; <?=$grid_description ?></p>
                            </div>
                        </div>
                        */ ?>



                  
                    </div><!-- /.row -->
                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>