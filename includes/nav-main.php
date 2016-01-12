                    <!-- Main -->
                    <nav id="main-navbar" class="navbar navbar-nav text-center collapse navbar-collapse" role="navigation">
                        <ul class="navbar-list list-unstyled clearfix">
                            
                            <li class="item <? check_if_selected('sessions',$section); ?>">
                                <div class="link normal">Sessions</div>
                                <ul class="navbar-list-sub list-unstyled">
                                     <li class="item-sub">
                                        <? $i = $url_schedule ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Schedule
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_preparing_for_camp ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Preparing For Camp
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_what_to_bring ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            What To Bring
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_financial_aid ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Financial Aid
                                        </a>
                                     </li>
                                </ul>
                            </li>

                            <li class="item <? check_if_selected('camp-life',$section); ?>">
                                <div class="link normal <? check_if_selected('camp-life',$section); ?>">Camp Life</div>
                                <ul class="navbar-list-sub list-unstyled">
                                     <li class="item-sub">
                                        <? $i = $url_typical_day ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Typical Day
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_activities ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Activities
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_classes ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Classes
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_facilities ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Facilities
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_map_of_camp ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Map
                                        </a>
                                     </li>
                                </ul>
                            </li>
                            <li class="item <? check_if_selected('about',$section); ?>">
                                <? $i = $url_about ?>
                                <div class="link normal">About Us</div>
                                <ul class="navbar-list-sub list-unstyled">
                                     <li class="item-sub duplicate-of-parent">
                                        <? $i = $url_about ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?> duplicate-of-parent">
                                            About Us
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_whos_in_charge ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Who's in Charge?
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_meet_the_director ?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            Meet the Director
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <? $i = $url_faqs?>
                                        <a href="/<?=$i?>/" class="link-sub <? check_if_selected($i,$page); ?>">
                                            FAQs
                                        </a>
                                     </li>
                                </ul>
                            </li>
                            <li class="item <? check_if_selected('alumni',$section); ?>">
                                <? $i = $url_alumni ?>
                                <a href="/<?=$i?>/" class="link normal <? check_if_selected($i,$page); ?>">
                                    Alumni
                                </a>
                            </li>
                            <li class="item <? check_if_selected('contact',$section); ?>">
                                <? $i = $url_contact ?>
                                <a href="/<?=$i?>/" class="link normal visible-xs <? check_if_selected($i,$page); ?>">
                                    Contact Us
                                </a>
                            </li>
                            <li class="item <? check_if_selected('donate',$section); ?>">
                                <? $i = $url_donate ?>
                                <a href="/<?=$i?>/" class="link normal <? check_if_selected($i,$page); ?>">
                                    Donate
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?=$url_register?>" class="link emphasize" target="_blank">
                                    Register
                                </a>
                            </li>
                        </ul>                        
                    </nav>