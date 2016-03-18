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

                                <?php 
                                    $sessions = new WP_Query();
                                    $sessions->query(array( 'post_type' => 'sessions' ));
                                        while ( $sessions->have_posts() ) : $sessions->the_post(); 



                                            
                                            $date_start =   get_field('date_start');
                                            $date_end =     get_field('date_end');
                                            $cost =         get_field('cost');
                                            $description =  get_field('description');

                                            if ($date_start !== $date_end) {
                                                if (date('M', $date_end) == date('M', $date_end)) {
                                                    echo date('-j' , $date_end);
                                                } else {
                                                    echo date(' - M j' , $date_end);
                                                }
                                            }

                                ?>
                                                               
                                <h3 class="heading">
                                    <span class="nowrap"><?=the_title()?></span> | 
                                    <span class="date nowrap"><?=$date_start?> - <?=$date_end?></span> |  
                                    Cost: $<?=$cost?>
                                </h3>
                                <div class="description">
                                    <p><?=$description?></p>
                                    <p><a href="<?=$url_register?>" target="_blank">Register for <?=the_title()?></a></p>
                                </div>
                                

                                <?php 
                                    endwhile; 
                                ?>

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