<?php 
/* 
Template Name: Timeline
*/ 
?>
<?php 
    // REGULAR SESSIONS
    $args = array(
        'post_type' => 'typicalday',
        'post_status' => 'publish',
        'meta_query' => array(
            'relation' => 'AND',
            'timeline_time_clause' => array(
                'key'     => 'timeline_time',
                'compare' => '!=',
            ),
        ),
        'orderby' => array(
            'timeline_time_clause' => 'ASC',
        ),
    );
  $typicalday = new WP_Query( $args );
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
                    <?php if( have_rows('timeline_event') ): ?>
                        <?php 
                            while( have_rows('timeline_event') ): the_row(); 
                                $event          = get_sub_field('event');
                                $time           = strtoupper(get_sub_field('timeline_time'));
                                $description    = get_sub_field('timeline_description');
                                $image          = get_sub_field('timeline_image');
                                $image_link     = get_sub_field('timeline_image_link');

                                // Swap the alignment of image/text on every other item
                                if ($num & 1 ) {
                                    // Odd
                                    $classes_event = 'col-xs-12 col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8';
                                    $classes_image = 'col-xs-12 col-sm-5 col-sm-pull-5 col-lg-pull-4';
                                } else { 
                                    // Even
                                    $classes_event = 'col-xs-12 col-sm-5 col-lg-offset-1 col-lg-4';
                                    $classes_image = 'col-xs-12 col-sm-5 col-sm-offset-2 ';
                                }
                                $num++;
                    ?>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time"><?=$time?></p>
                            </div>
                        </div><!-- /.row -->
                        <div class="row content-row">
                            <div class="<?=$classes_event?>">
                                <div class="content">
                                    <div class="content content-primary-text">
                                        <h2 class="headline"><?=$event?></h2>
                                        <div class="description">
                                            <?=$description?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="<?=$classes_image?>">
                                <div class="content content-primary-img">
                                    <? 
                                        $close_a_tag = null;
                                        if( !empty($image_link) ): 
                                            $close_a_tag = '</a>';
                                    ?>
                                        <a href="<?=$link?>" class="link">
                                    <?php
                                        endif; 

                                        if( !empty($image) ): 
                                    ?>
                                        <img src="<?php echo $image['url']; ?>" class="timeline-img img-responsive" alt="<?php echo $image['alt']; ?>">
                                    <?php 
                                        endif; 
                                        echo $close_a_tag;
                                    ?>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.timeline-item -->
                    <?php endwhile; ?>
                <?php endif; ?>
                </article> 
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>