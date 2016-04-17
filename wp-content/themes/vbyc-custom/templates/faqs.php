<? /* 
Template Name: FAQs
*/ ?>

<?php 

    function convertToLinkable($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }

?>

<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main class="main-content-container">

        <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero.php"); ?> 

        <?php if( have_rows('faq_row') ): ?>
        <section class="main-content">
            <div class="container"> 
                <div class="row">
                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <article class="main-article">
                            <ul class="content-list list-multiple-details list-unstyled">
                                <?php
                                    while( have_rows('faq_row') ): the_row(); 
                                        $question       = get_sub_field('question');
                                        $answer         = get_sub_field('answer');
                                        $anchor_link    = convertToLinkable($question);
                                ?>
                                <li id="<?=$anchor_link?>" class="item">                                    
                                    <h2 class="heading"><?=$question?></h2>
                                    <?=$answer?>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
        <?php endif; ?>
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>