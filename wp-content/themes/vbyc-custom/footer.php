
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	

	<footer class="footer pad-top-7 pad-bot-7 v-offset-7">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-content">
                        <div class="footer-message">
                            <?php the_field('footer_headline', 'option'); ?>
                        </div>
                        <?php   

                        /* FOOTER NAV */ 
                        include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/nav-footer.php");
                        
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-content clearfix">
                        <?php   

                            /* FOOTER CONTACT INFO */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/contact-info.php");
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- .site -->

<?php wp_footer(); ?>

<?php  
    // Initiate Side Nav Javascript
    $which_template = basename( get_page_template() );
    if ( $which_template == 'schedule.php' || $which_template == 'with-side-nav.php' ) :
        $js_calls = ' hasSidenav : "true", ';
    endif;
    
    // Initiate High/Low Res Hero Home Javascript
    if ( is_front_page() ) : 

        // Featured Image
        if (has_post_thumbnail( $post->ID ) ): 
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            $featured_image_url =  $featured_image[0]; 
        endif;

        if (has_post_thumbnail( $post->ID ) ): 
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
            $featured_image_url = $featured_image[0]; 
            if ($featured_image_url) : 
                $js_calls .= ' highResPath : "'.$featured_image_url.'", ';
            endif;
        endif; 
    endif; 
?>
<script>
    jQuery(document).ready(function() {
        vbyc.util.init({<?=$js_calls?>});
    });
</script>
<script>
        // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        // e.src='//www.google-analytics.com/analytics.js';
        // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        // ga('create','UA-8152298-1','auto');ga('send','pageview');
</script>
</body>
</html>
