

                        <div class="global-contact-info clearfix">
                            <address class="item">
                                <?php the_field('contact_name','option'); ?>
                                <br>
                                <a href="<?php echo the_field('url_google_map','option'); ?>" target="_blank">
                                    <?php echo the_field('contact_address_street','option'); ?><br>
                                    <?php echo the_field('contact_address_city','option'); ?>, <?php echo the_field('contact_address_state','option'); ?> <?php echo the_field('contact_zip','option'); ?><br>
                                </a>
                            </address>
                            <p class="item">  
                                <?php echo the_field('footer_label_phone','option'); ?><br>
                                <a href="tel:<?php echo the_field('contact_phone','option'); ?>"><?php echo the_field('contact_phone','option'); ?></a>
                            </p>
                            <address class="item">
                                <?php echo the_field('footer_label_email','option'); ?><br>
                                <a href="mailto:<?php echo the_field('contact_email','option'); ?>"><?php echo the_field('contact_email','option'); ?></a>
                            </address>
                            <p class="item">  
                                <?php echo the_field('footer_label_social','option'); ?><br>
                    <?php 
                        if( have_rows('social_entity', 'option') ):
                            while( have_rows('social_entity', 'option') ): the_row(); ?>
                                <a href="<?php echo the_sub_field('social_url') ?>" target="_blank"><?php echo the_sub_field('social_name') ?></a><br>
                    <?      endwhile; 
                        endif; ?>
                            </p>
                        </div>
