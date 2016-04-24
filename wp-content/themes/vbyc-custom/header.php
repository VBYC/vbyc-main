<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!doctype html>
<!--[if lt IE 7]>            <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>                 <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>                 <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
    <title><?=get_permalink();?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <?
        // Social and SEO Title
        if ( !empty(get_field('social_seo_title')) ) :
            $social_seo_title       = get_field('social_seo_title');
        else:
            $social_seo_title = 'Van Buren Youth Camp';
        endif;

        // Social and SEO Description
         if ( !empty(get_field('social_seo_description')) ) :
            $social_seo_description       = get_field('social_seo_description');
        else:
            $social_seo_description = 'Van Buren Youth Camp is a co-ed, residential, summer camp in southwest Michigan. Weekly camping sessions go from June to August.';
        endif;

        // Social and SEO Image
        if ( !empty( get_field('social_seo_image') )) :
            $social_seo_image = get_field('social_seo_image');
            if ( $social_seo_image ) :
                $social_seo_image_url = $social_seo_image['sizes']['social']; 
            endif;
        endif;

        // Featured
        if (has_post_thumbnail( $post->ID ) ): 
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured' ); 
            $featured_image_url =  $featured_image[0]; 
            echo 'featured_image_url: '.$featured_image_url;
        endif;

        // Featured - Low Res
        if ( !empty( get_field('featured_image_low_resolution') )) :
            $featured_image_low_resolution = get_field('featured_image_low_resolution');
            $featured_image_low_resolution_url = $featured_image_low_resolution['url']; 
        endif;

    ?>

    <? /* Facebook */ ?>
    <meta property="og:url"             content="" />
    <meta property="og:title"           content="<?=$social_seo_title?>" />
    <meta property="og:description"     content="<?=$social_seo_description?>" />

    <? /* Twitter */ ?>
    <meta name="twitter:card"           content="summary_large_image">
    <meta name="twitter:site"           content="@vbyc">
    <meta name="twitter:creator"        content="@vbyc">
    <meta name="twitter:title"          content="<?=$social_seo_title?>">
    <meta name="twitter:description"    content="<?=$social_seo_description?>">

<?
    if ( $social_seo_image_url ):
?>
    <meta property="og:image"           content="<?=$social_seo_image_url?>" /> 
    <meta name="twitter:image"          content="<?=$social_seo_image_url?>"> 
<? 
    endif;
?>

    <? /* Make connecting to these domains faster */ ?>
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//connect.facebook.net">

    <? /* if ($url_page == 'contact') { */ ?>
        <link rel="dns-prefetch" href="//maps.gstatic.com">
        <link rel="dns-prefetch" href="//maps.google.com">
    <? /* } */  ?>

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <?php wp_head(); ?>

    <? if ($featured_image_url) : ?>
        <? if ( is_front_page() ) : ?>
            <style>
                .page-template-home .header-main,
                .page-template-home .header-main.low-res-placeholder:after {
                    background-image: url('<?=$featured_image_url?>');
                }
                <? if ($featured_image_low_resolution_url) : ?>
                .page-template-home .header-main.low-res-placeholder {
                    background-image: url('<?=$featured_image_low_resolution_url?>');
                }
            </style>
            <? endif; ?>
        <? endif; ?>
    <? endif; ?>
    
</head>

<body id="post-<?php the_ID(); ?>" <?php body_class(); ?>>
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 
<div id="page" class="hfeed site page-home">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>



    <header class="header-main low-res-placeholder background-img-fluid v-offset-bot-0">
        <div class="container">
            <div class="row">
                <div class="main-logo-container navbar-toggle-container col-xs-12 col-md-4 text-center">
                    <a href="/" title="Home">
                        <!-- TODO: Change color with CSS http://codepen.io/helmemat/pen/ndJgz -->
                        <!-- TODO: Use just 1 file for icon too -->
                        <?php if ( is_front_page() ) { $logo_version = '-reverse'; } ?>
                        <img src="/images/logos/vbyc-logo-icon<?=$logo_version?>.svg" alt="VBYC logo" class="main-logo main-logo-icon">
                        <img src="/images/logos/vbyc-logo<?=$logo_version?>.svg" alt="VBYC logo" class="main-logo main-logo-normal img-responsive">
                    </a>
                    <? include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/nav-main-toggle.php"); ?> 
                </div>
                <div class="col-xs-12 col-md-8">
                    <? include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/nav-main.php"); ?> 
                </div>
            </div><!-- /.row -->

        </div>

        <?php
            if ( is_front_page() ) : 
               if( have_rows('hero_headline') ): ?>
                <div class="container home-hero-text-outer">
                    <div class="home-hero-text">
                        <div class="container home-hero-text-inner">
                            <h1>
                                <?php 
                                    $count = 1;
                                    while( have_rows('hero_headline') ): the_row(); 
                                        $word_group = get_sub_field('word_group');
                                ?>
                                <span class="group-<?=$count?>"><?=$word_group?></span>  
                                <?php 
                                    $count++;
                                    endwhile; 
                                ?>
                            </h1>
                        </div>


                        <div class="hero-scroll-cta">
                            <a href="#post-hero" class="link scroll-to"><span class="glyphicon glyphicon-menu-down"></span> Scroll</a>
                        
                        </div>
                    </div>
                </div> 
        <?php 
                endif; 
            endif; 
        ?>
         </header>


              




