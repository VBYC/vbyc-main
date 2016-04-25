 <?
    if (get_field('list_style_steps') == 'Yes') {
        $list_style_steps_class = " list-no-indent-children ";
    }

    
    ?>
<?php get_header(); ?>
<?php  // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main class="main-content-container">
        <section class="hero">
            <?php 

            /* HERO IMAGE */ 
            if ( has_post_thumbnail() ) { 
                include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-image.php"); 
            
            } ?>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <?php    

                    /* HERO HEADLINE */ 
                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-headlines.php"); 

                    /* HERO TEXT */ 
                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-intro.php"); 
                    
                    ?> 
                </div>
            </div>
        </section>

        <section class="main-content">
            <div class="container"> 
                <article class="main-article <?=$list_style_steps_class?>">
                    <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/featured_images_secondary.php"); ?>
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <?php   

                            /* CONTENT HEADLINE (First red one) */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content_headline.php");

                            /* MAIN CONTENT */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/content_main.php"); 
                            
                            ?> 
                        </div>
                    </div><!-- /.row -->

                    <?
                        // Find out which column options (number of columns) have been chosen
                        $how_many_columns = get_field("column_options" );
                        foreach ($how_many_columns as $value) {
                            if ($value == 1) {
                                $has_one_column = true;
                            }
                            if ($value == 2) {
                                $has_two_columns = true;
                            }
                            if ($value == 3) {
                                $has_three_columns = true;
                            }
                        }
                    ?>
                    <? // THREE COLUMNS ?>

                    <?php if( $has_three_columns ): ?>
                        <?php if( have_rows('three_columns_column') ): ?>
                            <div class="row">
                                <?php 
                                    while( have_rows('three_columns_column') ): the_row(); 
                                    $column_content = get_sub_field('column_content');
                                ?>
                                <div class="col-xs-12 col-sm-4">
                                    <?=$column_content?>
                                </div>
                                <?php endwhile; ?>
                            </div><!-- /.row -->
                        <?php endif; ?>
                    <?php endif; ?>

                    <? // TWO COLUMNS ?>
                    <?php if( $has_two_columns ): ?>
                        <?php if( have_rows('two_columns_column') ): ?>
                            <div class="row">
                                <?php 
                                    $first_item_class = 'col-sm-offset-2';
                                    while( have_rows('two_columns_column') ): the_row(); 
                                        $column_content = get_sub_field('column_content');
                                ?>
                                <div class="col-xs-12 col-sm-5 <?=$first_item_class?>">
                                    <?=$column_content?>
                                </div>
                                <?php 
                                    $first_item_class = '';
                                    endwhile; 
                                ?>
                            </div><!-- /.row -->
                        <?php endif; ?>
                    <?php endif; ?>

                    <? // ONE COLUMN ?>
                    <?php if( $has_one_column ): ?>
                        <?php if( have_rows('one_column_column') ): ?>
                            <div class="row">
                                <?php 
                                    while( have_rows('one_column_column') ): the_row(); 
                                        $column_content = get_sub_field('column_content');
                                ?>
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <?=$column_content?>
                                </div>
                                <?php 
                                    endwhile; 
                                ?>
                            </div><!-- /.row -->
                        <?php endif; ?>
                    <?php endif; ?>


                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  // endwhile; endif; ?>
<?php get_footer(); ?>