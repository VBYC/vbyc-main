<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = 'FPO title';
    $page = 'fpo-page';
    $template = 'basic-with-side-nav';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    $is_selecetd = 'selected';
    $javascript_insert = 
    'vbyc.util.init({hasSidenav : true});';
 
?>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

    <main class="main-content/-container" data-spy="scroll" data-target="#sidenav">
        <section class="hero">
            <div class="hero-image-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hero-image">
                            <img src="/images/template/hero-basic.jpg" alt=" ">
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
                    <div class="col-xs-12 col-sm-offset-4 col-sm-8 "> 
                        <h2 class="heading-category">Category</h2>
                    </div>
                </div>
            </div>

            

            <div class="container scroll-spy-container"> 
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3"> 
                        <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/nav-side-template.php"); ?> 
                    </div><!-- /column -->

                    <div class="col-xs-12 col-sm-8">
                        <article class="main-article">
                            
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li id="archery" class="item">                                    
                                    <h3 class="heading archery">Archery</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>
                                </li>
                                <li id="arts-and-crafts" class="item">
                                    <h3 class="heading arts-and-crafts">Arts &amp; Crafts</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                           
                                </li>
                                <li id="canoeing-and-kayaking" class="item">
                                    <h3 class="heading canoeing-and-kayaking">Canoeing &amp; Kayaking</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                         
                                </li>
                                <li id="low-ropes" class="item">
                                    <h3 class="heading low-ropes">Low Ropes</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                          
                                </li>
                                <li id="nature" class="item">
                                    <h3 class="heading nature">Nature</h3>  
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                         
                                </li>
                            </ul>
                            <h2 class="heading-category">Category</h2>
                            <ul class="content-list list-multiple-details sidenav-anchor-target list-unstyled">
                                <li id="rifelry" class="item">
                                    <h3 class="heading rifelry">Rifelry</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                         
                                </li>
                                <li id="song-and-dance" class="item">
                                    <h3 class="heading song-and-dance">Song &amp; Dance</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                        
                                </li>
                                <li id="sports" class="item">
                                    <h3 class="heading sports">Sports</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                          
                                </li>
                                <li id="swimming" class="item">
                                    <h3 class="heading swimming">Swimming</h3>
                                    <? include("".$_SERVER['DOCUMENT_ROOT']."/includes/classes-content.php"); ?>                         
                                </li>
                            </ul>
                        </article> 
                    </div><!-- /column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>


<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 