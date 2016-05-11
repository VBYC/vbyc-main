<? /* 
Template Name: With Side Nav
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

        <?php if( have_rows('with_side_nav_row') ): ?>
        <section class="main-content">
            <div class="container"> 
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <aside id="sidenav-container">
                           <ul id="sidenav" class="sidenav nav sidenav-list list-unstyled">
                                <?php 
                                    while( have_rows('with_side_nav_row') ): the_row(); 
                                    $label          = get_sub_field('title');
                                    $anchor_link    = convertToLinkable($label);
                                ?>
                                <li class="item" role="presentation">
                                    <a href="#<?=$anchor_link?>" class="link"><?=$label?></a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </aside>
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/mini-gallery.php"); ?>
                            <ul class="content-list list-multiple-details list-unstyled">
                            <?php
                                while( have_rows('with_side_nav_row') ): the_row(); 
                                    $headline               = get_sub_field('title');
                                    $description            = get_sub_field('description');
                                    $anchor_link            = convertToLinkable($headline);

                                    $image_primary          = get_sub_field('primary_photo');
                                    if ($image_primary['sizes']['content-primary']) :
                                        $image_primary_url = $image_primary['sizes']['content-primary'];
                                    else:
                                        $image_primary_url  = $image_primary['url'];
                                    endif;

                                    $image_secondary_1      = get_sub_field('secondary_photos_1');
                                    if ($image_secondary_1['sizes']['content-secondary']) :
                                        $image_secondary_1_url = $image_secondary_1['sizes']['content-secondary'];
                                    else:
                                        $image_secondary_1_url  = $image_secondary_1['url'];
                                    endif;

                                    $image_secondary_2      = get_sub_field('secondary_photos_2');
                                    if ($image_secondary_2['sizes']['content-secondary']) :
                                        $image_secondary_2_url = $image_secondary_2['sizes']['content-secondary'];
                                    else:
                                        $image_secondary_2_url  = $image_secondary_2['url'];
                                    endif;

                                    $image_tertiary         = get_sub_field('tertiary_photo');
                                    if ($image_tertiary['sizes']['content-tertiary']) :
                                        $image_tertiary_url = $image_tertiary['sizes']['content-tertiary'];
                                    else:
                                        $image_tertiary_url  = $image_tertiary['url'];
                                    endif;

                                    
                            ?>
                                <li id="<?=$anchor_link?>" class="item">                                    
                                    <h2 class="heading <?=$anchor_link?>"> <?=$headline?></h2>
                                    <div class="description">
                                        <?=$description?>
                                    </div>
                                    <?php if( !empty($image_primary) ): ?>
                                    <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="<?=$image_primary_url?>" class="img-item img-responsive img-fluid" alt="<?=$image_primary['alt']?>">
                                                </div>
                                            </div>
                                            <?php if( !empty($image_secondary_1) ): ?>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="<?=$image_secondary_1_url?>" class="img-item img-responsive img-fluid" alt="<?=$image_secondary_1['alt']?>">
                                                    </div>
                                                    <?php if( !empty($image_secondary_2) ): ?>
                                                    <div class="image-container">
                                                        <img src="<?=$image_secondary_2_url?>" class="img-item img-responsive img-fluid" alt="<?=$image_secondary_2['alt']?>">
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if( !empty($image_tertiary) ): ?>
                                        <div class="row row-secondary hidden-xs">
                                            <div class="col-xs-12 col-sm-11 col-md-12">
                                                <div class="image-container">
                                                    <img src="<?=$image_tertiary_url?>" class="img-item img-responsive img-fluid" alt="<?=$image_tertiary['alt']?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </figure>
                                    <?php endif; ?>
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