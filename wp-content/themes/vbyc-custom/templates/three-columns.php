/* 
Template Name: Three Columns
*/

<?php
get_header(); ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero.php"); ?> 

    <section class="main-content">
        <div class="container"> 
            <article class="main-article">
  
                      
                        <?php   

                        /* CONTENT HEADLINE (First red one) */ 
                        // include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content-headlines.php");

                        /* MAIN CONTENT */ 
                        // ("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content-main.php"); 
                        
                        ?> 

                       
                    <div class="col-xs-12 col-sm-4">
                        <h3 class="heading">Pre-camp</h3>
                        <ol class="list-no-indent list-steps">
                            <li><a href="https://vanburen.campintouch.com/ui/forms/application/camper/App">Register</a></li>
                            <li>Review our <a href="/what-to-bring/">What to Bring</a> list.</li>
                            <li>For first timers, review our <a href="/typical-day/">Typical
                            day</a> page.</li>
                        </ol>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h3 class="heading">Day of camp</h3>
                        <ol class="list-no-indent list-steps">
                            <li>Get here! <a href="https://goo.gl/maps/Gcjxd7cXYsK2" target="_blank">12370 4th St., Bloomingdale, MI 49026</a>.</li>
                            <li>Arrive Sunday at 3:00 PM (unless otherwise stated).</li>
                            <li>When you park, a staff member will give you your cabin number.</li>
                            <li>Drop off your stuff in your cabin and meet your counselor.</li>
                            <li>Come to the lodge to register.</li>
                            <li>Swim test.</li>
                        </ol>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h3 class="heading">When camp is over</h3>
                        <ol class="list-no-indent list-steps list-double-space">
                            <li>Come on back! <a href="https://goo.gl/maps/Gcjxd7cXYsK2" target="_blank">12370 4th St., Bloomingdale, MI 49026</a>.</li>
                            <li>Arrive Saturday at 10:00 AM (unless otherwise stated).</li>
                            <li>Join the Final Flag ceremony.</li>
                            <li>Come to the lodge to de-register.</li>
                            <li>Get your stuff from your cabin.</li>
                            <li>Go home and keep in touch via our <a href="/alumni/">alumni page</a> and <a href="https://www.facebook.com/VanBurenYouthCamp/">Facebook page</a> so you’re ready for next year!</li>
                        </ol>
                    </div>
                    
                </div><!-- /.row -->
            </article><!-- /.main-article -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

<?php  endwhile; endif; ?>
<?php get_footer(); ?>




                

