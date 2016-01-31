<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_schedule;
    $page = $url_schedule;
    $section = 'sessions';
    $template = 'basic-with-side-nav';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = $description_schedule;
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
                            <img src="/images/heroes/schedule.jpg" alt="Campers having lunch in the lodge">
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
                                <h1 class="page-name">Schedule</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>Our camps are designed for youth in grades 1–12, and encourage both individual growth and community with others. During a recreational camp session, qualified, certified instructors lead organized programs in swimming, canoeing, kayaking, folk dancing, drama, nature exploration, arts and crafts, archery, riflery, sports, and team building.</p>
                                    <p>Every Camp session includes campfire skits and songs, all-camp games like water wars and capture the flag, time to plan activities together, polar-bear swims, making friends, sharing, and laughing and singing our heads off.
</p>
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
                        <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/nav-side-schedule.php"); ?> 
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            <!-- Grades 1-3 -->
                            <h2 id="grades-1-3" class="heading-category">Grades 1-3</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li class="item">                                    
                                    <h3 class="heading">
                                        <span class="nowrap">Little Bear</span> | 
                                        <span class="date nowrap">July 6-8</span> |  
                                        Cost: $110
                                    </h3>
                                    <div class="description">
                                        <p>The VBYC experience begins with Little Bear. It is  a short session designed to  help campers adjust  live comfortably in a group setting, assist children with exploring outdoors and participating in the camp experience. In this three day and two night session, campers will  swim, canoe*, play games, sing, dance, participate in skits, and eat great camp food. (*Weather or wind permitted)</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Little Bear</a></p>
                                    </div>
                                </li>
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Extended Little Bear</span> | <span class="date nowrap">July 6-9</span> | $150</h3>
                                    <div class="description">
                                        <p>VBYC  is offering this extension to parents who feel their new camper is ready to stay for a slightly longer session. This makes it a four day Little Bear experience!</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Extended Little Bear</a></p>
                                    </div>
                                </li>
                            </ul>

                            <!-- Grades 3-6 -->
                            <h2 id="grades-3-6" class="heading-category">Grades 3-6</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Great Bear</span> | <span class="date nowrap">June 26 - July 2</span> | $325</h3>
                                    <div class="description">
                                        <p>Great Bear Is for the child ready to try new experiences, Improve upon camp skills, nurture leadership skills, and build community. VBYC’s Early Youth camps do just that— they help a child grow. Campers will attend activities listed on the above first paragraph. Campers leadership and community building are fostered when campers help plan campfires, daily flag ceremonies, and participate in creative activities. Independence, self confidence, and friendships are built throughout the session but especially during free time and choice periods. All activities happen under the supervision of certified staff and trained counselors who understand how important it is to make new friends and have FUN!</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Great Bear</a></p>
                                    </div>
                                </li>
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Explorer</span> | <span class="date nowrap">August 10-14</span> | $295</h3>
                                    <div class="description">
                                        <p>The Explorer sessions is for children who want new experiences, learn or Improve upon camp skills, nurture leadership skills, and build community, with a specific focus on nature-based activities in all activities. Campers will attend structured activities listed at the top of the page. Leadership and community building are also fostered when campers help plan campfires, daily flag ceremonies, and participate in special activities. Independence, self confidence, and friendships are built while campers engage in free time, choice activities and gather for all-camp activities! The VBYC staff and counselors are here to help your children build friendships, nurture leadership skills build community and have a fun-filled week.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Explorer</a></p>
                                    </div>
                                </li>
                            </ul>

                            <!-- Grades 4-6 -->
                            <h2 id="grades-4-6" class="heading-category">Grades 4-6</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Discovery</span> | <span class="date nowrap">July 17-23</span>    | $325</h3>
                                    <div class="description">
                                        <p>A journey of self-discovery, pushing our boundaries both through exploring our natural world, and through living together with a diverse age range.<p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Discovery</a></p>
                                    </div>
                                </li>
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Frontier</span> | <span class="date nowrap">July 24-30</span>    | $325</h3>
                                    <div class="description">
                                        <p>The Frontier sessions is a week of traditional camp program with the option of branching out into outdoor living skills for the more advanced camper. Campers will have the opportunity to explore and learn more outdoor living skills in a safe environment supervised by staff at all times.Frontier campers Campers will engage in all structured classes offered during all youth camping sessions. Discovery and Frontier are sister sessions</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Frontier</a></p>
                                    </div>
                                </li>
                            </ul>

                            <!-- Grades 5-8 -->
                            <h2 id="grades-5-8" class="heading-category">Grades 5-8</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Wolverine</span> | <span class="date nowrap">July 10-16</span> | $325</h3>
                                    <div class="description">
                                        <p>In Middle Youth Camps, campers take an active role in running the program. At White Pine, we help campers identify and improve emerging leadership skills. During Wolverine, campers spend a day in a specialty program of their choice with kids having  the same interests. Both camps give campers more time to widen their circle of lifelong Camp friends.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Wolverine</a></p>
                                    </div>
                                </li>
                            </ul>

                            <!-- Grades 6-9 -->
                            <h2 id="grades-6-9" class="heading-category">Grades 6-9</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">White Pine - Early Leadership</span> <br> <span class="date nowrap">July 31 - August 5</span> | $325</h3>
                                    <div class="description">
                                        <p>In Middle Youth Camps, campers take an active role in running the program. At White Pine, we help campers identify and improve emerging leadership skills. At Wolverine, campers spend a day in a specialty program of their choice with other kids with the same interests. Both camps give campers more time to widen their circle of lifelong camp friends.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for White Pine - Early Leadership</a></p>
                                    </div>
                                </li>
                            </ul>

                            <!-- Grades 9-12 -->
                            <h2 id="grades-9-12" class="heading-category">Grades 9-12</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Leadership and Counselor Workshop </span> <br>  <span class="date nowrap">June 19-25</span> | $325</h3>
                                    <div class="description">
                                        <p>High school students learn and develop specific leadership skills that will help them in school, clubs, communities, and relationships throughout their lives. They attend daily workshops, meet &amp; learn from visiting speakers, work on special interest projects, and receive camp counselor training.</p>
                                        <p>*A 14-year-old entering ninth grade may apply to attend LW with two letters of reference and a personal essay stating why they would like to attend Leadership Workshop.</p>
                                        <p>Those interested in taking leadership to the next level may apply to participate in our counselor or staff-in-training programs offered during most camping sessions.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register Leadership and Counselor Workshop</a></p>
                                    </div>
                                </li>
                            </ul>


                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>


<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 