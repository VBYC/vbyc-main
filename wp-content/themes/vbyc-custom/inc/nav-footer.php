<?php
    if ( has_nav_menu( 'footer' )   ) : ?>
        <?php if ( has_nav_menu( 'footer' ) ) : ?>
        

<div class="item pad-bot-4 ">
    <nav id="footer-nav">
        <div class="visible-xs-block title">Quick Links</div>

        <?php
            // footer navigation menu.
            wp_nav_menu( array(
                'menu_class'     => 'footer-nav list-inline',
                'theme_location' => 'footer',
            ) );
        ?>

    </nav>
</div>

    <?php endif; ?>
<?php endif; ?>      
