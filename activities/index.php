<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_activities;
    $page = $url_activities ;
    $section = 'camp-life';
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
                            <img src="/images/heros/activities.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">Camp Life</p>
                                <h1 class="page-name">Activities</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>We have on-going activities planned for each minute of a camper's day. </p>
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
                            <h3 class="heading">Large Group Activities</h3>
                            <div>
                                <p>
                                    This are activities that include the entire camp, such as evening rec (capture the flag, beach parties, folk dancing), campfire, meditation cerimony, trail day, etc.
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Classes</h3>
                            <div>
                                <p>
                                    These are the traditional summer camp activities: archery, swimming, arts and crafts etc. With their cabin group, campers attend classes each day, and usually rotate through all our classes by the end of the week. <a href="/<?=$url_classes?>/">See full class list.</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Free Time</h3>
                            <div>
                                <p>
                                    Campers choose from a variety traditional and unique of activities offered by the staff, such as like four-square, roof ball, frisbee golf, soccer, basketball, telling stories, kickball, making up skits, flying kites, scavenger hunts and feeding the animals in the nature hut etc. 
                                </p>
                                <p>
                                    When the store is open, campers to buy treats and suiviniers like: snacks, drinks, t-shirts, hats, cameras, batteries etc. This is a nice to to relax and hang out.
                                </p>
                                <p>
                                   There is always time in between activities in the schedule that campers can socialize and relax. Sometimes these few minutes are when new friends are made and when the most memorable moments occur.
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Traditions</h3>
                            <p>
                                Camp is full of traditions that brings campers back every summer. Here are a few:
                            </p>
                            <ul class="list-styled list-no-indent  ">
                                <li class="item">
                                    <strong>Special Day.</strong> A day-long participitory skit where the campers have to help the visting heros save camp from villians, who often want to turn camp into a parking lot. These are epic. Alumni remember Special Days for decades. 
                                </li>
                                <li class="item">
                                    <strong>Camp Songs.</strong> There a songs for every situation! 
                                </li>
                                <li class="item">
                                    <strong>Kissing the Moose.</strong> Don't get caught eating with your elbows on the table!
                                </li>
                                <li class="item">
                                     <strong>Honor Cabin.</strong> Campers earn tokens, doing all manner of silly things, to earn tokens for their cabin.
                                </li>
                                <li class="item">
                                    <strong>Jumping in the Lake.</strong> Receive three pieces of mail and you have (get) to jump in the lake!
                                </li>
                            </ul>

                      
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">More</h3>
                            <div>
                                <p>
                                    See our <a href="/<?=$url_typical_day?>/">Typical Day</a> page to learn about the rest.
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->


                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 