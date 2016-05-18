                        <div> 

                            <?php
                            // Start the loop.
                            while ( have_posts() ) : the_post();

                                // Include the page content template.
                                the_content(); 

                            // End the loop.
                            endwhile;
                            ?>

                        </div>