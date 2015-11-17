
    
    <? include("_template-includes/header.php"); ?> 
    <? include("_template-includes/header-markup.php"); ?>  
    <main>
        <section class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="images/template/hero.jpg" alt=" ">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <div class="hero-text">
                            <p class="h4 section-name text-uppercase">Camp Life</p>
                            <h1 class="page-name">Classes</h1>
                            <div class="description">
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                            </div>   
                        </div> 
                    </div>         
                </div><!-- /.row -->
            </div>
        </section>
        <section class="main-content">
            <div class="container"> 
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <aside id="sidenav" class="sidenav" >
                            <ul class="nav sidenav-list list-unstyled">
                                <li class="item" role="presentation">
                                    <a href="#archery" class="link sidenav-archery">Archery</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#arts-and-crafts" class="link sidenav-arts-and-crafts">Arts &amp; Crafts</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#canoeing-and-kayaking" class="link sidenav-canoeing-and-kayaking">Canoeing &amp; Kayaking</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#low-ropes" class="link sidenav-low-ropes">Low Ropes</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#nature" class="link sidenav-nature">Nature</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#rifelry" class="link sidenav-rifelry">Rifelry</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#song-and-dance" class="link sidenav-song-and-dance">Song &amp; Dance</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#sports" class="link sidenav-sports">Sports</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#swimming" class="link sidenav-swimming">Swimming</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#demo" class="link sidenav-archery">Leadership &amp; Counselor Workshop</a>
                                </li>
                                <li class="item" role="presentation">
                                    <a href="#demo" class="link sidenav-archery">White Pine - Early Leadership</a>
                                </li>
                            </ul>
                        </aside>
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            <ul class="content-list sidenav-anchor-target list-unstyled">
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
            hasSideNav : true
        });
    });
  </script>

<? include("_template-includes/footer.php"); ?> 
    
