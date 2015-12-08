<? 
    $page = 'timeline';
    $body_classes = ' template-'.$page.' ';
?>
<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 

    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 

    $item_left = '
        <div class="row content-row">
            <div class="col-xs-12 col-sm-5 col-lg-offset-1 col-lg-4">
                <div class="content">
                    <div class="content content-primary-text">
                        <h3 class="headline">Event</h3>
                        <div class="description">
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-sm-offset-2 ">
                <div class="content content-primary-img">
                    <a href="#" class="link">
                        <img src="images/template/timeline.jpg" class="timeline-img img-responsive" alt=" ">
                    </a>
                </div>
            </div>
        </div><!-- /.row -->
    ';

    $item_right = '
            <div class="row content-row">
                <div class="col-xs-12 col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8
     ">
                    <div class="content">
                        <div class="content content-primary-text">
                            <h3 class="headline">Event</h3>
                            <div class="description">
                                <p>Non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                <p>Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-sm-pull-5 col-lg-pull-4">
                    <div class="content content-primary-img">
                        <a href="#" class="link">
                            <img src="images/template/timeline.jpg" class="timeline-img img-responsive" alt=" ">
                        </a>
                    </div>
                </div>
            </div><!-- /.row -->
    ';
?>
    
    <? include("_template-includes/head.php"); ?> 
    <? include("_template-includes/header.php"); ?>  


    <main>
        <section class="hero">
            <div class="container-fluid hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="images/heros/timeline.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
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

 

                    <div class="timeline-item first">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time">7:00 AM</p>
                            </div>
                        </div><!-- /.row -->
                        <?=$item_left?>
                    </div><!-- /.timeline-item -->

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time">7:30 AM</p>
                            </div>
                        </div><!-- /.row -->
                        <?=$item_right?>
                    </div><!-- /.timeline-item -->

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time">8:00 AM</p>
                            </div>
                        </div><!-- /.row -->
                        <?=$item_left?>
                    </div><!-- /.timeline-item -->

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time">9:00 AM</p>
                            </div>
                        </div><!-- /.row -->
                        <?=$item_right?>
                    </div><!-- /.timeline-item -->

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time">12:00 PM</p>
                            </div>
                        </div><!-- /.row -->
                        <?=$item_left?>
                    </div><!-- /.timeline-item -->

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <p class="time">5:30 PM</p>
                            </div>
                        </div><!-- /.row -->
                        <?=$item_right?>
                    </div><!-- /.timeline-item -->


                    <div class="timeline-item last">
                        <div class="row row-item">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                                <p class="time">10:00 PM</p>
                                <div class="content">
                                    <div class="content content-primary-text">
                                        <h3 class="headline">TAPS</h3>
                                        <div class="description">
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <!-- /.row -->
                    </div><!-- /.timeline-item -->



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
    
