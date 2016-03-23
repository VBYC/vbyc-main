<? /* 
Template Name: Sessions
*/ ?>

<?php 

    function convertToLinkable($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
    $group_last    = null;
    
    // REGULAR SESSIONS
    $args = array(
        'post_type'  => 'sessions',

        'meta_query' => array(
            'relation' => 'AND',
            'grade_start_clause' => array(
                'key'     => 'grade_start',
                'compare' => '!=',
            ),
            'grade_end_clause' => array(
                'key'     => 'grade_end',
                'compare' => 'EXISTS',
            ), 
            'grade_other_clause' => array(
                'key'     => 'grade_start',
                'value'   => array(''),
                'compare' => 'NOT IN'
            ),  
        ),
        'orderby' => array(
            'grade_start_clause' => 'ASC',
            'grade_end_clause' => 'ASC',
        ),
    );
    $sessions = new WP_Query( $args );

    // NON-REGULAR
    $args = array(
        'post_type'  => 'sessions',

        'meta_query' => array(
            'relation' => 'AND',
            'date_start_clause' => array(
                'key'     => 'date_start',
                'compare' => '!=',
            ),
            'grade_other_clause' => array(
                'key'     => 'grade_other',
                'value'   => array(''),
                'compare' => 'NOT IN'
            ),  
        ),
        'orderby' => array(
            'date_start_clause' => 'ASC',
        ),
    );
    $sessions_non_regular = new WP_Query( $args );
?>

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

                                <?php // REGULAR SESSIONS
                                $group_last = null;
                                while ( $sessions->have_posts() ) : $sessions->the_post(); 
                                    $grade_start =  get_field('grade_start');
                                    $grade_end =    get_field('grade_end');

                                    // Only show if it's a new category - because this is a ctegory nav
                                    $group_current = $grade_start.'-'.$grade_end;
                                    $grade_current_link = convertToLinkable($group_current);
                                    if ($group_current != $group_last) { 
                                ?>

                                    <a href="#grades-<?=$grade_current_link?>" class="link">Grades <?=$group_current?></a>

                                <?php 
                                    }
                                    $group_last = $group_current;
                                    endwhile; 
                                ?>

                                <?php // NON REGULAR SESSIONS
                                $group_last = null;
                                while ( $sessions_non_regular->have_posts() ) : $sessions_non_regular->the_post(); 
                                    $grade_current =  get_field('grade_other');
                                    $grade_current_link = convertToLinkable($grade_current);
                                    // Only show if it's a new category - because this is a ctegory nav
                                    if ($group_current != $group_last) { 
                                ?>

                                    <a href="#grades-<?=$grade_current_link?>" class="link"><?=$grade_current?></a>

                                <?php 
                                    }
                                    $group_last = $group_current;
                                    endwhile; 
                                ?>

                                </li>
                            </ul>
                        </aside>
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                                <?php
                                $group_last = null;
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
                                    $grade_current_link = convertToLinkable($group_current);

                                    if ($group_current != $group_last) { 
                                            /* Uness it's the very first rgoup on the page, close off the previous group */

                                            if ($group_last) { ?>

                                            </li>
                                        </ul>

                                        <?  } ?>
                                            
                                        <!-- Group <?=$group_current?> -->
                                        <h2 id="grades-<?=$grade_current_link?>" class="heading-category">Grades <?=$group_current?></h2>
                                        <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                            <li class="item">
                                    <? } ?>

                                <h3 class="heading">
                                    <span class="nowrap"><?=the_title()?></span> | 
                                    <span class="date nowrap"><?=$display_dates?></span>  
                                    <?php if ($cost) { ?>| Cost: $<?=$cost?> <? } ?>
                                </h3>
                                <div class="description">
                                    <?=$description?>
                                    <p><a href="<?=$url_register?>" target="_blank">Register for <?=the_title()?></a></p>
                                </div>
                                
                                <?php 
                                    $group_last = $group_current;
                                    endwhile; 
                                ?>
                                </li>
                            </ul>


                            <?php
                                $group_last = null;
                                while ( $sessions_non_regular->have_posts() ) : $sessions_non_regular->the_post(); 
                                    
                                    // Trim last 4 characters so date() will interpret the unix timestamp correctly
                                    $date_start =   substr(get_field('date_start'), 0, -3);
                                    $date_end =     substr(get_field('date_end'), 0, -3);
                                    $cost =         get_field('cost');
                                    $description =  get_field('description');
                                    $grade_other =  get_field('grade_other');

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
                                    $group_current = $grade_other;
                                    $grade_current_link = convertToLinkable($group_current);

                           
                                    if ($group_current != $group_last) { 
                                            /* Uness it's the very first rgoup on the page, close off the previous group */
                                            if ($group_last) { ?>
                                            </li>
                                        </ul>

                                        <?  } ?>
                                            
                                        <!-- Group <?=$group_current?> -->
                                        <h2 id="grades-<?=$grade_current_link?>" class="heading-category"><?=$grade_other?></h2>
                                        <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                            <li class="item">
                                    <? } ?>

                                <h3 class="heading">
                                    <span class="nowrap"><?=the_title()?></span> | 
                                    <span class="date nowrap"><?=$display_dates?></span>  
                                    <?php if ($cost) { ?>| Cost: $<?=$cost?> <? } ?>
                                </h3>
                                <div class="description">
                                    <?=$description?>
                                    <p><a href="<?=$url_register?>" target="_blank">Register for <?=the_title()?></a></p>
                                </div>
                                
                                <?php 
                                    $group_last = $group_current;
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