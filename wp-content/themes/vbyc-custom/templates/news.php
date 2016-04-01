<? /* 
Template Name: News
*/ ?>


<?php get_header(); ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
                            <ul class="news-and-blog-list list-unstyled">
                            <?php

                            $args = array( 'posts_per_page' => 50, 'offset'=> 0, 'category' => 1 );

                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <li>
                                    <? // IMAGE 
                                    if ( has_post_thumbnail() ) {  ?>
                                        <a href="<?php the_permalink(); ?>" class="thumbnail">
                                        <? the_post_thumbnail('full'); ?>
                                        </a>
                                    <? } ?>
                                    

                                    <? // DATE ?>
                                    <p class="date">Posted on <?=get_the_date();?></p>

                                    <? // TITLE ?>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                    <? // EXEPERPT ?>
                                    <div><?php the_excerpt(); ?></div>

                                    <? // CTA ?>
                                    <p><a href="<?php the_permalink(); ?>">Read More</a></p>
        
                                </li>
                            <?php endforeach; 
                            wp_reset_postdata();?>
                            </ul>

                            <? /* TODO: Figure out how to load more. For now, posts_per_page is set really high. */?>
                            <!-- <a href="#" class="btn btn-primary btn-wide">View older posts</a> -->
                        </div>
                    </div><!-- /.row -->
                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  endwhile; endif; ?>
<?php get_footer(); ?>