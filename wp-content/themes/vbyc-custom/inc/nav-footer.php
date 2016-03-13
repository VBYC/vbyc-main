<?php

    if ( has_nav_menu( 'footer' )   ) : ?>

        <?php if ( has_nav_menu( 'footer' ) ) : ?>
        
                
       




<div class="item pad-bot-4 ">
    <nav id="footer-nav">
        <div class="visible-xs-block title">Quick Links</div>
 <!--        <ul class="footer-nav list-inline">
            <li class="nav-item"><a href="/contact/" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="/faqs/" class="nav-link">FAQ</a></li>
            
            <li class="nav-item"><a href="/rent-camp/" class="nav-link">Rent for Events</a></li>
            <li class="nav-item"><a href="https://vanburen.campintouch.com/ui/forms/application/staff/App" class="nav-link">Work Here</a></li>
            <li class="nav-item"><a href="https://vanburen.campintouch.com/v2/login.aspx" class="nav-link">Login</a></li>
        </ul> -->

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
