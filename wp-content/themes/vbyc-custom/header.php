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

<body <?php body_class(); ?>>
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 
<div id="page" class="hfeed site page-home">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
