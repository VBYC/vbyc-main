<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_whos_in_charge;
    $page = $url_whos_in_charge;
    $section = 'about';
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
                            <img src="/images/heros/whos-in-charge.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">About Us</p>
                                <h1 class="page-name">Who's In Charge?</h1>
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
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">Board of Directors</h3>
                            <div>
                                <p>
                                  Elected by the supporters of Van Buren Youth Camp. Their role is 
                                  to serve as the decision making body of the camp. They hire the 
                                  Camp Directors and actively supervise the general operation of the 
                                  Camp.
                                  </p>
                                  <p>They also generate funds for the camp by sponsoring projects 
                                  and fundraiser's which generate money.</p>
                                <p>These funds 
                                  are used to make physical improvements to the camp facilities and to help 
                                  with major undertakings, such as land acquisition. </p>
                            </div>

                            <h3 class="heading">Directors</h3>
                            <div>
                                <p>
                                  Hired by the Board of Directors, this person oversees the year round 
                                  running of camp, including our rental facilities, directs marketing, 
                                  finance and camper enrollment. 

                                  </p>
                                  <p>They must meet all <a href="http://acacamps.org/" target="_blank">American 
                                  Camping Association</a> Director requirements. </p>

                                  <p><a href="/<?=$url_meet_the_director?>">Meet the director</a>.</p>

                            </div>
                            

                            
                            <h3 class="heading">Staff</h3>
                            <div>
                                <p>
                                  Hired by the Director, these persons run the 
                                  daily program. They are often former VBYC
                                  counselors and receive a week of training as a staff In Training 
                                  (SIT) where they work alongside the current staff. Once hired, they 
                                  receive 2-3 weekend training session then a full week of training 
                                  prior to the summer.</p>
                                  <p>Staff members with specialized classes receive 
                                  training in their prospective area (i.e. Water Safety Instructor, 
                                  Lifeguard Certification, Low Ropes, Archery and Riflery.) Other 
                                  than kitchen staff, they are at least 18 years of age and are generally 
                                  college students. Each staff member teaches a class three times 
                                  a day. </p>
                                  <p>They are present for and oversee all camper activities. These 
                                  people who love being around kids, are loaded with enthusiasm, compassion, 
                                  endurance and are recreation specialists!</p>
                            </div>
                            
                            <h3 class="heading">Volunteer Coordinator</h3>
                            <div>
                                <p>
                                  This is a staff member who recruits, trains and provides support 
                                  to our counselors. They are experienced staff members and 
                                  are an expert counselor them self. They are also an expert problem 
                                  solver and trouble shooter. They meet with the counselors daily. 
                                  They also provide a half day training and orientation on the counselor's 
                                  first day.</p>
                            </div>
                            
                            <h3 class="heading">Counselors</h3>
                            <div>
                                <p>
                                  These person's sole responsibility is to their kids safety and
                                    fun.  They are selected from our Leadership Workshop which is
                                    the first  week of every summer. Or they have equivalent experience.
                                    They are  screened through personal interviews, performance at
                                    the Leadership  Workshop, previous counseling experience, personal
                                    references and  their application.</p>
                                <p>Each counselor is in charge of a cabin of eight campers 
                                  of their gender. They are with their campers at classes, meals, 
                                  sleeping in the cabin, planning sessions. They foster unity, trust 
                                  and friendship and responsibility in their cabin. They are ages 
                                  15 on up. </p>
        
                            </div>
                        </div>
                    </div><!-- /.row -->


                </article> 
            </div><!-- /.container -->
        </section>
    </main>
 

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 