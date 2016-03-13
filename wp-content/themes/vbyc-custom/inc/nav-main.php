<?php

    if ( has_nav_menu( 'primary' )   ) : ?>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <!-- Main -->
            <nav id="main-navbar" class="navbar navbar-nav text-center collapse navbar-collapse" role="navigation">
                <?php
                    // Primary navigation menu.
                    wp_nav_menu( array(
                        'menu_class'     => 'nav-menu',
                        'theme_location' => 'primary',
                    ) );
                ?>
            </nav>
    <?php endif; ?>
<?php endif; ?>      