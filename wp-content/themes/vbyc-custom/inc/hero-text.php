    <div class="container-fluid hero-text-container clearfix">
             <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero-text">
                            <?php the_title( '<h1 class="page-name">', '</h1>' ); ?>
                        </div>
                    </div>         
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="hero-text">
                            <div class="description">

                                <?php // if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                 <p><?php the_field('intro_paragraph'); ?></p>

                                 <?php 
                                    $has_link = get_field( "intro_link_url" );
                                    if ( $has_link ) { 
                                        $link_target = get_field( "intro_link_external_or_internal" );
                                        if(  $link_target == 'external' ) { 
                                            $this_target = ' target="_blank" ';
                                    } ?>

                                 <a 
                                     href="<?php the_field('intro_link_url'); ?>" 
                                     class="hero-cta"
                                     <?php echo $this_target?>
                                     >
                                     <?php the_field('intro_link_label'); ?>
                                 </a>
                                 <?php } ?>
                                <?php // endwhile; endif; ?>

              
                            </div> 
                        </div> 
                    </div>         
                </div><!-- /.row -->
            </div>
        </div>