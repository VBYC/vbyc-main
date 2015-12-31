<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_contact;
    $page = $url_contact;
    $section = $url_contact;
    $template = 'basic-with-side-nav';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    // $javascript_insert = '';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

 <main>    
        <section class="hero">
   
            <div class="container-fluid hero-text-container clearfix">
                 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero-text">
                                <h1 class="page-name">Contact Us</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>
        <section class="main-content">
            <div class="container"> 
                <article class="main-article">
     
                    <div class="col group-1">
                        <address>
                            Van Buren Youth Camp<br>
                            <a href="<?=$url_google_map?>" target="_blank">
                                12370 45th St.<br>
                                Bloomingdale, MI 49026<br>
                            </a>
                        </address>
                    </div>
                    <div class="col group-2">
                        <p> 
                            Email Us<br>
                            <a href="mailto:<?=$url_email_main?>"><?=$url_email_main?></a><br>
                            <a href="mailto:<?=$url_email_director?>"><?=$url_email_director?></a>
                        </p>
                    </div>
                    <div class="col group-3">
                         <p>  
                            Call Us<br>
                            <a href="#">269-521-3855</a>
                        </p>
                        <p>  
                            Fax Us<br>
                            <a href="#">269-521-6668</a>
                        </p>
                    </div>
                    <div class="col group-4">
                        Connect With Us<br>
                        <a href="<?=$url_facebook?>" target="_blank">Facebook</a><br>
                        <a href="<?=$url_twitter?>" target="_blank">Twitter</a><br>
                        <a href="<?=$url_instagram?>" target="_blank">Instagram</a> 
                    </div>
                       
                </article> 
                      <div class="row">
                        <div class="col-xs-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d11790.057700992913!2d-85.9865204!3d42.3741866!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x88175c449f668721%3A0xae74d2152f48a756!2sVan+Buren+Youth+Camp%2C+12370+45th+St%2C+Bloomingdale%2C+MI+49026!3m2!1d42.3741866!2d-85.98652039999999!5e0!3m2!1sen!2sus!4v1451506620464" width="100%" height="600" frameborder="0" style="border:0"  align="center" allowfullscreen></iframe>
                        </div>
                        
                    </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 