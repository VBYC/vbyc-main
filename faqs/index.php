<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_faqs;
    $page = $url_faqs;
    $section = 'about';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav test"';
    $description = $description_faqs;
    // $javascript_insert = 'vbyc.util.init();';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main class="main-content/-container" data-spy="scroll" data-target="#sidenav">
        <section class="hero">
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">About</p>
                                <h1 class="page-name">FAQs</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>

        
        <section class="main-content">
            <div class="container scroll-spy-container"> 
                <div class="row">
                    <? /*
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <aside id="sidenav-container">
                            <ul id="sidenav" class="sidenav nav sidenav-list list-unstyled">
                                <li class="item" role="presentation">
                                    <a href="#age-range" class="link sidenav-">What is the age range?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#co-ed" class="link sidenav-">Is it co-ed?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#camper-dropoff" class="link sidenav-">When is camper drop off and registration?</a>
                                </li>
                                 <li class="item" role="presentation">
                                    <a href="#camper-pickup" class="link sidenav-">When is camper pickup and deregistration?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#visiting" class="link sidenav-">Is visiting allowed?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#cabinmate-requests" class="link sidenav-">Do you take bunk-mate requests?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#store" class="link sidenav-">How does the store work?</a>
                                </li>
                                
                               <!--  <li class="item" role="presentation">
                                    <a href="#dietary" class="link sidenav-">How do you handle dietary needs?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#non-descrimination" class="link sidenav-">How do promote  and acceptance?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#camper-pickup" class="link sidenav-">How do you handle allergy needs?</a>
                                </li>
                               
                                <li class="item" role="presentation">
                                    <a href="#allergies" class="link sidenav-">How do you handle allergy needs?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#prevent-homesickness" class="link sidenav-">How can I help my child not be afraid or homesick??</a>
                                </li> -->
                                <li class="item" role="presentation">
                                    <a href="#get-in-touch-with-alumni" class="link sidenav-">Can you help me get in touch with other alumni?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#donate" class="link sidenav-">Can I donate time/money?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#board" class="link sidenav-">Can I serve on the Board of Directors?</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#rent-camp" class="link sidenav-">Can I rent camp for an event?</a>
                                </li>
                            </ul>
                        </aside>
                    </div><!-- /column -->
                    */ ?>

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <article class="main-article">
                            
                            <ul class="content-list list-multiple-details list-unstyled">
                                <li id="age-range" class="item">                                    
                                    <h3 class="heading ">What is the age range?</h3>
                                    <p>Grades 1-12.</p>
                                </li>
                                <li id="coed" class="item">                                    
                                    <h3 class="heading ">Is it co-ed?</h3>
                                    <p>Yes.</p>
                                </li>
                                <li id="camper-dropoff" class="item">                                    
                                    <h3 class="heading ">When is camper drop off and registration?</h3>
                                    <p>Sunday, 3:00 PM. Unless otherwise stated.</p>
                                </li>
                                <li id="camper-pickup" class="item">                                    
                                    <h3 class="heading ">When is camper pickup and deregistration?</h3>
                                    <p>Saturday, 10:00 AM. Unless otherwise stated.</p>
                                </li>
                                <li id="parent-login" class="item">                                    
                                    <h3 class="heading ">If I've registed in the past, how do I log back in?</h3>
                                    <p><a href="<?=$url_parent_login?>">Log in right here!</a></p>
                                </li>
                                <li id="register-again" class="item">                                    
                                    <h3 class="heading ">Do I have to re-type information I entered in the past?</h3>
                                    <p>No. If you already have an account, you can <a href="<?=$url_parent_login?>">log back in</a> to use your information and forms for an upcoming session.</p>
                                </li>
                                <li id="visiting" class="item">                                    
                                    <h3 class="heading ">Is visiting allowed?</h3>
                                    <p>No. To prevent homesickness, parents should not visit or call. But please send letters, postcards, and care packages!</p>
                                </li>
                                <li id="cabinmate-requests" class="item">                                    
                                    <h3 class="heading ">Do you take cabin-mate requests?</h3>
                                    <p>No. We find that when a cabin of kids start on equal footing of being new to each other, they have a happier week and have greater growth in self confidence. There is still plenty of times throughout the day campers in different cabins can be together. For example: Morning free time, afternoon free time, store time, thought, evening rec, and campfire. </p>
                                </li>
                                <li id="store" class="item">                                    
                                    <h3 class="heading ">How does the store work?</h3>
                                    <p>Parents may deposit spending money in their child’s store account which the camper can “charge” purchases to throughout the week. Unspent money will be refunded at the end of the week. The store sells sweatshirts, T-shirts, film, batteries, bug spray, pens, postcards, stationery, candy, pop, stuffed animals, etc.</p>
                                </li>
                                
                               <? /*  <li id="dietary" class="item">                                    
                                    <h3 class="heading ">How do you handle dietary needs?</h3>
                                    <p>(TODO: FIll in)</p>
                                </li>
                                <li id="non-descrimination" class="item">                                    
                                    <h3 class="heading ">How do promote non-descrimination and acceptance?</h3>
                                    <p>(TODO: FIll in)</p>
                                </li>
                                <li id="allergies" class="item">                                    
                                    <h3 class="heading ">How do you handle allergy needs?</h3>
                                    <p>(TODO: FIll in)</p>
                                </li>
                                <li id="prevent-homesickness" class="item">                                    
                                    <h3 class="heading ">How can I help my child not be afraid or homesick?</h3>
                                    <p>(TODO: FIll in)List of ways to prepare and help child cope (Wite letters, send photo, stuffed animal, encouraging talks, tell them get into activites )(TODO: Finesse)</p>
                                </li> -->*/ ?>
                                <li id="get-in-touch-with-alumni" class="item">                                    
                                    <h3 class="heading ">Can you help me get in touch with other alumni?</h3>
                                    <p>The best place to do that is in this <a href="<?=$url_facebook_group?>">Facebook Group</a>. Or join our <a href="<?=$url_alumni_registry?>" target="_blank">alumni registry </a>and we'll tell you about alumni events.
                                </p>
                                </li>
                                <li id="donate" class="item">                                    
                                    <h3 class="heading ">Can I donate time/money?</h3>
                                    <p>Yes please! See our <a href="/<?=$url_donate?>/">Donation page.</a></p>
                                </li>
                                <li id="board" class="item">                                    
                                    <h3 class="heading ">Can I serve on the Board of Directors?</h3>
                                    <p>Yes please! <a href="/<?=$url_contact?>/">Contact us.</a></p>
                                </li>
                                <li id="rent-camp" class="item">                                    
                                    <h3 class="heading ">Can I rent camp for an event?</h3>
                                    <p>Yes please! See our <a href="/<?=$url_rent_camp?>/">Rent Camp page.</a></p>
                                </li>
                                

                            </ul>
                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 