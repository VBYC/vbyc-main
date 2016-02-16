<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_facilities;
    $page = $url_facilities;
    $section = 'camp-life';
    $template = 'grid';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav modal-no-overflow"';
    $grid_description = $grid_description_facilities;
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
                            <img src="<?=$src_defer?>" data-src="/images/heroes/facilities.jpg" alt="<?=$grid_title?> ">
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
                                <h1 class="page-name">Facilities</h1>
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
                            <? $grid_title = "Washburn Lodge"; ?>
                            <? $grid_description = "Dining together, all-camp activities, visiting the library, or lounging in the couch area at free time makes Washburn Lodge the heart of Camp. It’s also home to more than 65 years of souvenirs, photos, and Camp’s mascot, Cleo the Moose, whom you'll have to kiss if you get caught with your elbows on the table. The lodge is both heated and air conditioned.  It has a front deck facing Great Bear Lake for people to enjoy cool breezes during activities or hanging out with friends." ?>
                            <a href="/images/pages/facilities/lg/lodge.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">
                                <img src="/images/pages/facilities/sm/lodge.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p class="description"><strong><?=$grid_title?></strong> &mdash; <?=$grid_description ?></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Waterfront"; ?>
                            <? $grid_description = "Our private beach, dock and swim area is on the shores of Great Bear Lake, a small private lake. The swim area is divided into three sections to serve a range of swimming ability, and is guarded by certified lifeguards and our WSI-certified waterfront director. At their disposal are all necessary rescue equipment including a motorized rescue boat and rowboat."; ?>
                            <a href="/images/pages/facilities/lg/waterfront.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="/images/pages/facilities/sm/waterfront.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Cabins"; ?>
                            <? $grid_description = "Our 15 cabins line up on &ldquo;cabin row&rdquo;,  centrally located and sleep eight campers and one counselor. Cabins have electricity for lights but no outlets."; ?>
                            <a href="/images/pages/facilities/lg/cabins.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="/images/pages/facilities/sm/cabins.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Stage"; ?>
                            <? $grid_description = "Overlooking The Bowl, our stage is used for performances during Evening Rec, Song &amp; Dance class, and for many activities throughout the camp session."; ?>
                            <a href="/images/pages/facilities/lg/stage.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/stage.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Campfire Bowl"; ?>
                            <? $grid_description = "A wooded path from the lodge leads to the campfire bowl, where campfire has been held since  Camp&rsquo;s founding in 1950. The fire area illuminates beautifully at night, and is surrounded by a log circle that seats the entire Camp. Campfire is the last activity of every day, when cabin groups sit together and watch groups perform skits, tell stories and sing songs."; ?>
                            <a href="/images/pages/facilities/lg/campfire.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/campfire.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Covered Recreation Area"; ?>
                            <? $grid_description = "Next to the lodge, our &ldquo;rec area&rdquo;  is used for classes, all-camp activities, and small group activities such as basketball, floor hockey, folk dancing, Four-square or chalk drawing."; ?>
                            <a href="/images/pages/facilities/lg/rec-area.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/rec-area.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Sports Field &ldquo;The Bowl&rdquo;"; ?>
                            <? $grid_description = "Cabin row wraps around this greenfield area used for soccer games, kickball, softball, and many all-camp activities. Also on our &ldquo;Upper 20&rdquo; (20 acres of land up the road from the main camp) there is a full soccer/football field, perfect for band camps."; ?>
                            <a href="/images/pages/facilities/lg/bowl.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/bowl.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Camp Store"; ?>
                            <? $grid_description = "Our camp store is open daily. Campers make purchases using their camper account that is set up by their parents.  Parents and visitors have and the opportunity to visit it the store during registration and pick-up (deregistration)."; ?>
                            <a href="/images/pages/facilities/lg/store.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/store.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Bath House"; ?>
                            <? $grid_description = "The bath house  at VBYC has private showers, toilets, and it is the only place  with electrical outlets for personal use items such as blow dryers."; ?>
                            <a href="/images/pages/facilities/lg/bathhouse.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/bathhouse.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Archery Range"; ?>
                            <? $grid_description = "This range includes an arrow stop, bag targets, clearly designated shooting lines, and a covered shooting platform. Archery class is taught by a certified instructor who uses clear safety signals and range commands to control the course activity.
