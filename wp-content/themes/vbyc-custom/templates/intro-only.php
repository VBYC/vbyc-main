<? /* 
Template Name: Intro Only (No Content)
*/ ?>
<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <main class="main-content-container">    
        <section class="hero">
            <div class="container">
                <?
                    /* HERO HEADLINE */ 
                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-headlines.php"); 
                ?>
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="hero-text">
                            <div class="description">
                                <? /* CONTENT HEADLINE (First red one) */ 
                                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content_headline.php");

                                    /* HERO TEXT */ 
                                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-intro.php");  
                                ?>
                            </div> 
                        </div> 
                    </div>         
                </div><!-- /.row -->
            </div>
        </section>
        
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>