<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 

    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
    <main>
        <section class="hero">
            <div class="container-fluid hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="images/template/hero-basic.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="hero-text">
                        <p class="h4 section-name text-uppercase">Section</p>
                        <h1 class="page-name">Template - Basic with Branding</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1">
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

                    <!-- 1 column -->
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                            <h3 class="heading">Square image - right</h3>
                            <div>
                                <figure class="figure-images figure-inline sg-figure-inline pull-right">
                                    <img src="images/template/figure-square.jpg" alt=" " class="img-item img-responsive ">
                                </figure>
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

                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                            <h3 class="heading">Portrait image - right</h3>
                            <div>
                                <figure class="figure-images figure-inline sg-figure-inline pull-right">
                                    <img src="images/template/figure-portrait.jpg" alt=" " class="img-item img-responsive ">
                                </figure>
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

                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                            <h3 class="heading">Landscape image - right</h3>
                            <div>
                                <figure class="figure-images figure-inline sg-figure-inline pull-right">
                                    <img src="images/template/figure-landscape.jpg" alt=" " class="img-item img-responsive ">
                                </figure>
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

                    <!-- 1 column -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Square image - left</h3>
                            <div>
                                <figure class="figure-images figure-inline sg-figure-inline pull-left">
                                    <img src="images/template/figure-square.jpg" alt=" " class="img-item img-responsive ">
                                </figure>
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

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Square portrait - left</h3>
                            <div>
                                <figure class="figure-images figure-inline sg-figure-inline pull-left">
                                    <img src="images/template/figure-portrait.jpg" alt=" " class="img-item img-responsive ">
                                </figure>
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

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Square landscape - left</h3>
                            <div>
                                <figure class="figure-images figure-inline sg-figure-inline pull-left">
                                    <img src="images/template/figure-landscape.jpg" alt=" " class="img-item img-responsive ">
                                </figure>
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


                    <hr class="divider-accent">


                    

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Re-flow columns - two columns</h3>
                            <div>
                                <div style="-webkit-column-count:2;  margin-bottom: 50px"> 
                                    <figure class="figure-images figure-inline sg-figure-inline pull-right">
                                        <img src="images/template/figure-square.jpg" alt=" " class="img-item img-responsive ">
                                    </figure>
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
                                        <?=$lorem2?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Re-flow columns - three columns</h3>
                            <div>
                                <div style="-webkit-column-count:3;  margin-bottom: 50px"> 
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
                                        <?=$lorem2?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->

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

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="heading">Re-flow columns - relative width (15em)</h3>
                            <div>
                                <div style="-webkit-column-width:15em;  margin-bottom: 50px"> 
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
                                        <?=$lorem2?>
                                    </p>
                                </div>
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
    
