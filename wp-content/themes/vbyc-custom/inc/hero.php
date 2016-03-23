    <section class="hero" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php 
        /* HERO IMAGE */ 
        if ( has_post_thumbnail() ) { 
            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-image.php"); 
        } ?>

        <div class="container-fluid hero-text-container clearfix">
             <div class="container">
                <?php    

                /* HERO HEADLINE */ 
                include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-headlines.php"); 

                /* HERO TEXT */ 
                if (!$hide_hero_intro) {
                    include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/hero-intro.php"); 
                }

                ?> 
            </div>
        </div>
    </section>