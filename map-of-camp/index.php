<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/requirements.php"); ?> 
<? 
    $title = $title_map_of_camp ;
    $page = $url_map_of_camp ;
    $section = 'camp-life';
    $template = 'basic';
    $body_attributes = 'id="page-'.$page.'" class="section-'.$section.' template-'.$template.' has-sticky-main-nav has-sidenav "';
    $description = 'FPO description';
    // $javascript_insert = '';
?>
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header.php"); ?> 
<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/header-element.php"); ?>  

<main>   
    <img src="/images/pages/map-of-camp/map-of-camp.png" class="img-full-width" alt=" ">
</main>
 

<? include("".$_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?> 