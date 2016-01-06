<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = 'FPO title';
    $page = 'fpo-page';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="template-'.$template.' has-sticky-main-nav "';
    $description = 'FPO description';
    $is_selecetd = 'selected';
?>
<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 
    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
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
                                <p class="h4 section-name text-uppercase">Section</p>
                                <h1 class="page-name">Template - Basic</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>Paragraph</p>
                                </div> 
                                <a href="#" class="hero-cta">Call to action</a>  
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
                        <figure class="figure-images figure-zig-zag">
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
                        </figure>
                    </div><!-- /.row -->
                    <? } ?>
                    <!-- END ZIG ZAG FIGURE -->

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">One column</h3>
                            <div>
                                <p>
                                    <?=$lorem?>
                                    <?=$lorem2?>
                                </p>
                                <p>
                                    <?=$lorem?>
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <!-- START MULTI COLUMN OPTIONS -->
                    <!-- 2 columns -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <h3 class="heading">Two columns</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="">
                                <?=$lorem?>
                                <?=$lorem2?>
                                <?=$lorem2?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="">
                                <?=$lorem?>
                                <?=$lorem2?>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Three columns</h3>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="">
                                <?=$lorem?>
                                <?=$lorem2?>
                                <?=$lorem2?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="">
                                <?=$lorem?>
                                <?=$lorem2?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="">
                                <?=$lorem?>
                                <?=$lorem2?>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <hr class="divider-styled">

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Re-flow columns - fixed width (300px)</h3>
                            <div>
                                <div class="columns-reflow-fixed-3" style="  margin-bottom: 50px"> 
                                    <p>
                                        <?=$lorem?>
                                        <?=$lorem2?>
                                    </p>
                                    <p>
                                        <?=$lorem?>
                                    </p>
                                    <p>
                                        <?=$lorem?>
                                        <?=$lorem2?>
                                        <dl>
                                            <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/basic-template-content-1.php"); ?> 
                                        </dl>
                                        <?=$lorem2?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <hr class="divider-styled">
        
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Callout text</h3>
                            <div class="content-callout">
                                <p>
                                    <?=$lorem?>
                                    <?=$lorem2?>
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <!-- END MULTI COLUMN OPTIONS -->


                </article> 
            </div><!-- /.container -->
        </section>
    </main>



<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 

    
