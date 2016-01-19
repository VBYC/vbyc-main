<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = 'Van Buren Youth Camp - Home';
    $page = 'home';
    $template = 'home';
    $body_attributes = 'id="page-'.$page.'" class="template-'.$template.'" ';
    $description = 'FPO description';
    $javascript_insert = 'vbyc.util.init({highResPath : "/images/heroes/home.jpg"});';
 
 ?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  


    <main id="post-hero" class="text-center"> 
        <!-- NEWS FEED -->
        <section class="news-feed">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content clearfix">
                        <div class="content-inner">
                            <h5 class="headline"><? /* ?><a href="#" class="link-reverse " title="Read all news stories"><? */ ?>News<? /* ?></a><? */ ?> ///</h5>
                            <ul class="news-feed-list list-unstyled">
                                <li class="item"><a href="/<?=$url_schedule?>/" class="link">2016 schedule is out!</a></li>
                                <li class="item"><a href="/news-amazon/" class="link">Donate to VBYC through your Amazon purchases</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </section>

        <!-- PRIMARY BANNERS -->
        <section class="home-banner-primary">
            <div class="container">
                <div class="row">

                    <!-- SESSIONS -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="content">
                            <a href="/<?=$url_schedule?>/" class="link">
<!--                                 <img src="/images/illustrations/calendar.svg" class="banner-img img-responsive" alt=" ">
 -->                                <img src="/images/illustrations/calendar.png" class="banner-img img-responsive" alt="Calandar illustration">
                            </a>
                            <div class="content-primary-text">
                                <h3 class="headline">Find a session for your child</h3>
                                <div class="row">
                                    <div class="description col-md-offset-1 col-md-10">
                                        <p>Choose the session that suits your family. Whether your camper is six years old and hesitant to leave the nest, or fifteen and ready to fly the coop, we have a camp experience thoughtfully designed to help them take flight.</p>
                                    </div>
                                </div>
                                <a href="/<?=$url_schedule?>/" class="link">
                                    View Schedule
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CAMP LIFE -->
                    <div class="col-xs-12 col-sm-6"> 
                        <div class="content">
                            <a href="/<?=$url_typical_day?>/" class="link">
                                <img src="/images/illustrations/campfire.png" class="banner-img img-responsive" alt="Campfire illustration">
                            </a>
                            <div class="content-primary-text">
                                <h3 class="headline">Every camp day is a good day</h3>
                                <div class="row">
                                    <div class="description col-md-offset-1 col-md-10">
                                        <p>From Polar Bear swims at sun-up to Taps after a campfire sing, a day spent at camp is like a day spent nowhere else. See a little bit of what that day entails.</p>
                                    </div>
                                </div>
                                <a href="/<?=$url_typical_day?>/" class="link">
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
            <div class="banner-item banner-activities hero-background-img">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <div class="content content-primary-img">
                                <a href="/<?=$url_activities?>/" class="link">
                                    <img src="<?=$src_defer?>" data-src="/images/home/activities.jpg" class="banner-img img-responsive" alt="Campers at a table drawing">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Activities</h3>
                                 <div class="description">
                                    <p>Too many to name and more than one camper can complete in a week, from woodland survival to zany antics: we have activities.</p>
                                </div>
                                <a href="/<?=$url_activities?>/" class="link">
                                    View Activities
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>

            <!-- CLEO -->
            <div class="banner-item banner-cleo hero-background-img">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-md-8 pull-right">
                            <div class="content content-primary-img">
                                <a href="/<?=$url_facilities?>/" class="link">
                                    <img src="<?=$src_defer?>" data-src="/images/home/cleo.jpg" class="banner-img img-responsive" alt="Cleo the moose on the wall in the lodge">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Cleo the Moose</h3>
                                <div class="description">
                                    <p>Keep your elbows on the table at lunch and you have to (get to?) kiss a moose! What other treasures (and comforts and challenges) lie within our camp buildings and grounds?</p>
                                </div>
                                <a href="/<?=$url_facilities?>/" class="link">
                                    Learn more about our facilities
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
                                <a href="/<?=$url_alumni?>/" class="link">
                                    <img src="<?=$src_defer?>" data-src="/images/home/alumni.jpg" class="banner-img img-responsive" alt="Alumni holding hands">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="content content-primary-text">
                                <h3 class="headline">Alumni</h3>
                                <div class="description">
                                    <p>Once you're camp family, you're always camp family. </p>
                                </div>
                                <a href="/<?=$url_alumni?>/" class="link">
                                    Connect, and reconnect, here.
                                </a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </section>

        <!-- MAP OF CAMP -->
        <section class="home-banner-map-container">
            <div class="banner-item home-banner-map hero-background-img">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="content">
                                <a href="/<?=$url_explore_camp?>/" class="link text-center">
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
                                <a href="/<?=$url_rentals?>/" class="">
                                    Rent the camp
                                </a>
                            </h3>
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div class="content content-primary-text">
                                        <div class="description">
                                            <p>Van Buren Youth Camp can be Van Buren: Your Camp. For weddings, family reunions, retreats, meetings, or whenever you need an idyllic escape, camp awaits.

 <a href="/<?=$url_rentals?>/" class="link">Learn more</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content content-primary-img">
                                <a href="/<?=$url_rentals?>/" class="link">
                                    <img src="<?=$src_defer?>" data-src="/images/home/kayaks.jpg" class="banner-img img-responsive" alt="Kayaks at the shore of Great Bear Lake">
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>
        

    </main>

<? include("".$_SERVER["DOCUMENT_ROOT"]."/includes/footer.php"); ?>
