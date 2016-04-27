        <div class="hero-image-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image">
                        <?php
                            if ( the_post_thumbnail('featured') ) :
                                the_post_thumbnail('featured');
                            else:
                                the_post_thumbnail('full');
                            endif;
                        ?>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
        