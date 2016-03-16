<? /* 
Template Name: With Side Nav
*/ ?>

<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main class="main-content-container" data-spy="scroll" data-target="#sidenav">

        <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero.php"); ?> 

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
                                <li class="item" role="presentation">
                                    <a href="#adults" class="link">Adults</a>
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



                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>