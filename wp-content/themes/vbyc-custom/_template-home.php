<? 
    $page = 'home';
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 
    $loremSm = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.'; 
    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
<body class="template-home" data-spy="scroll">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 

    
    <main class="text-center"> 
        <!-- NEWS FEED -->
        <section class="news-feed">
            <div class="container-extended">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="content clearfix">
                            <div class="content-inner">
                                <h5 class="headline"><a href="#" class="link-reverse " title="Read all news stories">News</a> ///</h5>
                                <ul class="news-feed-list list-unstyled">
                                    <li class="item"><a href="#" class="link">2016 schedule is out!</a></li>
                                    <li class="item"><a href="#" class="link">Volunteer for spring clean up</a></li>
                                    <li class="item"><a href="#" class="link">Meet the 2016 staff!</a></li>
                                    <li class="item"><a href="#" class="link">Midnight fundraise, May 21st.</a></li>
                                    <li class="item"><a href="#" class="link">Leadership speakers announced.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>

        <!-- PRIMARY BANNERS -->
        <section class="home-banner-primary">
            <div class="container">
                <div class="row">

                    <!-- SESSIONS -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/illustrations/calendar.png" class="banner-img img-responsive" alt=" ">
                            </a>
                            <div class="content-primary-text">
                                <h3 class="headline">Find a session for your child</h3>
                                <div class="row">
                                    <div class="description col-md-offset-1 col-md-10">
                                        <p><?=$lorem?></p>
                                    </div>
                                </div>
                                <a href="#" class="link">
                                    View Schedule
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CAMP LIFE -->
                    <div class="col-xs-12 col-sm-6"> 
                        <div class="content">
                            <a href="#" class="link">
                                <img src="images/illustrations/campfire.png" class="banner-img img-responsive" alt=" ">
                            </a>
                            <div class="content-primary-text">
                                <h3 class="headline">Every camp day is a good day</h3>
                                <div class="row">
                                    <div class="description col-md-offset-1 col-md-10">
                                        <p><?=$lorem?></p>
                                    </div>
                                </div>
                                <a href="#" class="link">
                                    View Camp Life
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>

        <!-- SECONDARY BANNERS -->  
        <section class="home-banner-secondary">

            <!-- ACTIVITIES -->
            <div class="banner-item banner-activities">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/home/activities.jpg" class="banner-img img-responsive" alt=" ">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Activities</h3>
                                 <div class="description">
                                    <p><?=$loremSm?></p>
                                </div>
                                <a href="#" class="link">
                                    View Activities
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>

            <!-- CLEO -->
            <div class="banner-item banner-cleo">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-md-8 pull-right">
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/home/cleo.jpg" class="banner-img img-responsive" alt=" ">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Cleo the Moose</h3>
                                <div class="description">
                                    <p><?=$loremSm?></p>
                                </div>
                                <a href="#" class="link">
                                    Learn more about Cleo
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>

            <!-- ALUMNI -->
            <div class="banner-item banner-alumni">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/home/alumni.jpg" class="banner-img img-responsive" alt=" ">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Alumni</h3>
                                <div class="description">
                                    <p><?=$loremSm?></p>
                                </div>
                                <a href="#" class="link">
                                    View alumni information
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </section>

        <!-- MAP OF CAMP -->
        <section class="home-banner-map-container">
            <div class="banner-item home-banner-map">
                <div class="container">
                    <div class="row">
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
            </div>
        </section>

        <!-- RENT CAMP -->
        <section class="home-banner-tertiary">
            <div class="container">
                <div class="row banner-rent-the-camp">
                    <div class="col-xs-12">
                        <div class="content">
                            <h3 class="h1">
                                <a href="#" class="">
                                    Rent the camp
                                </a>
                            </h3>
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div class="content content-primary-text">
                                        <div class="description">
                                            <p><?=$lorem?> <a href="#" class="link">Learn more</a></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="content content-primary-img">
                                <a href="#" class="link">
                                    <img src="images/home/kayaks.jpg" class="banner-img img-responsive" alt=" ">
                                </a>
                            </div>
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
    
