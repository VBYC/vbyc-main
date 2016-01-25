<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_about;
    $page = $url_about;
    $section = 'about';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = $description_about;
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
                            <img src="/images/heroes/about.jpg" alt="Campers at campfire">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
<!--                                 <p class="h4 section-name text-uppercase">About Us</p>
 -->                                <h1 class="page-name">About Us</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>&ldquo;Van Buren Youth Camp is dedicated to serving youth providing opportunities for mental, physical and spiritual growth.&rdquo; - Our mission statement since 1950.
</p>
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
                        <figure class="figure-images figure-zig-zag">
                            <!-- 1 column -->
                            <div class="row figure-row">
                                <div class="col-sm-2 img-container">
                                    <img src="/images/pages/about/figure-kids-on-bleachers.jpg" class="img-responsive img-item" alt="Campers sitting on bleachers" >
                                </div> 
                                <div class="col-sm-4 img-container">
                                    <img src="/images/pages/about/figure-girls-cabin-row.jpg" class="img-responsive img-item" alt="Girls arm in arm" >
                                </div> 
                                <div class="col-sm-4 img-container">
                                    <img src="/images/pages/about/figure-hugging-cleo.jpg" class="img-responsive img-item" alt="Counselor hugging Cleo the Moose" >
                                </div> 
                                <div class="col-sm-2 img-container">
                                    <img src="/images/pages/about/figure-dock.jpg" class="img-responsive img-item" alt="Campers on the dock" >
                                </div>         
                            </div><!-- /.row -->
                        </figure>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Being ourselves, together.</h3>
                            <div>
                                <p>Since 1950, Van Buren Youth Camp has encouraged personal growth, self-confidence, positive relationships, and individual and group responsibility (do we want something here that says, "in more than XXXX young people"?). At VBYC we foster all of the qualities required for leadership, fulfillment, and fellowship.</p>

								<p>Camp exists outside of social divisions and cultural expectations. Removed from our everyday lives, we are free to transcend cliques and create our own culture, one of games, skits, projects, songs, and kissing Cleo the Moose on the nose. Friendships and memories made at camp last forever.</p>

								<p>A residential camp in the woods on the shores of Great Bear Lake, and nestled in western Michigan's fruit belt, VBYC is home to rolling hills, endless trees, rustic cabins, and varied recreation and communal areas. Leadership is developed at every level, because we all have something to learn from one another. Staff mentor volunteers who, in turn, mentor campers, who take on responsibility for many daily tasks.</p>

								<p>We welcome all campers, ages six to eighteen, without regard to gender, race, national origin, sexual orientation, gender identity, religious, economic, or cultural background. We serve campers with physical challenges, with the exception of those who are non-ambulatory, as our facilities cannot accommodate their needs.</p>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <hr class="divider-styled">

                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1">
								<div class="content-callout">
									<p>VBYC an <a href="http://www.acacamps.org/" target="_blank">American Camp Association</a> accredited camp. The main purpose of the ACA accreditation program is to educate camp owners and directors in the administration of key aspects of camp operation, particularly those related to program quality and the health and safety of campers and staff. These standards establish guidelines for needed policies, procedures, and practices.</p>

									<p>We are also accredited by the <a href="http://www.michigan.gov/mdhhs" target="_blank">Michigan Department of Human Services</a>, and are affiliated with the <a href="https://www.unitedway.org/" target="_blank">United Way</a>. </p>
								</div>
                            </div>
                        </div>
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-xs-12  text-center">
                                <div class="about-logos v-offset-8" > 
                                    <p>
                                        <a href="http://www.acacamps.org/" target="_blank"><img src="/images/logos/aca-logo.svg" alt="American Camp Association logo" class="logo"></a>
                                        <a href="http://www.michigan.gov/mdhhs/" target="_blank"><img src="/images/logos/mi-dept-health-human-services.png" alt="Michigan Department of Human Services logo" class="logo"></a>
                                        <a href="https://www.unitedway.org/" target="_blank"><img src="/images/logos/united-way-logo.svg" alt="United Way" class="logo"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </article> 
            </div><!-- /.container -->
        </section>
    </main> 

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 