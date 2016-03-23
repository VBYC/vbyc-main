
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
            
        

      





            
            
                <!-- <ul class="navbar-list list-unstyled clearfix">
                    
                    <li class="item">
                        <div class="link normal">Sessions</div>
                        <ul class="navbar-list-sub list-unstyled">
                             <li class="item-sub">
                                <? $i = $url_schedule ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Schedule
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_parent_resources ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Parent Resources
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_what_to_bring ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    What To Bring
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_financial_aid ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Financial Aid
                                </a>
                             </li>
                        </ul>
                    </li>

                    <li class="item">
                        <div class="link normal">Camp Life</div>
                        <ul class="navbar-list-sub list-unstyled">
                             <li class="item-sub">
                                <? $i = $url_typical_day ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Typical Day
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_activities ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Activities
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_classes ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Classes
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_facilities ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Facilities
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_explore_camp ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Explore Camp
                                </a>
                             </li>
                        </ul>
                    </li>
                    <li class="item">
                        <? $i = $url_about ?>
                        <div class="link normal">About Us</div>
                        <ul class="navbar-list-sub list-unstyled">
                             <li class="item-sub duplicate-of-parent">
                                <? $i = $url_about ?>
                                <a href="/<?=$i?>/" class="link-sub  duplicate-of-parent">
                                    About Us
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_head_honchos ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Who's in Charge?
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_meet_the_director ?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    Meet the Director
                                </a>
                             </li>
                             <li class="item-sub">
                                <? $i = $url_faqs?>
                                <a href="/<?=$i?>/" class="link-sub ">
                                    FAQs
                                </a>
                             </li>
                        </ul>
                    </li>
                    <li class="item">
                        <? $i = $url_alumni ?>
                        <a href="/<?=$i?>/" class="link normal ">
                            Alumni
                        </a>
                    </li>
                    <li class="item">
                        <? $i = $url_contact ?>
                        <a href="/<?=$i?>/" class="link normal visible-xs ">
                            Contact Us
                        </a>
                    </li>
                    <li class="item">
                        <? $i = $url_donate ?>
                        <a href="/<?=$i?>/" class="link normal ">
                            Donate
                        </a>
                    </li>
                    <li class="item">
                        <a href="<?=$url_register?>" class="link emphasize">
                            Register
                        </a>
                    </li>
                </ul> -->                        
            </nav>
    <?php endif; ?>
<?php endif; ?>      