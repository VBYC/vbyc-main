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
                                <div class="description description-wide">
                                    <p>Our camps are designed for youth in grades 1–12, and encourage both individual growth and community with others. During a recreational camp session, qualified, certified instructors lead organized programs in swimming, canoeing, kayaking, folk dancing, drama, nature exploration, arts and crafts, archery, riflery, sports, and team building.</p>
                                    <p>Every Camp session includes campfire skits and songs and all-camp games like water wars and Capture the Flag. Each camp session provides time for campers to plan activities together, take polar-bear swims and participate in Evening Rec every night. All of these activities and classes  promote opportunities for making friends, sharing, and laughing all the while having a fun-filled camp week.
                                    </p>
                                    <a href="<?=$url_parent_login?>" class="hero-cta">Parent login</a>
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
                        <aside id="sidenav-container">
                            <ul id="sidenav" class="sidenav nav sidenav-list list-unstyled">
                                <li class="item" role="presentation">
                                    <a href="#grades-1-3" class="link">Grades 1-3</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#grades-3-6" class="link">Grades 3-6</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#grades-4-9" class="link">Grades 4-9</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#grades-5-8" class="link">Grades 5-8</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#grades-6-9" class="link">Grades 6-9</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#grades-9-12" class="link">Grades 9-12</a>
                                </li>
                            </ul>
                        </aside>
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
                                        <p>Great Bear Is for the child ready to try new experiences, Improve upon camp skills, nurture leadership skills, and build community. VBYC&rsquo;s Early Youth camps do just that; they help a child grow in independence &amp; confidence!</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Great Bear</a></p>
                                    </div>
                                </li>
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Explorer</span> | <span class="date nowrap">August 10-14</span> | $295</h3>
                                    <div class="description">
                                        <p>The Explorer sessions is for children who want new experiences, learn or Improve upon camp skills, nurture leadership skills, and build community, with a <strong>specific focus on nature-based activities in all activities</strong>.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Explorer</a></p>
                                    </div>
                                </li>
                            </ul>

                            <!-- Grades 4-9 -->
                            <h2 id="grades-4-9" class="heading-category">Grades 4-9</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">

                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Discovery</span> | <span class="date nowrap">July 17-23</span>    | $325</h3>
                                    <div class="description">
                                        <p> In VBYC&rsquo;s Discovery Camping Session, campers follow a journey of self-discovery, pushing their boundaries both through exploring our natural world and through living together with a diverse age range.  This session is the sister session to Frontier.<p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Discovery</a></p>
                                    </div>
                                </li>

                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Sleepover Saturday</span> | <span class="date nowrap">July 23-24</span>    | $40</h3>
                                    <div class="description">
                                        <p> Campers registered for both Discovery and Frontier can spend a low key Saturday night together while we wait for our Frontier friends to arrive on Sunday. It will allow the campers, staff and volunteers some time to rejuvenate and get to know each other better! (Up to 50 campers).<p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Sleepover Saturday</a></p>
                                    </div>
                                </li>

                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Frontier</span> | <span class="date nowrap">July 24-30</span>    | $325</h3>
                                    <div class="description">
                                        <p>The Frontier sessions is a week of traditional camp program with the option of branching out into outdoor living skills for the more advanced camper. Campers will have the opportunity to explore and learn more outdoor living skills in a safe environment supervised by staff at all times. Discovery and Frontier are sister sessions.
</p>
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
                                    <h3 class="heading"><span class="nowrap">Leadership and Counselor Workshop*</span> <br>  <span class="date nowrap">June 19-25</span> | $325</h3>
                                    <div class="description">
                                        <p>High school students learn and develop specific leadership skills that will help them in school, clubs, communities, and relationships throughout their lives. They attend daily workshops, meet &amp; learn from visiting speakers, work on special interest projects, and receive camp counselor training.</p>
                                        <p>*A 14-year-old entering ninth grade may apply to attend LW with two letters of reference and a personal essay stating why they would like to attend Leadership Workshop.</p>
                                        <p>Those interested in taking leadership to the next level may apply to participate in our counselor or staff-in-training programs offered during most camping sessions.  You should also consider signing up for <a href="#advanced-leadership">Advanced Leadership</a>.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Leadership and Counselor Workshop</a></p>
                                    </div>
                                </li>
          
                                <li class="item" id="advanced-leadership">                                    
                                    <h3 class="heading"><span class="nowrap">Advanced Leadership </span> <br>  <span class="date nowrap">July 3-5</span> | $150</h3>
                                    <div class="description">
                                        <p>This three day workshop is for your high school age child who is up for a real challenge and possesses an adventurous spirit. Enrollment is limited to those who have attended our Leadership Workshop in the past AND have been a Counselor in one of our traditional programs at least once. We will be utilizing their talents to help promote and develop programs for VBYC while enjoying smaller group activities. A perfect session for your graduating senior! Feel free to email the <a href="mailto:director@vbyc.org">director</a> for questions about this amazing session.  </p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Advanced Leadership</a></p>
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