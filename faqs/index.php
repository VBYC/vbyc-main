<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_faqs;
    $page = $url_faqs;
    $section = 'XXX';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    $javascript_insert = 'vbyc.util.init({hasSidenav : true});';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main class="main-content/-container" data-spy="scroll" data-target="#sidenav">
        <section class="hero">
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">About</p>
                                <h1 class="page-name">FAQs</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>

        
        <section class="main-content">



            

            <div class="container scroll-spy-container"> 
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <aside id="sidenav-container">
                            <ul id="sidenav" class="sidenav nav sidenav-list list-unstyled">
                                <li class="item" role="presentation">
                                    <a href="#q1" class="link sidenav-">Question</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#q2" class="link sidenav-">Question</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#q3" class="link sidenav-">Question</a>
                                </li>
                            </ul>
                        </aside>
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li id="q1" class="item">                                    
                                    <h3 class="heading ">Question</h3>
                                    <p>Answer</p>
                                </li>
                                <li id="q2" class="item">                                    
                                    <h3 class="heading ">Question</h3>
                                    <p>Answer</p>
                                </li>
                                <li id="q3" class="item">                                    
                                    <h3 class="heading ">Question</h3>
                                    <p>Answer</p>
                                </li>
                            </ul>
                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 