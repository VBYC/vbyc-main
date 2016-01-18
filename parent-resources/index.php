<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_parent_resources;
    $page = $url_parent_resources;
    $section = 'sessions';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    // $javascript_insert = '';
?>
<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 
    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main>    
        <section class="hero">
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/heroes/preparing-for-camp.jpg" alt=" ">
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
                            <h3 class="heading">Things to know</h3>
                            <ul class="">
                               <!--  <li>(TODO:) Food: Descrioption of how we handle dietary (gluten, allergies) needs, photos, sample menu</li>
                                <li>(TODO:) Alergy handling policy, asthma handling policy</li>
                                <li>(TODO:) List of ways to prepare and help child cope (Wite letters, send photo, stuffed animal, encouraging talks, tell them get into activites)</li> -->
                                <li>Learn more on our <a href="/<?=$url_faqs?>/">FAQ page</a>.</li>
                             
                                
                                

                            </ul>
                        </div>
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                           

                            <h3 class="heading">Pre-camp</h3>
                            <ol class="" >
                                <li><a href="<?=$url_register?>">Register</a></li>
                                <li>(TODO: Mention any forms?)</li>
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


                            <h3 class="heading">Day of camp</h3>
                            <ol class="" >
                                <li>Get here! <a href="<?=$url_google_map?>" target="_blank">12370 4th St., Bloomingdale, MI 49026</a>.</li>
                                <li>Arrive Sunday at 3:00 PM (unless otherwise stated).</li>
                                <li>When you park, a staff member give your cabin number.</li>
                                <li>Drop off your stuff in your cabin and meet your counselor.</li>
                                <li>Come to the lodge to register.</li>
                                <li>Swim test.</li>
                            </ol>

                            <h3 class="heading">When camp is over</h3>
                            <ol class="" >
                                <li>Come on back! <a href="<?=$url_google_map?>" target="_blank">12370 4th St., Bloomingdale, MI 49026</a>.</li>
                                <li>Arrive Saturday at 10:00 AM (unless otherwise stated).</li>
                                <li>Join the Final Flag cerimony.</li>
                                <li>Come to the lodge to de-register.</li>
                                <li>Get your stuff from your cabin.</li>
                            </ol>
                        </div>
                    </div><!-- /.row -->


                   

                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 