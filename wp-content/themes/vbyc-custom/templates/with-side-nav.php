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
              


                         <?php 
                                $group_last    = null;

                                $group_header  = '<!-- Grades Group -->';
                                $group_header .= '<h2 id="grades-1-3" class="heading-category">Grades 1-3</h2>';
                                $group_header .= '<ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">';
                                $group_header .= '<li class="item">';
                                
                                $group_footer = '<li>';
                                $group_footer .= '</ul>';
                            
                                

                                $args = array(
                                    'post_type'  => 'sessions',
                                    'meta_query' => array(
                                        'relation' => 'AND',
                                        'grade_start_clause' => array(
                                            'key'     => 'grade_start',
                                            'compare' => 'EXISTS',
                                        ),
                                        'grade_end_clause' => array(
                                            'key'     => 'grade_end',
                                            'compare' => 'EXISTS',
                                        ), 
                                    ),
                                    'orderby' => array(
                                        'grade_start_clause' => 'ASC',
                                        'grade_end_clause' => 'ASC',
                                    ),
                                );
                                $sessions = new WP_Query( $args );
                                while ( $sessions->have_posts() ) : $sessions->the_post(); 
                                    
                                    // Trim last 4 characters so date() will interpret the unix timestamp correctly
                                    $date_start =   substr(get_field('date_start'), 0, -3);
                                    $date_end =     substr(get_field('date_end'), 0, -3);
                                    $cost =         get_field('cost');
                                    $description =  get_field('description');
                                    $grade_start =  get_field('grade_start');
                                    $grade_end =    get_field('grade_end');

                                    // Start date 
                                    $date_start_display =  date('M j' , $date_start);

                                    // End date
                                    if ($date_start !== $date_end) {
                                        if (date('M', $date_end) == date('M', $date_end)) {
                                            $date_end_display = date('-j' , $date_end);
                                        } else {
                                           $date_end_display = date(' - M j' , $date_end);
                                        }
                                    }
                                    // Both dates
                                    $display_dates = $date_start_display.$date_end_display;

                                    // If this is a new group (age group) separate it 
                                    $group_current = $grade_start.'-'.$grade_end;

                                    if ($group_current != $group_last) { 
                                            /* Uness it's the very first rgoup on the page, close off the previous group */
                                            if (!$group_last) { ?>

                                            </il>
                                        <ul>

                                        <?  } ?>
                                            
                                        <!-- Grades Group <?=$group_current?> -->
                                        <h2 id="grades-<?=$group_current?>" class="heading-category">Grades <?=$group_current?></h2>
                                        <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                            <li class="item">
                                    <? } ?>

                                <h3 class="heading">
                                    <span class="nowrap"><?=the_title()?></span> | 
                                    <span class="date nowrap"><?=$display_dates?></span> |  
                                    Cost: $<?=$cost?>
                                </h3>
                                <div class="description">
                                    <p><?=$description?></p>
                                    <p><a href="<?=$url_register?>" target="_blank">Register for <?=the_title()?></a></p>
                                </div>
                                

                                <?php 
                                        $group_last = $group_current;
                                    endwhile; 
                                ?>
                                </il>
                            <ul>



                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>