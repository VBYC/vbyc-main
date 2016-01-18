<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_classes;
    $page = $url_classes;
    $section = 'camp-life';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    $javascript_insert = 'vbyc.util.init({hasSidenav : true});';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

    <main class="main-content/-container" data-spy="scroll" data-target="#sidenav">
        <section class="hero">
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/heroes/archery-bandana.jpg" alt="Counselor shooting a bow and arrow">
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
                                <h1 class="page-name">Classes</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>Classes are the heart of our program. Campers and counselors attend two classes each day (second class is in the afternoon), taught by VBYC summer staff. All campers rotate through all classes by week's end.</p>
                                </div> 
                            </div> 
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>

        
        <section class="main-content">


            

            <div class="container scroll-spy-container"> 
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/nav-side-classes.php"); ?> 
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li id="archery" class="item">                                    
                                    <h3 class="heading archery">Archery</h3>
                                    <div class="description">
                                        <p>Our archery range is on the "Upper 20," separate from main camp. Campers develop accuracy, learn terminology for the parts of the bow and arrow, and learn proper safety in shooting recurve bows at targets against a hay wall. This is always a favorite class. Campers hitting bulls-eyes or other noteworthy achievements may become members of the famed VBYC Archery Club, one of our esteemed camp traditions.
                                        <br>
                                        <em>Instructor certification: National Archery Association, Basic Instructor</em></p>
                                    </div>
                                    <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/archery.jpg" alt="Staff member helping a camper load an arrow" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/archery-1.jpg" alt="Camper proud of her target" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/archery-2.jpg" alt="Campers at the archery range" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </li>
                                <li id="arts-and-crafts" class="item">
                                    <h3 class="heading arts-and-crafts">Arts &amp; Crafts</h3>
                                    <div class="description">
                                        <p>We use this time to let our imaginations fly, with simple, household, easy-to-find, or natural materials. The hut sits atop a hill and gets a great breeze from the lake. It's so pleasant to sit and chat making new friends while your creativity whirs along ahead of you. Though specific projects are assigned, we always allow room for whatever occur to us while we’re in the flow.</p>
                                    </div>
                                     <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/arts-and-crafts.jpg" alt="Camper showing a counselor his drawing" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/arts-and-crafts-1.jpg" alt="Camper showing he drawing" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/arts-and-crafts-2.jpg" alt="Campers drawing at a table" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>                           
                                </li>
                                <li id="canoeing-and-kayaking" class="item">
                                    <h3 class="heading canoeing-and-kayaking">Canoeing &amp; Kayaking</h3>
                                    <div class="description">
                                        <p>Campers learn basic canoeing strokes, steering the canoe working with their partner, keeping the canoe level and stable, all with an emphasis on safety. After 15 – 20 minutes of instruction, campers hit the lake canoeing as a group, boating near our cat tails, to the sandbar, to the creek, or out into the middle of the lake, a gorgeous camp favorite.</p>
                                        <p>Campers must be at least a "B" swimmer to participate, and may choose another class that period if they are not. Canoes are always in visual contact with the waterfront director, who is on shore and can be signaled of emergencies through whistles. One rescue motorboat and one rescue rowboat is always on hand.
                                        <br>
                                       <em>Instructor certification: Lifeguard and Boater Safety Certified</em></p>
                                    </div>
                                     <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/canoeing-and-kayaking.jpg" alt="Campers in life jackets with paddles" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/canoeing-and-kayaking-1.jpg" alt="Counselor and campers canoeing" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/canoeing-and-kayaking-2.jpg" alt="Several kayaks on the lake" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-secondary hidden-xs">
                                            <div class="col-xs-12 col-sm-11 col-md-12">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/landscape-lg/canoeing-and-kayaking.jpg" alt="Campers about to put their canoes in the water" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </figure>                         
                                </li>
                                <li id="low-ropes" class="item">
                                    <h3 class="heading low-ropes">Low Ropes</h3>
                                    <div class="description">
                                        <p>a.k.a. Initiatives or Team Building</p>
                                        <p>Group problem solving through cooperation. This class can be very challenging, the physical part being the least of it. The challenges are intended to be unsolvable by individuals and must have group cooperation to succeed. This can really bring a cabin together and allow campers to surprise themselves and achieve things they did not know they could.</p>
                                        <p>Safety is the first priority here. Campers learn a series of "calls" and procedures. Activities involve blocks of wood, imaginary rivers to cross, a 10' climbing wall, a grid of climbing rope, suspended cable walk (4' high), and so much more.</p>
                                        <p><em>Instructor training: Trained by certified instructor</em></p>
                                    </div>
                                </li>
                                <li id="nature" class="item">
                                    <h3 class="heading nature">Nature</h3>  
                                    <div class="description">
                                        <p>Here we find fun ways of learning about nature's role in our lives, and the class might take place anywhere on camp’s property, so we can get a closer look at what’s around us and explore our relationship with all of it.</p>
                                    </div>
                                    <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/nature.jpg" alt="Camper looking in terrarium" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/nature-1.jpg" alt="Snake in a terrarium" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/nature-2.jpg" alt="A toad" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>                         
                                </li>
                                <li id="rifelry" class="item">
                                    <h3 class="heading rifelry">Rifelry</h3>
                                    <div class="description">
                                        <p>This class focuses on gun safety. Our rifle range is located on the "Upper 20," separate from main camp. Campers shoot five-at-a-time from a covered pavilion with a wooden floor, and use .22 caliber rifles to shoot at paper targets which hang in front of a sand mound.</p>
                                        <p>Some campers feel more comfortable not shooting, which is fine, although with most campers this is a favorite class. Many camps no longer teach this course. We choose to keep it because it gives us the opportunity to promote the seriousness of the safe use of guns.
                                        </p>
                                        <p><em>Instructor training: Trained by certified instructor</em></p>
                                    </div>
                                    <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/rifelry.jpg" alt="Camper with safety equipment shooting a rifle" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/rifelry-1.jpg" alt="A rifle" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/rifelry-2.jpg" alt="Staff member giving instruction on shooting" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>                         
                                </li>
                                <li id="song-and-dance" class="item">
                                    <h3 class="heading song-and-dance">Song &amp; Dance</h3>
                                    <div class="description">
                                        <p>We sing a lot at camp, and often we sing many songs that have been sung at summer camps for generations. This class can get new campers up-to-speed, and veteran campers can learn new songs out of our song book. Folk dancing is a long-time tradition at VBYC, campers have a chance to explore some of these group dances.</p>
                                    </div>
                                    <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/song-and-dance.jpg" alt="Counselor and campers dancing" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/song-and-dance-1.jpg" alt="Counselor and campers dancing" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/song-and-dance-2.jpg" alt="Counselor and campers dancing" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-secondary hidden-xs">
                                            <div class="col-xs-12 col-sm-11 col-md-12">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/landscape-lg/song-and-dance.jpg" alt="Staff and campers dancing teh Amos Moses" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </figure>                        
                                </li>
                                <li id="sports" class="item">
                                    <h3 class="heading sports">Sports</h3>
                                    <div class="description">
                                        <p>We play both competitive and non-competitive games, with an emphasis on cooperation and fair play. Though we sometimes play traditional sports, campers have the most fun with games we've made up here at camp, or games campers commonly get to play outside of camp, such as roof ball or frisbee golf. This class can take place all over camp depending on the activity.</p>
                                    </div>
                                </li>
                                <li id="swimming" class="item">
                                    <h3 class="heading swimming">Swimming</h3>
                                    <div class="description">
                                        <p>On registration day, all campers take a swim test, and campers are assigned to a swimming area with appropriate depth for their ability. These are called A, B and C water</p>
                                        <p>During class time everyone learns basic strokes and swim techniques from the lifeguards and waterfront director. Campers who improve during the week may be promoted to more advanced swim levels. Class is filled with instructions but there is time for free swim daily during choice period.
                                        </p>
                                        <p><em>Instructor certifications: WSI (Water Safety Instructor) Certification</em></p>
                                    </div>
                                    <figure class="figure-images figure-layout-1">
                                        <div class="row row-main">
                                            <div class="col-xs-12 col-sm-11 col-md-7">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/squarish/swimming.jpg" alt="Campers swimming" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-11 col-md-5 multi-image-column">
                                                <div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/swimming-1.jpg" alt="Campers on the dock" class="img-item img-responsive img-fluid">
                                                    </div>
                                                    <div class="image-container">
                                                        <img src="/images/pages/classes/landscape/swimming-2.jpg" alt="Campers learning the waterfront rules" class="img-item img-responsive img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-secondary hidden-xs">
                                            <div class="col-xs-12 col-sm-11 col-md-12">
                                                <div class="image-container">
                                                    <img src="/images/pages/classes/landscape-lg/swimming.jpg" alt="Campers swimming" class="img-item img-responsive img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </figure>                         
                                </li>
                            </ul>
                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 