<? 
    $page = 'home';
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 

    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
<body class="template-home" data-spy="scroll">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 

    
    <main> 
        <section class="news-feed">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="content">
                            <h5 class="headline ">News ///</h5>
                            <ul class="news-feed-list list-inline">
                                <li class="item"><a href="#" class="link">2016 schedule is out!</a></li>
                                <li class="item"><a href="#" class="link">Volunteer for spring clean up</a></li>
                                <li class="item"><a href="#" class="link">Meet the 2016 staff!</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>

        <section class="home-banner-primary">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/illustrations/calendar.png" class="banner" alt=" ">
                            </a>
                            <h3 class="headline">Find a session for your child</h3>
                            <p><?=$lorem?></p>
                            <a href="#" class="link">
                                View Schedule
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6"> 
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/illustrations/campfire.png" class="banner" alt=" ">
                            </a>
                            <h3 class="headline">Every camp day is a good day</h3>
                            <p><?=$lorem?></p>
                            <a href="#" class="link">
                                View Camp Life
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>

        <section class="home-banner-secondary">
            <div class="container">
                <div class="row banner-activities">
                    <div class="col-xs-12 col-sm-7">
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/home/activities.jpg" class="banner img-responsive" alt=" ">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="content">
                            <h3 class="headline">Activities</h3>
                            <p><?=$lorem?></p>
                            <a href="#" class="link">
                                View Schedule
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row banner-cleo">
                    <div class="col-xs-12 col-sm-4">
                        <div class="content">
                            <h3 class="headline">Cleo the Moose</h3>
                            <p><?=$lorem?></p>
                            <a href="#" class="link">
                                Learn more about Cleo
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/home/cleo.jpg" class="banner img-responsive" alt=" ">
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row banner-alumni">
                    <div class="col-xs-12 col-sm-7">
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/home/alumni.jpg" class="banner img-responsive" alt=" ">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="content">
                            <h3 class="headline">Alumni</h3>
                            <p><?=$lorem?></p>
                            <a href="#" class="link">
                                View alumni information
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>


        <section class="home-banner-map">
            <div class="container">
                <div class="row banner-map">
                    <div class="col-xs-12">
                        <div class="content">
                            <a href="#" class="link text-center">
                                <h3 class="headline">There&rsquo;s a lot to explore!</h3>
                                <p class="cta">View the map of camp</p>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>

        <section class="home-banner-tertiary">
            <div class="container">
                <div class="row banner-map">
                    <div class="col-xs-12">
                        <div class="content">
                            <h3>
                                <a href="#" class="link">
                                    Rent the camp
                                </a>
                            </h3>
                            <p><?=$lorem?> <a href="#">Learn more</a></p>
                             <a href="#" class="link">
                                <img src="images/home/kayaks.jpg" class="banner img-responsive" alt=" ">
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>
        
        
    </main>

<? include("_template-includes/footer-markup.php"); ?>

    <script>
        $(document).ready(function() {
            vbyc.util.init();
        });
    </script>

<? include("_template-includes/footer.php"); ?> 
    
