<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_schedule;
    $page = $url_schedule;
    $section = 'sessions';
    $template = 'basic-with-side-nav';
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
                            <img src="/images/heroes/schedule.jpg" alt=" ">
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
                                    <p>Our camps are designed for youth in grades 1–12, and encourage both individual growth and community with others.  During a recreational camp session, qualified, certified instructors lead organized programs in swimming, canoeing, kayaking, folk dancing, drama, nature exploration, arts and crafts, archery, riflery, sports, and team building.</p>
                                    <p>All camp sessions include campfire skits and songs, all-camp games like water wars and capture the flag, time to plan activities together, polar-bear swims, making friends, sharing, and laughing and singing our heads off.</p>
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
                                        <p>A short session designed to ease campers into comforting with exploring outdoors and participating in the camp experience.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Little Bear</a></p>
                                    </div>
                                </li>
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Extended Little Bear</span> | <span class="date nowrap">July 6-9</span> | $150</h3>
                                    <div class="description">
                                        <p>We are offering this option to parents who feel like their new camper is ready for a slightly longer session.  This makes it a four day Little Bear experience!</p>
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
                                        <p>Improve upon camp skills, nurture leadership skills, and build community.</p>
                                        <p><a href="<?=$url_register?>" target="_blank">Register for Great Bear</a></p>
                                    </div>
                                </li>
                                <li class="item">                                    
                                    <h3 class="heading"><span class="nowrap">Explorer</span> | <span class="date nowrap">August 10-14</span> | $295</h3>
                                    <div class="description">
                                        <p>Improve upon camp skills, nurture leadership skills, and build community, with a specific focus on nature-based activities.</p>
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
                                        <p>A week of traditional camp program, with the option of branching out into outdoor living skills for the more advanced camper. (Discovery and Frontier are sister sessions.)</p>
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
                                        <p>In Middle Youth Camps, campers take an active role in running the program. At White Pine, we help campers identify and improve emerging leadership skills. At Wolverine, campers spend a day in a specialty program of their choice with other kids with the same interests. Both camps give campers more time to widen their circle of lifelong camp friends.</p>
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
                                        <p>High school students learn and develop specific leadership skills that will help them in school, clubs, communities, and relationships. They attend daily workshops, meet visiting speakers, work on special interest projects, and receive camp counselor training.</p>
                                        <p>*A 14-year-old entering ninth grade may apply with two letters of reference and a personal essay stating why they would like to attend Leadership Workshop</p>
                                        <p>Those interested in taking leadership to the next level can apply to participate in our counselor or staff-in-training programs.</p>
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