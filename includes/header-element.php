<? if ($page == 'home') { $logo_version = '-reverse'; } ?>

    <header class="header-main background-img-fluid v-offset-bot-0">

            <div class="container">
                <div class="row">
                    <div class="main-logo-container navbar-toggle-container col-xs-12 col-md-4 text-center">
                        <a href="/" title="Home">
                            <!-- TODO: Change color with CSS http://codepen.io/helmemat/pen/ndJgz -->
                            <!-- TODO: Use just 1 file for icon too -->
                            <img src="/images/logos/vbyc-logo-icon<?=$logo_version?>.svg" alt="VBYC logo" class="main-logo main-logo-icon">
                            <img src="/images/logos/vbyc-logo<?=$logo_version?>.svg" alt="VBYC logo" class="main-logo main-logo-normal img-responsive">
                        </a>
                        <? include("".$_SERVER["DOCUMENT_ROOT"]."/includes/nav-main-toggle.php"); ?> 
                    </div>
               
                    <div class="col-xs-12 col-md-8">
                        <? include("".$_SERVER["DOCUMENT_ROOT"]."/includes/nav-main.php"); ?> 
                    </div>
                </div><!-- /.row -->

            </div>

<? if ($page == 'home') { ?>
            <div class="container home-hero-text-outer">
                <div class="home-hero-text">
                    <div class="container home-hero-text-inner">
                        <h1>
                            <span class="group-1">Discovering</span>  
                            <span class="group-2">nature,</span> 
                            <span class="group-3">each other, </span>
                            <span class="group-4">&amp; ourselves.</span>
                        </h1>
                    </div>
                </div>
            </div>
<? } ?>
        
    </header>