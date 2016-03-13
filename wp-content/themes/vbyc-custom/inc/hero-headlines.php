                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero-text">
                            <?php 
                                /* Section name */ 
                                if ( get_the_title($post->post_parent) !== get_the_title($post) ) { 
                                    $section_title = get_the_title($post->post_parent);
                                    echo '<p class="h4 section-name text-uppercase">'.$section_title.'</p>'; 
                                 } 
                      
                                /* Page name */
                                the_title( '<h1 class="page-name">', '</h1>' ); 
                            ?>
                        </div>
                    </div>         
                </div><!-- /.row -->