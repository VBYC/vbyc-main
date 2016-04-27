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

                        $images = get_field('images');
                        if( $images ): 
                            foreach( $images as $image ): 
                                $grid_title = $image['title'];
                                $grid_description = $image['description'];
                                if ( $image['sizes']['large'] ) :
                                    $image_url = $image['sizes']['large'];
                                else:
                                    $image_url = $image['url'];
                                endif;  
                                
          
  ?>
                        <div class="col-xs-12 col-sm-4">
                          <a href="<?php echo $image['url']; ?>" 
                            class="gallery" 
                            data-toggle="lightbox" 
                            data-type="image" 
                            data-gallery="multiimages" 
                                data-title="<?=$grid_title?>" 
                                data-footer="<?=$grid_description?>">
                                <img src="<?php echo $image_url; ?>" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h2 class="gallery-label"><?=$grid_title?></h2>
                            </a>
                            <div class="visible-xs-block details">
                                <p class="description"><strong><?=$grid_title?></strong> &mdash; <?=$grid_description ?></p>
                            </div>
                        </div>
                    <?php 
                            endforeach; 
                        endif; 
                    ?>
                    </div><!-- /.row -->
                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>