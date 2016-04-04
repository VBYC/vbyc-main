<? /* 
Template Name: Profile
*/ ?>

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
                        <div class="col-xs-12 col-sm-4">
                            <div class="portrait-container">
                                <img src="/images/pages/meet-the-director/portrait.jpg" alt="Dottie Myers-Hill, Camp Director" class="portrait-primary v-offset-6 img-responsive">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
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
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>