<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 

    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
<body class="template-timeline" data-spy="scroll">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 
    <main>    
    <main>
        <section class="hero">
            <? if ($show_hero_image) { ?>
            <div class="container-fluid hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="images/template/hero-timeline.jpg" alt=" ">
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
                                <h1 class="page-name">Template - Timeline</h1>
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

 

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="time first">7:00 AM</p>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-1 col-sm-4">
                            <div class="content">
                                <div class="content content-primary-text">
                                    <h3 class="headline">Wake Up</h3>
                                    <div class="description">
                                        <p><?=$lorem?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-offset-2">
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/template/timeline.jpg" class="timeline-img img-responsive" alt=" ">
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="time last">7:30 AM</p>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12  col-sm-4 pull-right ">
                            <div class="content">
                                <div class="content content-primary-text">
                                    <h3 class="headline">Make Up</h3>
                                    <div class="description">
                                        <p><?=$lorem?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 ">
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/template/timeline.jpg" class="timeline-img img-responsive" alt=" ">
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="time first">9:00 AM</p>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-1 col-sm-4">
                            <div class="content">
                                <div class="content content-primary-text">
                                    <h3 class="headline">Shake Up</h3>
                                    <div class="description">
                                        <p><?=$lorem?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-offset-2">
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/template/timeline.jpg" class="timeline-img img-responsive" alt=" ">
                                </a>
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
    
