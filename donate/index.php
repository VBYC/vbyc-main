<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_donate;
    $page = $url_donate;
    $section = 'donate';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    // $javascript_insert = '';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main>    
        <section class="hero">
            <? if ($show_hero_image) { ?>
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/template/hero-basic.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <? } ?>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <h1 class="page-name"> A Gift that Lasts a Lifetime</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>Each year dozens of students attend camp due to the generosity of donors just like you. Any little bit helps to send a kid to camp who wouldn’t otherwise have the chance. Your tax-deductible contribution to a campership builds lifelong memories and friendships.</p>
                                </div> 
                                <a href="mailto:director@vbyc.org" class="hero-cta">Contact the camp director to donate today</a>  
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
                            <h3 class="heading">Donor Testimony</h3>
                            <div>
                                <p>
                                    <strong>TODO: Dottie, do we have this?</strong> Possibly a section with quotes from the kids, one kid, having them tell how appreciative they are for donations. Or, in this case, President Obama.
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Donations through your Will</h3>
                            <h4>Your Legacy of Giving</h4>
                            <div>
                                <p>
                                    Contact the <a href="mailto:director@vbyc.org">camp director</a> to discuss planned giving. Including Van Buren Youth Camp in your estate planning ensures your impact will empower generations. 
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->

            





                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 