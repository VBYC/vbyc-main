<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_parent_resources;
    $page = $url_parent_resources;
    $section = 'sessions';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = $description_parent_resources;
    // $javascript_insert = '';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main>    
        <section class="hero">
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/heroes/parent-resources.jpg" alt="Camp's driveway">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">Sessions</p>
                                <h1 class="page-name">Parent Resources</h1>
                                <div class="description">
                                    <p>
                                        We are sensitive to the fact that each camper has different needs. Please contact us regarding allergies and dietary requirements of your camper prior to camp. Given enough time to purchase items, we can provide alternate meal options. While we recognize that each camper has differing levels of comfort with being away from home, we discourage calls and visits from parents, as they can often increase the intensity of homesickness. Mail, however, is always encouraged and welcomed!
                                    </p>
                                    <a href="/<?=$url_faqs?>/" class="hero-cta">Learn more on our FAQ page</a>
                                </div>

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
                        <div class="col-xs-12 col-sm-4">
                            <h3 class="heading">Pre-camp</h3>
                            <ol class="list-no-indent list-steps" >
                                <li><a href="<?=$url_register?>">Register</a></li>
                                <li>Review our <a href="/<?=$url_what_to_bring?>/">What to Bring</a> list.</li>
                                <li>For first timers, review our <a href="/<?=$url_typical_day?>/">Typical
                                    day</a> page.</li>
                                <li>Review these homesickness prevention articles:
                                  <ul>
                                    <li><a href="http://www.campparents.org/homesickness.php" target="_blank">Homesickness &mdash; Expert
                                    Advice for Parents</a></li>
                                    <li><a href="http://www.campparents.org/070102.php" target="_blank">New
                                        Thinking Needed on Helping Kids...</a></li>
                                  </ul>
                                </li>
                            </ol>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <h3 class="heading">Day of camp</h3>
                            <ol class="list-no-indent list-steps" >
                                <li>Get here! <a href="<?=$url_google_map?>" target="_blank">12370 4th St., Bloomingdale, MI 49026</a>.</li>
                                <li>Arrive Sunday at 3:00 PM (unless otherwise stated).</li>
                                <li>When you park, a staff member will give you your cabin number.</li>
                                <li>Drop off your stuff in your cabin and meet your counselor.</li>
                                <li>Come to the lodge to register.</li>
                                <li>Swim test.</li>
                            </ol>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <h3 class="heading">When camp is over</h3>
                            <ol class="list-no-indent list-steps list-double-space" >
                                <li>Come on back! <a href="<?=$url_google_map?>" target="_blank">12370 4th St., Bloomingdale, MI 49026</a>.</li>
                                <li>Arrive Saturday at 10:00 AM (unless otherwise stated).</li>
                                <li>Join the Final Flag ceremony.</li>
                                <li>Come to the lodge to de-register.</li>
                                <li>Get your stuff from your cabin.</li>
                                <li>Go home and keep in touch via our <a href="/<?=$url_alumni?>/">alumni page</a> and <a href="<?=$url_facebook?>">Facebook page</a> so you’re ready for next year!</li>
                            </ol>
                        </div>
                    </div><!-- /.row -->


                   

                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 