
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="hero-text">
                            <div class="description description-wide">

                                <?php the_field('intro_paragraph'); ?>

                                <?php 
                                $has_link = get_field("intro_link_url" );
                                if ( $has_link ) { 
                                    $link_target = get_field( "intro_link_external_or_internal" );
                                    if(  $link_target == 'external' ) { 
                                        $this_target = ' target="_blank" ';
                                    } ?>

                                    <a  href="<?php the_field('intro_link_url'); ?>" class="hero-cta" <?php echo $this_target?>>
                                         <?php the_field('intro_link_label'); ?>
                                    </a>
                                <?php } ?>   

                            </div> 
                        </div> 
                    </div>         
                </div><!-- /.row -->
                
            