<?php
/* 
Template Name: Three Columns
*/
?>

<?php get_header(); ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?
        if (get_field('list_style_steps') == 'Yes') {
            $list_style_steps_class = " list-no-indent-children ";
        }
    ?>

    <main class="main-content-container" data-spy="scroll" data-target="#sidenav">

        <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero.php"); ?> 

        <section class="main-content ">
            <div class="container"> 
                <article class="main-article <?=$list_style_steps_class?>">

                    <?php include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/featured_images_secondary.php"); ?>
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


                    <?php if( have_rows('two_columns_column') ): ?>
                        <div class="row">
                            <?php 
                                $first_item_class = 'col-sm-offset-2';
                                while( have_rows('two_columns_column') ): the_row(); 
                                    echo $index;
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
                </article><!-- /.main-article -->
            </div><!-- /.container -->
        </section><!-- /.main-content -->
    </main><!-- /.main-content-container -->

<?php  endwhile; endif; ?>
<?php get_footer(); ?>