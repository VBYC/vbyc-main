        <div class="hero-image-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image">
                        <?php
                            if ( has_post_thumbnail() )  {
                                // If there is a correclt sized featured image available (1440px wide), show that. Otherwise, get the big one.
                                $image_data = wp_get_attachment_image_src( get_post_thumbnail_id(), 'featured' ); 
                                $image_width = $image_data[1]; // thumbnail's width       
                                if ( ($image_width == 1440 ) ) {
                                    the_post_thumbnail('featured');
                                } else { 
                                    the_post_thumbnail('full');
                                }
                            }
                        ?>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
        