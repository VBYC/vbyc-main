
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="hero-text">
                            <div class="description description-wide">

                                <?php the_field('intro_paragraph'); ?>

                                <?php 
                                    $link_target = get_field("intro_link_target" );
                                    if ($link_target != 'none') {
                                        $link_label = get_field("intro_link_label");
                                        if ($link_target == 'internal') {
                                            $link_url = get_field("intro_link_internal");
                                        } else if ($link_target == 'external'){
                                            $link_url = get_field("intro_link_external");
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