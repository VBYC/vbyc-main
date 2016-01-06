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
                        <div class="col-xs-12 col-sm-4">
                            <dl>
							    <dt class="list-term">
							        <h3 class="heading">Bed and Bath</h3>
							    </dt>
							    <dd class="list-definition">
							        <ul class="list-styled list-no-indent">
							            <li id="XXX" class="item">A fitted (twin size) bed sheet</li>
							            <li id="XXX" class="item">A flat (twin size) bed sheet</li>
							            <li id="XXX" class="item">Pillow and pillowcase</li>
							            <li id="XXX" class="item">Two or three warm blankets or a sleeping bag</li>
							            <li id="XXX" class="item">Towels - beach, bath, hand</li>
							            <li id="XXX" class="item">Washcloth</li>
							            <li id="XXX" class="item">Bag for dirty laundry</li>
							        </ul>
							    </dd>
							    <dt class="list-term">
							        <h3 class="heading">Bathroom Kit</h3>
							    </dt>
							    <dd class="list-definition">
							        <ul class="list-styled list-no-indent">
							            <li id="XXX" class="item">Soap</li>
							            <li id="XXX" class="item">Toothbrush &amp; toothpaste</li>
							            <li id="XXX" class="item">Comb</li>
							            <li id="XXX" class="item">Deodorant</li>
							            <li id="XXX" class="item">Sunscreen</li>
							            <li id="XXX" class="item">Shampoo</li>
							            <li id="XXX" class="item">Flip-flops for shower</li>
							            <li id="XXX" class="item">Lip balm</li>
							            <li id="XXX" class="item">Insect repellent</li>
							        </ul>
							    </dd>
							    
							</dl>
                        </div>




                        <div class="col-xs-12 col-sm-4">
                            <dl>
	                            
							    <dt class="list-term">
	                                <h3 class="heading">Clothes</h3>
	                            </dt>
	                            <dd class="list-definition">
	                                <ul class="list-styled list-no-indent">
	                                    <li id="XXX" class="item">Bathing suit</li>
	                                    <li id="XXX" class="item">Pajamas</li>
	                                    <li id="XXX" class="item">Underwear</li>
	                                    <li id="XXX" class="item">Long pants</li>
	                                    <li id="XXX" class="item">Jeans</li>
	                                    <li id="XXX" class="item">Shorts</li>
	                                    <li id="XXX" class="item">T-shirts/tank tops</li>
	                                    <li id="XXX" class="item">Jacket or sweatshirt</li>
	                                    <li id="XXX" class="item">Rain jacket</li>
	                                </ul>
	                            </dd>
	                            <dt class="list-term">
	                                <h3 class="heading">Headwear</h3>
	                            </dt>
	                            <dd class="list-definition">
	                                <ul class="list-styled list-no-indent">
	                                    <li id="XXX" class="item">Baseball cap</li>
	                                    <li id="XXX" class="item">Sun hat (opt)</li>
	                                    <li id="XXX" class="item">Bandannas</li>
	                                    <li id="XXX" class="item">Sunglasses</li>
	                                    <li id="XXX" class="item">Swim goggles (opt)</li>
	                                </ul>
	                            </dd>
	                            
	                        </dl>
                        </div>



                        <div class="col-xs-12 col-sm-4">
                            <dl>
                            	<dt class="list-term">
							        <h3 class="heading">Footwear</h3>
							    </dt>
							    <dd class="list-definition">
							        <ul class="list-styled list-no-indent">
							            <li id="XXX" class="item">Socks (lots of socks)</li>
							            <li id="XXX" class="item">Tennis shoes</li>
							            <li id="XXX" class="item">Sandals</li>
							        </ul>
							    </dd>
                                <dt class="list-term">
	                                <h3 class="heading">Gear</h3>
	                            </dt>
	                            <dd class="list-definition">
	                                <ul class="list-styled list-no-indent">
	                                    <li id="XXX" class="item">Books and magazines</li>
	                                    <li id="XXX" class="item">Pencils and pens</li>
	                                    <li id="XXX" class="item">Writing paper, envelops, stamps</li>
	                                    <li id="XXX" class="item">Water bottle</li>
	                                    <li id="XXX" class="item">Flashlight</li>
	                                    <li id="XXX" class="item">Hobbies to share</li>
	                                </ul>
	                            </dd>
	                            <dt class="list-term">
                                    <h3 class="heading">Camp Store Money</h3>
                                </dt>
                                <dd class="list-definition">
                                    <ul class="list-styled list-no-indent">
                                        <li id="XXX" class="item">Suggestion: $20-$40. </li>
                                        <li id="XXX" class="item"><a href="#">Visit our store page and pre-shop with your child.</a></li>
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
                                        <li id="XXX" class="item">pets</li>
                                        <li id="XXX" class="item">cell phones</li>
                                        <li id="XXX" class="item">pocket knives</li>
                                        <li id="XXX" class="item">electronic games</li>
                                        <li id="XXX" class="item">iPods (radios, cd or mp3 players)</li>
                                        <li id="XXX" class="item">skateboards</li>
                                        <li id="XXX" class="item">televisions</li>
                                        <li id="XXX" class="item">cell phones</li>
                                        <li id="XXX" class="item">peanut products (because of allergies, we are a peanut free environment)</li>
                                    </ul>
                                </dd>
                            </dl>
                            <p>*Camper's with their own <a href="<?=$url_classes?>#archery">archery</a> or <a href="<?=$url_classes?>#riflery">riflery</a> equipment may make arrangements with the director.</p>
                        </div>
                    </div><!-- /.row -->





                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 