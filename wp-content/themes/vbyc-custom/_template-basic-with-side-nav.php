
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
    <main>
        <section class="hero">
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
                                <h1 class="page-name">Template - Basic with Side Nav</h1>
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
        </section>

        
        <section class="main-content">
            <div class="container"> 
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <? include("_template-includes/nav-side.php"); ?> 
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            <h2 class="heading-category">Category</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li id="archery" class="item">                                    
                                    <h3 class="heading archery">Archery</h3>
                                    <? include("_template-includes/classes-content.php"); ?>
                                </li>
                                <li id="arts-and-crafts" class="item">
                                    <h3 class="heading arts-and-crafts">Arts &amp; Crafts</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                           
                                </li>
                                <li id="canoeing-and-kayaking" class="item">
                                    <h3 class="heading canoeing-and-kayaking">Canoeing &amp; Kayaking</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                         
                                </li>
                                <li id="low-ropes" class="item">
                                    <h3 class="heading low-ropes">Low Ropes</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                          
                                </li>
                                <li id="nature" class="item">
                                    <h3 class="heading nature">Nature</h3>  
                                    <? include("_template-includes/classes-content.php"); ?>                         
                                </li>
                            </ul>
                            <h2 class="heading-category">Category</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li id="rifelry" class="item">
                                    <h3 class="heading rifelry">Rifelry</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                         
                                </li>
                                <li id="song-and-dance" class="item">
                                    <h3 class="heading song-and-dance">Song &amp; Dance</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                        
                                </li>
                                <li id="sports" class="item">
                                    <h3 class="heading sports">Sports</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                          
                                </li>
                                <li id="swimming" class="item">
                                    <h3 class="heading swimming">Swimming</h3>
                                    <? include("_template-includes/classes-content.php"); ?>                         
                                </li>
                            </ul>
                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>

<? include("_template-includes/footer-markup.php"); ?>

    <script>
    $(document).ready(function() {
        vbyc.util.init({
            hasSidenav : true
        });
    });
  </script>

<? include("_template-includes/footer.php"); ?> 
    
