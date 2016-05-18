<?php 
    $the_page    = null;
    $errorpageid = get_option( '404pageid', 0 ); 

    if ($errorpageid !== 0) {
        // Typecast to an integer
        $errorpageid = (int) $errorpageid;
        // Get our page
        $the_page = get_page($errorpageid);

    }
    $original_title =  get_the_title($errorpageid);
    $page_title_404 = preg_replace('/Private:/', '', $original_title);
?>
<?php get_header(); ?>
     <main id="page-error" class="main-content-container">    
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero-text">
                            <h1 class="page-name"><?=$page_title_404?></h1>
                        </div>
                    </div>         
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="hero-text">
                            <div class="description">
                                <?php
                                $has_content_headline = get_field( "content_headline",$errorpageid );
                                if ( $has_content_headline ) { ?>

                                    <h2 class="heading"><?php the_field( 'content_headline',$errorpageid ); ?></h2> 

                                <? } ?>


                                <?php 
                                    $intro_paragraph_alignment = get_field('intro_paragraph_alignment',$errorpageid); 
                                    if ($intro_paragraph_alignment != 'centered') {
                                        $text_alignment_class = 'description-wide';
                                    }
                                ?>
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                                        <div class="hero-text">
                                            <div class="description <?=$text_alignment_class?>">

                                                <?php the_field('intro_paragraph',$errorpageid); ?>

                                                <?php 
                                                    $link_target = get_field("intro_link_target",$errorpageid );
                                                    if ($link_target != 'none') {
                                                        $link_label = get_field("intro_link_label",$errorpageid);
                                                        if ($link_target == 'internal') {
                                                            $link_url = get_field("intro_link_internal",$errorpageid);
                                                        } else if ($link_target == 'external'){
                                                            $link_url = get_field("intro_link_external",$errorpageid);
                                                            $link_target_attribute = 'target="_blank"';
                                                        }
                                                ?>
                                                        <a  href="<?=$link_url?>" class="hero-cta" <?=$link_target_attribute?>>
                                                             <?=$link_label?>
                                                        </a>
                                                <?php 
                                                    } 
                                                ?>   
                                            </div> 
                                        </div> 
                                    </div>         
                                </div><!-- /.row -->
                            </div> 
                        </div> 
                    </div>         
                </div><!-- /.row -->
            </div>
        </section>
        
    </main><!-- /.main-content-container -->

<?php get_footer(); ?>