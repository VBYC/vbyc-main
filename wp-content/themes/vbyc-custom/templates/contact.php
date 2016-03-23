<? /* 
Template Name: Contact
*/ ?>
<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main class="main-content-container ">

        <? $hide_hero_intro = true; ?>
        <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero.php"); ?> 

        <section class="main-content text-center">
            <div class="container"> 
                <article class="main-article">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="global-contact-info-container">
                                <?php   

                                /* FEATURED IMAGES - SECONDARY (Group of 4) */ 
                                include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/contact-info.php");
                                
                                ?>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </article><!-- /.main-article -->

                <div class="row">
                    <div class="col-xs-12">
                        <?php echo the_field('contact_embedded_map'); ?>
                    </div>
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>