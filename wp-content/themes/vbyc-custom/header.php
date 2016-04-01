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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<? /* Facebook */ ?>
<!--     <meta property="og:url"                content="<?=$this_url?>" />
    <meta property="og:title"              content="<?=$title?>" />
    <meta property="og:description"        content="<?=$description?>" />
    <meta property="og:image"              content="<?=$facebook_share_thumb_path.$page.'.jpg'?>" /> -->

    <? /* Twitter */ ?>
<!--     <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@vbyc">
    <meta name="twitter:creator" content="@vbyc">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$description?>">
    <meta name="twitter:image" content="<?=$facebook_share_thumb_path.$page.'.jpg'?>"> -->

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
			if ( is_front_page() ) : ?>
				<div class="container home-hero-text-outer">
	                <div class="home-hero-text">
	                    <div class="container home-hero-text-inner">
	                        <h1>
	                            <span class="group-1">Discovering</span>  
	                            <span class="group-2">nature,</span> 
	                            <span class="group-3">each other, </span>
	                            <span class="group-4">&amp; ourselves.</span>
	                        </h1>
	                    </div>
	                    <div class="hero-scroll-cta">
	                        <a href="#post-hero" class="link scroll-to"><span class="glyphicon glyphicon-menu-down"></span> Scroll</a>
	                    </div>
	                </div>
            	</div> 

				
			<?php endif;
		?>
		 </header>
			
    <?php // get_sidebar(); ?>
		
	
	 

