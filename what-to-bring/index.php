<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_what_to_bring;
    $page = $url_what_to_bring;
    $section = 'sessions';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    // $javascript_insert = '';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

	<main>    
        <section class="hero">
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/heros/what-to-bring.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">Sessions</p>
                                <h1 class="page-name">What to Bring</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>
        <section class="main-content">
            <div class="container"> 
                <article class="main-article">

                    <? if ($show_content_hero_image) { ?>
                    <div class="row">
                        <figure class="figure-images figure-zig-zag">
                            <!-- 1 column -->
                            <div class="row figure-row">
                                <div class="col-sm-2 img-container">
                                    <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div> 
                                <div class="col-sm-4 img-container">
                                    <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div> 
                                <div class="col-sm-4 img-container">
                                    <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div> 
                                <div class="col-sm-2 img-container">
                                    <img src="/images/template/grid-sample-3-lg.jpg" class="img-responsive img-item" alt=" " >
                                </div>         
                            </div><!-- /.row -->
                        </figure>
                    </div><!-- /.row -->
                    <? } ?>



                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-sm-offset-2">
                            <dl>
							    <dt class="list-term">
							        <h3 class="heading">Bed and Bath</h3>
							    </dt>
							    <dd class="list-definition">
							        <ul class="list-styled list-no-indent">
							            <li class="item">A fitted (twin size) bed sheet</li>
							            <li class="item">A flat (twin size) bed sheet</li>
							            <li class="item">Pillow and pillowcase</li>
							            <li class="item">Two or three warm blankets or a sleeping bag</li>
							            <li class="item">Towels - beach, bath, hand</li>
							            <li class="item">Washcloth</li>
							            <li class="item">Bag for dirty laundry</li>
							        </ul>
							    </dd>
							    <dt class="list-term">
							        <h3 class="heading">Bathroom Kit</h3>
							    </dt>
							    <dd class="list-definition">
							        <ul class="list-styled list-no-indent">
							            <li class="item">Soap</li>
							            <li class="item">Toothbrush &amp; toothpaste</li>
							            <li class="item">Comb</li>
							            <li class="item">Deodorant</li>
							            <li class="item">Sunscreen</li>
							            <li class="item">Shampoo</li>
							            <li class="item">Flip-flops for shower</li>
							            <li class="item">Lip balm</li>
							            <li class="item">Insect repellent</li>
							        </ul>
							    </dd>
                                <dt class="list-term">
                                    <h3 class="heading">Gear</h3>
                                </dt>
                                <dd class="list-definition">
                                    <ul class="list-styled list-no-indent">
                                        <li class="item">Books and magazines</li>
                                        <li class="item">Pencils and pens</li>
                                        <li class="item">Writing paper, envelops, stamps</li>
                                        <li class="item">Water bottle</li>
                                        <li class="item">Flashlight</li>
                                        <li class="item">Hobbies to share</li>
                                    </ul>
                                </dd>
							    
							</dl>
                        </div>




                        <div class="col-xs-12 col-sm-5">
                            <dl>
							    <dt class="list-term">
                                    <h3 class="heading">Clothes</h3>
                                </dt>
                                <dd class="list-definition">
                                    <ul class="list-styled list-no-indent">
                                        <li class="item">Bathing suit</li>
                                        <li class="item">Pajamas</li>
                                        <li class="item">Underwear</li>
                                        <li class="item">Long pants</li>
                                        <li class="item">Jeans</li>
                                        <li class="item">Shorts</li>
                                        <li class="item">T-shirts/tank tops</li>
                                        <li class="item">Jacket or sweatshirt</li>
                                        <li class="item">Rain jacket</li>
                                    </ul>
                                </dd>
	                            <dt class="list-term">
	                                <h3 class="heading">Headwear</h3>
	                            </dt>
	                            <dd class="list-definition">
	                                <ul class="list-styled list-no-indent">
	                                    <li class="item">Baseball cap</li>
	                                    <li class="item">Sun hat (opt)</li>
	                                    <li class="item">Bandannas</li>
	                                    <li class="item">Sunglasses</li>
	                                    <li class="item">Swim goggles (opt)</li>
	                                </ul>
	                            </dd>
	
                            	<dt class="list-term">
							        <h3 class="heading">Footwear</h3>
							    </dt>
							    <dd class="list-definition">
							        <ul class="list-styled list-no-indent">
							            <li class="item">Socks (lots of socks)</li>
							            <li class="item">Tennis shoes</li>
							            <li class="item">Sandals</li>
							        </ul>
							    </dd>
                                
	                            <dt class="list-term">
                                    <h3 class="heading">Camp Store Money</h3>
                                </dt>
                                <dd class="list-definition">
                                    <ul class="list-styled list-no-indent">
                                        <li class="item">Suggestion: $20-$40. </li>
                                        <? /*<li class="item"><a href="#">Visit our store page and pre-shop with your child.</a></li>*/ ?>
                                    </ul>
                                </dd>
                            </dl>
                        </div>

                    </div><!-- /.row -->

                    <hr class="divider-styled less-margin">

                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-4 col-sm-4">
                            <dl>
                            	<dt class="list-term">
                                    <h3 class="heading">Leave these at home</h3>
                                </dt>
                            </dl>
                        </div>
                    </div><!-- /.row -->



                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-4 col-sm-4">
                            <dl>   
                                <dd class="list-definition">
                                    <ul class="list-styled list-no-indent">
                                        <li class="item">pets</li>
                                        <li class="item">cell phones</li>
                                        <li class="item">pocket knives</li>
                                        <li class="item">electronic games</li>
                                        <li class="item">iPods (radios, cd or mp3 players)</li>
                                        <li class="item">skateboards</li>
                                        <li class="item">televisions</li>
                                        <li class="item">cell phones</li>
                                        <li class="item">peanut products (because of allergies, we are a peanut free environment)</li>
                                    </ul>
                                </dd>
                            </dl>
                            <p>*Camper's with their own <a href="/<?=$url_classes?>/#archery">archery</a> or <a href="/<?=$url_classes?>/#rifelry">rifelry</a> equipment may make arrangements with the director.</p>
                        </div>
                    </div><!-- /.row -->





                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 