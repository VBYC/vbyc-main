<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_financial_aid;
    $page = $url_financial_aid;
    $section = 'sessions';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    // $javascript_insert = '';
?>
<? 
    $lorem = 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.'; 
    $lorem2 = ' non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. A at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'; 
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
                                <p class="h4 section-name text-uppercase">Sessions</p>
                                <h1 class="page-name">Financial Aid</h1>
                            </div>
                        </div>         
                    </div><!-- /.row -->
                     <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="hero-text">
                                <div class="description">
                                    <p>Thanks to donations from the community, businesses, 
                                    and individuals, we are able to offer financial aid
                                    to campers in need.</p>
                                </div> 
                            </div> 
                        </div>         
                    </div><!-- /.row -->
                </div>
            </div>
        </section>
        <section class="main-content">
            <div class="container"> 
                <article class="main-article">


                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h3 class="heading">How to apply</h3>
                            <div>
                                <ol>
                                  <li>Parents/guardians must write a letter that includes:
                                    <br>
                                    <br>
                                    <ul>
                                      <li>Why assistance is needed</li>
                                      <li><a href="/<?=$url_schedule?>/">Session name</a> </li>
                                      <li>How much of the camp tuition your family can contribute:
                                        <ul>
                                            <li>85%</li>
                                            <li>75%</li>
                                            <li>50%</li>
                                            <li>25%<br>
                                              <br>
                                              <em>*Funds are limited. Please pay as much as you can so we can serve as many children as possible</em>.<br>  
                                              <br>
                                            </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>The child must <strong>write a letter</strong>  about why they want to come to camp.<br>
                                    <br>
                                  Mail letters to:<br>
                                  Van Buren Youth Camp<br>
                                    12370 45th St.<br>
                                    Bloomingdale, MI 49026<br>
                                  </li>
                                </ol>
                                <p>Parents/guardians will be notified by mail if financial aid is awarded.</p>
                                <p> Funds are limited and are usually depleted by mid-summer so apply early!<br>
                                 
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    


                </article> 
            </div><!-- /.container -->
        </section>
    </main>

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 