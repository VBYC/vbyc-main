
                    <?php 
                    $show_mini_gallery = get_field('show_mini_gallery');
                    if ($show_mini_gallery == 'show'):
                        $image1 = get_field('featured_image_secondary_1');
                        $image2 = get_field('featured_image_secondary_2');
                        $image3 = get_field('featured_image_secondary_3');
                        $image4 = get_field('featured_image_secondary_4');

                        $image1_url = ( $image1['sizes']['gallery'] ? $image1['sizes']['gallery'] : $image1['url'] );

                        
                        if( !empty($image1) || !empty($image2) || !empty($image3) || !empty($image4) ): ?>

                        <div class="row">
                            <figure class="figure-images figure-zig-zag">
                                <div class="row figure-row">

                                <?php if( !empty($image1) ): ?>

                                    <div class="col-sm-2 img-container">
                                        <img src="<?php echo $image1_url; ?>" class="img-responsive img-item" alt="<?php echo $image1['alt']; ?>">
                                    </div>

                                <?php endif; ?>
                                <?php if( !empty($image2) ): ?>

                                    <div class="col-sm-4 img-container">
                                        <img src="<?php echo $image2['sizes']['gallery']; ?>" class="img-responsive img-item" alt="<?php echo $image2['alt']; ?>">
                                    </div>

                                <?php endif; ?>
                                <?php if( !empty($image3) ): ?>

                                    <div class="col-sm-4 img-container">
                                        <img src="<?php echo $image3['sizes']['gallery']; ?>" class="img-responsive img-item" alt="<?php echo $image3['alt']; ?>">
                                    </div>

                                <?php endif; ?>
                                <?php if( !empty($image4) ): ?>

                                    <div class="col-sm-2 img-container">
                                        <img src="<?php echo $image4['sizes']['gallery']; ?>" class="img-responsive img-item" alt="<?php echo $image4['alt']; ?>">
                                    </div>

                                <?php endif; ?>

                                </div>
                            </figure>
                        </div>

                        <?php endif; ?>
                    <?php endif; ?>