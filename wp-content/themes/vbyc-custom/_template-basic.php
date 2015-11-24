<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 

    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
    <main>
        <section class="hero">
            <? if ($show_hero_image) { ?>
            <div class="container-fluid hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="images/template/hero-basic.jpg" alt=" ">
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
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
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

                    <? if ($show_content_hero_image) { ?>
                    <div class="row">
                        <figure class="figure-images figure-zig-zag">
                            <!-- 1 column -->
                            <div class="row figure-row">
                                <div class="col-sm-2 img-container">
                                    <img src="images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div> 
                                <div class="col-sm-4 img-container">
                                    <img src="images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div> 
                                <div class="col-sm-4 img-container">
                                    <img src="images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div> 
                                <div class="col-sm-2 img-container">
                                    <img src="images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div>         
                            </div><!-- /.row -->
                        </figure>
                    </div><!-- /.row -->
                    <? } ?>

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

            





                    <!-- 2 columns -->
                    <div class="row">
                        <h3 class="heading">Two columns</h3>
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
                                <div style="-webkit-columns:300px;  margin-bottom: 50px"> 
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
                                        <? include("_template-includes/basic-template-content-1.php"); ?> 
                                        <?=$lorem2?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->


                    





                    <hr class="divider-styled">


                 

                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <h3 class="heading">Callout text</h3>
                            <div class="content-callout">
                                <p>
                                    <?=$lorem?>
                                    <?=$lorem2?>
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->







                    

                    



                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("_template-includes/footer-markup.php"); ?>

    <script>
        $(document).ready(function() {
            vbyc.util.init();
        });
    </script>

<? include("_template-includes/footer.php"); ?> 
    
