<? /* 
Template Name: Schedule
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
   


    // get repeater field data
    $repeater = get_field('session_info');

    // vars
    $order = array();

    // define order
    foreach( $repeater as $i => $row ) {
        $order['grade_other'][ $i ] = $row['grade_other'];
        $order['grade_start'][ $i ] = $row['grade_start'];
        $order['grade_end'][ $i ] = $row['grade_end'];
        $order['date_end'][ $i ] = $row['date_end'];
    }

    // multisort
    array_multisort( $order['grade_other'], SORT_ASC, $order['grade_other'], SORT_ASC, $order['grade_end'], SORT_ASC, $order['date_end'], SORT_ASC, $repeater );

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
                            <?php 
                            $group_last = null;
                            foreach( $repeater as $i => $row ): 
                                 
                                $grade_start    = $row['grade_start'];
                                $grade_end      = $row['grade_end'];
                                $grade_other    = $row['grade_other'];

                                // Only show if it's a new category - because this is a ctegory nav
                                if ($grade_other) {
                                    // Non-regular Session
                                    $group_current = $grade_other;
                                    $group_current_label = $grade_other;

                                } else {
                                    // Regular Session 
                                    $group_current = $grade_start.'-'.$grade_end;
                                    $group_current_label = 'Grades '.$group_current;
                                }
                                $grade_current_link = convertToLinkable($group_current);

                                if ($group_current != $group_last) { 
                            ?>
                                <li class="item" role="presentation">
                                    <a href="#grades-<?=$grade_current_link?>" class="link"><?=$group_current_label?></a>
                                </li>
                            <?php 
                                }
                                $group_last = $group_current;
                                endforeach; 
                            ?>
                            </ul>
                        </aside>
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/featured_images_secondary.php"); ?>
                            
                                <?php
                                $group_last = null;
                                foreach( $repeater as $i => $row ): 

                                    // Trim last 4 characters so date() will interpret the unix timestamp correctly
                                    $headline       = $row['session_name'];
                                    $date_start     = strtotime($row['date_start']);
                                    $date_end       = strtotime($row['date_end']);
                                    $cost           = $row['cost'];
                                    $description    = $row['description'];
                                    $grade_start    = $row['grade_start'];
                                    $grade_end      = $row['grade_end'];
                                    $grade_other    = $row['grade_other'];

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
                                    if ($grade_other) {
                                        // Non-regular Session
                                        $group_current = $grade_other;
                                        $group_current_label = $grade_other;

                                    } else {
                                        // Regular Session 
                                        $group_current = $grade_start.'-'.$grade_end;
                                        $group_current_label = 'Grades '.$group_current;
                                    }
                                    $grade_current_link = convertToLinkable($group_current);
                                    
                                    if ($group_current != $group_last) { 
                                            /* Uness it's the very first rgoup on the page, close off the previous group */

                                            if ($group_last) { ?>

                                            </li>
                                        </ul>

                                        <?  } ?>
                                            
                                        <!-- Group <?=$group_current?> -->
                                        <h2 id="grades-<?=$grade_current_link?>" class="h2-alt heading-category"><?=$group_current_label?></h2>
                                        <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                            <li class="item">
                                    <? } ?>

                                <h3 class="h2 heading">
                                    <span class="nowrap"><?=$headline?></span> | 
                                    <span class="date nowrap"><?=$display_dates?></span>  
                                    <?php if ($cost) { ?>| Cost: $<?=$cost?> <? } ?>
                                </h3>
                                <div class="description">
                                    <?=$description?>
                                    <p><a href="<?=$url_register?>" target="_blank">Register for <?=$headline?></a></p>
                                </div>
                                
                                <?php 
                                    $group_last = $group_current;
                                    endforeach; 
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