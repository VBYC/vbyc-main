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

    
    <main class="text-center"> 
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
                                    <li class="item"><a href="#" class="link">Midnight undraise, May 21st.</a></li>
                                    <li class="item"><a href="#" class="link">Leadership speakers announced.</a></li>
                                </ul>
                            </div>
                            <script>
                                function tick(){
                                    var target = $('.news-feed-list');
                                    $('li:first',target).slideUp( function () { 
                                        $(this).appendTo($(target)).slideDown(); 
                                    });
                                }
                                setInterval(function(){ tick () }, 3000);
                            </script>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>

        <section class="home-banner-primary">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5">
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
                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5"> 
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
            <div class="container-fluid">
                <div class="banner-item banner-activities">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <div class="content content-primary-img">
                                    <a href="#" class="link">
                                        <img src="images/home/activities.jpg" class="banner img-responsive" alt=" ">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 pull-rightX">
                                <div class="content content-primary-text">
                                    <h3 class="headline">Activities</h3>
                                    <p><?=$lorem?></p>
                                    <a href="#" class="link">
                                        View Activities
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>


                <div class="banner-item banner-cleo">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-8 pull-right">
                                <div class="content content-primary-img">
                                    <a href="#" class="link">
                                        <img src="images/home/cleo.jpg" class="banner img-responsive" alt=" ">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 ">
                                <div class="content content-primary-text">
                                    <h3 class="headline">Cleo the Moose</h3>
                                    <p><?=$lorem?></p>
                                    <a href="#" class="link">
                                        Learn more about Cleo
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>


                <div class="banner-item banner-alumni">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <div class="content content-primary-img">
                                    <a href="#" class="link">
                                        <img src="images/home/alumni.jpg" class="banner img-responsive" alt=" ">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 pull-rightX">
                                <div class="content content-primary-text">
                                    <h3 class="headline">Alumni</h3>
                                    <p><?=$lorem?></p>
                                    <a href="#" class="link">
                                        View alumni information
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>

              

            
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
                            <p class="col-xs-offset-2 col-xs-8"><?=$lorem?> <a href="#">Learn more</a></p>
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
    
