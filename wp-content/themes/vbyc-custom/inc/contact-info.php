                        <div class="global-contact-info clearfix">
                            <address class="item">
                                <?php the_field('contact_name'); ?>
                                <br>
                                <a href="<?php echo the_field('url_google_map'); ?>" target="_blank">
                                    <?php echo the_field('contact_address_street'); ?><br>
                                    <?php echo the_field('contact_address_city'); ?>, <?php echo the_field('contact_address_state'); ?> <?php echo the_field('contact_zip'); ?><br>
                                </a>
                            </address>
                            <p class="item">  
                                <?php echo the_field('contact_label_phone'); ?><br>
                                <a href="tel:<?php echo the_field('contact_phone'); ?>"><?php echo the_field('contact_phone'); ?></a>
                            </p>
                            <address class="item">
                                <?php echo the_field('contact_label_email'); ?><br>
                                <a href="mailto:<?php echo the_field('contact_email'); ?>"><?php echo the_field('contact_email'); ?></a>
                            </address>
                            <p class="item">  
                                <?php echo the_field('contact_label_social'); ?><br>
                                <a href="<?php echo the_field('contact_url_facebook'); ?>" target="_blank">Facebook</a><br>
                                <a href="<?php echo the_field('contact_url_twitter'); ?>" target="_blank">Twitter</a><br>
                                <a href="<?php echo the_field('contact_url_instagram'); ?>" target="_blank">Instagram</a> 
                            </p>
                        </div>
