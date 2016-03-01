<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_error;
    $page = $url_error;
    $section = '';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = $description_contact;
    // $javascript_insert = '';
?>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main>    
        <section class="hero">
   
            <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                               <h1 class="page-name">404</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <h3>Sorry camper!</h3>
                                    <p>Looks like this page doesn't exist.</p>
                                    <p><a href="/">Return to VBYC</a></p>
                                </div> 
                            </div> 
                        </div>         
                    </div><!-- /.row -->
                </div>
        </section>
        
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 