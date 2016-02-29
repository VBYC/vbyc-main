<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_news_amazon;
    $page = $url_news_amazon;
    $section = 'sessions';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = $description_news_amazon;
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
                            <img src="/images/heroes/news/amazon.jpg" alt="Staff and campers by the waterfront">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">News</p>
                                <h1 class="page-name"><?=$title_news_amazon?></h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>
        <section class="main-content">
            <div class="container"> 
                <article class="main-article">

                    

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Amazon will donate .05% on each of your eligible purchases.</h3>
                            <div>
                                <p>
                                    To sign up, just <a href="http://smile.amazon.com/gp/charity/homepage.html?orig=%2Fgp%2Fbrowse.html%3Fnode%3D502659011&ein=38-1452699" target="_blank">sign in to your Amazon account with this link</a>. It is an easy way to give more to Van Buren Youth Camp. Thank you!!
                                </p>

                                
                            </div>
                        </div>
                    </div><!-- /.row -->



                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 