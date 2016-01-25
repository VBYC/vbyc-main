<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_alumni;
    $page = $url_alumni;
    $section = 'alumni';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = $description_alumni;
    // $javascript_insert = '';
?>
<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 
    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

    <main>    
        <section class="hero">
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/heroes/alumni.jpg" alt="Alumni at a camp reunion">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <h1 class="page-name">Alumni</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>
        <section class="main-content">
            <div class="container"> 
                <article class="main-article">

                    <!-- START ZIG ZAG FIGURE -->
                    <? if ($show_content_hero_image) { ?>
                    <div class="row">
                        <!-- 1 column -->
                        <div class="row figure-row">
                            <div class="col-sm-2 img-container">
                                <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                            </div> 
                            <div class="col-sm-4 img-container">
                                <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                            </div> 
                            <div class="col-sm-4 img-container">
                                <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                            </div> 
                            <div class="col-sm-2 img-container">
                                <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                            </div>         
                        </div><!-- /.row -->
                    </div><!-- /.row -->
                    <? } ?>
                    <!-- END ZIG ZAG FIGURE -->

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Once you're camp family, you're always camp family.</h3>
                            <div>
                                <p>
                                    There are lots of ways you can stay involved with camp. <a href="<?=$url_alumni_login?>" target="_blank">Sign up on our registry</a> to get notices of reunions, fundraisers, and volunteer opportunities.
                                </p>
                            </div>

                            <h3 class="heading">Support VBYC</h3>
                            <div>
                                <p>
                                   The very best way is to support VBYC is to pass on the magic you experienced here as a kid to your kids, and the kids of your friends, family, colleagues, and neighbors.
                                </p>
                                <p>
                                   Make a <a href="/<?=$url_donate?>/">donation</a> to camp to support financial aid for campers in need, <a href="/<?=$url_facilities?>/">facilities</a> upkeep, equipment, or anything you'd like to see it go for. 
                                </p>
                            
                            </div>
                        </div>
                    </div><!-- /.row -->

                  

                </article> 
            </div><!-- /.container -->
        </section>
    </main>
 

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 