*Rifle and Archery Ranges are located across the road from Main Camp for safety of participants and the general Camp population.  <a href='/<?=$url_explore_camp;?>/'>See illustrated Map of Camp</a>."; ?>
                            <a href="/images/pages/facilities/lg/archery-range.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/archery-range.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Rifle Range"; ?>
                            <? $grid_description = "The range is clearly delineated and known to the entire Camp population. It has an earth-berm backstop, clear rear and side buffers, and a clearly designated covered shooting platform. Riflery class is taught by a certified instructor who uses clear safety signals and range commands to control the course activity."; ?>
                            <a href="/images/pages/facilities/lg/rifle-range.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/rifle-range.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Volleyball Pit"; ?>
                            <? $grid_description = "Our volleyball pit is located by the waterfront, always ready for a match."; ?>
                            <a href="/images/pages/facilities/lg/volleyball-pit.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/volleyball-pit.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Nature Hut"; ?>
                            <? $grid_description = "Camp wouldn’t be Camp without a Nature Hut that has  lots of insects and animals for campers to observe closely (in aquariums and cages, of course). There is space for campers to feed the animals, usually critters found around the area, such as turtles, frogs, snakes, rabbits and fish. This happens under the supervision of a staff member. Campers sometimes catch turtles or frogs and bring them to the Nature Hut, All animals are set free at the end of the summer camping season."; ?>
                            <a href="/images/pages/facilities/lg/nature-hut.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/nature-hut.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Thought"; ?>
                            <? $grid_description = "This is a serene spot among cattails and reeds right next to the lake with enough logs to seat the whole camp.  We hold a Thought ceremony daily after  dinner. It is a reflective presentation by cabin groups, and it’s also available for campers to come to during free time to relax."; ?>
                            <a href="/images/pages/facilities/lg/meditation-area.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/meditation-area.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?> " >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Arts and Crafts Hut"; ?>
                            <? $grid_description = "The Arts &amp; Crafts Hut is set on a hill overlooking the entire Main Campgrounds. It’s an older building with much character. In the 1970s, campers began decorating the walls with their names adding to the building’s character. Seeing more than a thousand names covering the walls provide creative inspiration to campers.  The hut’s numerous art supplies and scenic beauty give added inspiration for campers to create many awesome art or craft projects."; ?>
                            <a href="/images/pages/facilities/lg/craft-hut.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="
">    
                               
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/craft-hut.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?> " >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Flag Area"; ?>
                            <? $grid_description = "Between the lodge and the waterfront is our flag area. Campers raise and lower the flag at the beginning and end of each day during a special ceremony."; ?>
                            <a href="/images/pages/facilities/lg/flag-area.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/flag-area.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?> " >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Observation Deck"; ?>
                            <? $grid_description = "Just past the Nature Hut, a short planked trail leads through reeds and cattails to our observation deck, located on the shoreline of Great Bear Lake. Campers may sit and observe  sights, sounds and critters who  live in and around the lake. The deck is open for hanging out and even fishing with a staff member during free time and choice periods."; ?>
                            <a href="/images/pages/facilities/lg/observation-deck.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/observation-deck.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Infirmary"; ?>
                            <? $grid_description = "The on-site health officer's station is on the end of cabin row near the waterfront. There are 3 beds in the Infirmary for ill campers. All medication is kept here and campers receive necessary medicine from the health officer. The health officer is available 24 hours a day."; ?>
                            <a href="/images/pages/facilities/lg/infirmary.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="Infirmary" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/infirmary.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                    </div><!-- /.row -->

                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Soccer / Football Field "; ?>
                            <? $grid_description = "The Upper 20 is a 20 acre land plot just down the road from the main camp. It has an enclosed pavilion with bunks for sleeping and a soccer/football field perfect for large group activities, sports and band camps. This is also the location of our Nature Trail. Pioneer campers make their campsite here."; ?>
                            <a href="/images/pages/facilities/lg/upper-20.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/upper-20.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Emergency Vehicles"; ?>
                            <? $grid_description = "VBYC always has two emergency vehicles available, as well as two rescue boats to transport campers and staff."; ?>
                            <a href="/images/pages/facilities/lg/emergency-vehicles.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                data-footer="<?=$grid_description?>">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/emergency-vehicles.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <? $grid_title = "Camp Museum"; ?>
                            <? $grid_description = ""; ?>
                            <a href="/images/pages/facilities/lg/museum.jpg" class="gallery" data-toggle="lightbox" data-type="image" data-gallery="multiimages" 
                                data-title="" 
                                XXXdata-footer="Some more details about this image.">    
                                <img src="<?=$src_defer?>" data-src="/images/pages/facilities/sm/museum.jpg" class="img-responsive img-fluid grid-item" alt="<?=$grid_title?>" >
                                <h3 class="gallery-label"><?=$grid_title?></h3>
                            </a>
                            <? /*
                            <div class="visible-xs-block details">
                                <p><strong><?=$grid_title?></strong> &mdash; <?=$grid_description?></p>
                            </div>
                            */ ?>
                        </div>
                    </div><!-- /.row -->

                    
                </article>

           

                




 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 