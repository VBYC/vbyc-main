<!doctype html>
<!--[if lt IE 7]>            <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>                 <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>                 <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title><?=$title?></title>


            <meta name="description" content="<?=$description?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <? /* Facebook */ ?>
            <meta property="og:url"                content="<?=$this_url?>" />
            <meta property="og:title"              content="<?=$title?>" />
            <meta property="og:description"        content="<?=$description?>" />
            <meta property="og:image"              content="<?=$facebook_share_thumb_path.$page.'.jpg'?>" />

            <? /* Twitter */ ?>
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:site" content="@vbyc">
            <meta name="twitter:creator" content="@vbyc">
            <meta name="twitter:title" content="<?=$title?>">
            <meta name="twitter:description" content="<?=$description?>">
            <meta name="twitter:image" content="<?=$facebook_share_thumb_path.$page.'.jpg'?>">

            <? /* Make connecting to these domains faster */ ?>
            <link rel="dns-prefetch" href="//www.google-analytics.com">
            <link rel="dns-prefetch" href="//fonts.googleapis.com">
            <link rel="dns-prefetch" href="//ajax.googleapis.com">
            <link rel="dns-prefetch" href="//connect.facebook.net">

            <? if ($url_page == 'contact') { ?>
                <link rel="dns-prefetch" href="//maps.gstatic.com">
                <link rel="dns-prefetch" href="//maps.google.com">
            <? } ?>

            <link rel="apple-touch-icon" href="/apple-touch-icon.png">
            <link rel="stylesheet" href="/css/main.css">
    </head>

    <body <?=$body_attributes?>>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 





