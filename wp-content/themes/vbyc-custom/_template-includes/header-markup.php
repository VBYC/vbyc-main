
<? if ($page == 'home') { $logo_version = '-reverse'; } ?>

    <header class="header-main background-img-fluid v-offset-bot-0">

<? if ($page == 'home') { ?>
        <div class="hero-animation">
            <img src="images/heros/home-hero-fire-flame-1.jpg">
            <img src="images/heros/home-hero-fire-flame-2.jpg">
            <img src="images/heros/home-hero-fire-flame-3.jpg">
            <img src="images/heros/home-hero-fire-flame-4.jpg">
        </div>
    
<? } ?>

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


            <div class="container home-hero-text-container">
                <div class="home-hero-text">
                    <h1>
                        <span class="group-1 accent">Discovering</span>  
                        <span class="group-2">nature,</span> 
                        <span class="group-3">each other, </span>
                        <span class="group-4">&amp; ourselves.</span>
                    </h1>
                </div>
            </div>



<? } ?>

        
    </header>