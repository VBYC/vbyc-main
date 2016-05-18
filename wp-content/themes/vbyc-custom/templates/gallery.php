<?
/* 
Template Name: Gallery
*/
?>

 <?php 
    $image_gallery_present = false;

    // IMAGE THUMB
    $thumbnail_format = get_field('thumnail_format');
    if ($thumbnail_format == 'square') {
        $thumbnail_col_width = '3';
        $thumbnail_format_size_name = 'profile';
    }  else {
        $thumbnail_col_width = '4';
        $thumbnail_format_size_name = 'gallery';
    }

    $image_thumb_default = get_field('default_image');
    if ($image_thumb_default['sizes'][$thumbnail_format_size_name]) :
        $image_thumb_default_url = $image_thumb_default['sizes'][$thumbnail_format_size_name];
    else:
         $image_thumb_default_url = $image_thumb_default_url['url'];
    endif;

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
                   
                        // IMAGE GALLERY
                        $images = get_field('images');
                        if( $images ): 
                            $image_gallery_present = true;
                            foreach( $images as $image ): 
                                // THUMB
                                if ($image['sizes'][$thumbnail_format_size_name]) :
                                    $image_thumb_url = $image['sizes'][$thumbnail_format_size_name];
                                else:
                                     $image_thumb_url = $image['url'];
                                endif;

                                // MAIN IMAGE
                                if ( $images['sizes']['gallery-lg'] ) :
                                    $image_url = $image['sizes']['gallery-lg'];
                                elseif ( $images['sizes']['gallery-md'] ) :
                                    $image_url = $image['sizes']['gallery-md'];
                                else:
                                    $image_url = $image['url'];
                                endif; 

                                // TEXT
                                $grid_title = $image['title'];
                                $grid_description = $image['description']; 
                                
          
  ?>
                        <div class="col-xs-12 col-sm-<?=$thumbnail_col_width?>">
                          <a href="<?php echo $image['url']; ?>" 
                            class="gallery" 
                            data-toggle="lightbox" 
                            data-type="image" 
                            data-gallery="multiimages" 
                                data-title="<?=$grid_title?>" 
                                data-footer="<?=$grid_description?>">
                                <img src="<?=$image_thumb_url?>" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
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



                    <?php 
                        // VIDEO GALLERY
                        if( have_rows('videos') ): 
                            if ($image_gallery_present === true) {
                                print '</div><hr class="divider-styled less-margin"><div class="row gallery-divider">'
                            }
                            while( have_rows('videos') ): the_row(); 
                                $image_thumb        = get_sub_field('image');
                                $name               = get_sub_field('name');
                                $position           = get_sub_field('position');
                                $description        = get_sub_field('description');
                                $video              = get_sub_field('video');
                                $data_type          = 'youtube';

                                if( !empty($image_thumb) ):
                                    if ($image_thumb['sizes'][$thumbnail_format_size_name]) :
                                        $image_thumb_url = $image_thumb['sizes'][$thumbnail_format_size_name];
                                    else:
                                         $image_thumb_url = $image_thumb_url['url'];
                                    endif;
                                else:
                                    $image_thumb_url = $image_thumb_default_url;
                                endif; 

                                if( empty($video) ):
                                    $video      = $image_thumb_url;
                                    $data_type  = 'image';
                                endif;  

                        ?>
   
                        <div class="col-xs-12 col-sm-<?=$thumbnail_col_width?>">
                          <a href="<?=$video?>" 
                            class="gallery" 
                            data-toggle="lightbox" 
                            data-type="<?$data_type?>" 
                            data-gallery="youtubevideos" 
                                data-title="<?=$name?>" 
                                data-footer="<?=$description?>">
                                <img src="<?=$image_thumb_url?>" class="img-responsive img-fluid grid-item" alt="<?=$name?>" >
                                <h2 class="gallery-label"><?=$name?></h2>
                            </a>
                            <div class="visible-xs-block details">
                                <p class="description"><strong><?=$name?></strong> <?=$position?> &mdash; <?=$description ?></p>
                            </div>
                        </div>
                    <?php 
                                
                            endwhile; 
                        endif; 
                    ?>
                    </div><!-- /.row -->
                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>