
<? if ($page == 'home') { $logo_version = '-reverse'; } ?>

    <header class="header-main v-offset-bot-0">

<!-- 
<? if ($page == 'home') { ?>
        <div class="container-fluid">
<? } else { ?>
        
<? }  ?> -->
        <div class="container">
            <div class="row">
                <div class="main-logo-container col-xs-9 col-sm-12 col-md-4 text-center">
                    <a href="/" title="Home">
                        <!-- TODO: Change color with CSS http://codepen.io/helmemat/pen/ndJgz -->
                        <!-- TODO: Use just 1 file for icon too -->
                        <img src="images/logos/vbyc-logo-icon<?=$logo_version?>.svg" alt="VBYC logo" class="main-logo main-logo-icon">
                        <img src="images/logos/vbyc-logo<?=$logo_version?>.svg" alt="VBYC logo" class="main-logo main-logo-normal img-responsive">
                    </a>
                </div>
                <div class="col-xs-3 col-sm-12 col-md-8">
                    <? include("_template-includes/nav-main-toggle.php"); ?> 
                </div>
                <div class="col-xs-12 col-md-8">
                    <? include("_template-includes/nav-main.php"); ?> 
                </div>
            </div><!-- /.row -->

        </div>

<? if ($page == 'home') { ?>


        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="home-hero-text">
                        <h1>
                            <span class="group-1 accent">Discovering</span>  
                            <span class="group-2">nature,</span> 
                            <span class="group-3">each other, </span>
                            <span class="group-4 accent">and</span> 
                            <span class="group-5">ourselves.</span>
                        </h1>
                    </div>
                </div>
            </div>
</div>


<? } else { ?>
            <div class="container-fluid hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="images/template/hero-basic.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>

            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <p class="h4 section-name text-uppercase">Section</p>
                                <h1 class="page-name">Template - Basic</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                </div> 
                                <a href="#" class="hero-cta">Call to action</a>  
                            </div> 
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        

<? } ?>


    </header>