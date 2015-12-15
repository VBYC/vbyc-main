                    <!-- Main -->
                    <nav id="main-navbar" class="navbar navbar-nav text-center collapse navbar-collapse" role="navigation">
                        <ul class="navbar-list list-unstyled clearfix">
                            <li class="item">
                                <a href="#" class="link normal">Sessions</a>
                                <ul class="navbar-list-sub list-unstyled">
                                     <li class="item-sub">
                                        <a href="<?=$url_schedule?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Schedule
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_what_to_bring?>" class="link-sub <? check_if_active('what-to-bring',$page); ?>">
                                            What To Bring
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_preparing_for_camp?>" class="link-sub <? check_if_active('preparing-for-camp/',$page); ?>">
                                            Preparing For Camp
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_financial_aid?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Financial Aid
                                        </a>
                                     </li>
                                </ul>
                            </li>

                            


                            <li class="item <?=$is_selecetd?>">
                                <a href="#" class="link normal">Camp Life</a>
                                <ul class="navbar-list-sub list-unstyled">
                                     <li class="item-sub">
                                        <a href="<?=$url_typical_day?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Typical Day
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_activities?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Activities
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_classes?>" class="link-sub <? check_if_active('schedule',$page); ?> <?=$is_selecetd?>">
                                            Classes
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_facilities?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Facilities
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_map_of_camp?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Map
                                        </a>
                                     </li>
                                </ul>
                            </li>
                            <li class="item">
                                <a href="/about/" class="link normal">About Us</a>
                                <ul class="navbar-list-sub list-unstyled">
                                     <li class="item-sub">
                                        <a href="<?=$url_blog?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            News
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_whos_on_charge?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Who's in Charge?
                                        </a>
                                     </li>
                                     <li class="item-sub">
                                        <a href="<?=$url_accredidations?>" class="link-sub <? check_if_active('schedule',$page); ?>">
                                            Accredidations
                                        </a>
                                     </li>
                                </ul>
                            </li>
                            <li class="item"><a href="<?=$url_alumni?>" class="link normal">Alumni</a></li>
                            <li class="item"><a href="<?=$url_contact?>" class="link normal visible-xs">Contact Us</a></li>
                            <li class="item"><a href="<?=$url_donate?>" class="link normal">Donate</a></li>
                            <li class="item"><a href="<?=$url_register?>" class="link emphasize" target="_blank">Register</a></li>
                        </ul>                        
                    </nav>