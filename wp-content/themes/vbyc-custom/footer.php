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
                        <div class="item pad-bot-4 " > 
                            <?php   

                            /* FOOTER NAV */ 
                            include("".$_SERVER["DOCUMENT_ROOT"]."/wp-content/themes/vbyc-custom/inc/nav-footer.php");
                            
                            ?>
                        </div>
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
<? /*
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/vendor/ekko-lightbox.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $(document).ready(function() {
            vbyc.util.init({hasSidenav : false});
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
    */ ?>


</div><!-- .site -->

<?php wp_footer(); ?>



<script>
    jQuery(document).ready(function() {
        vbyc.util.init({hasSidenav : false});
    });
</script>

<?php if ( is_front_page() ) { ?>
<script>
    jQuery(document).ready(function() {
        vbyc.util.init({highResPath : "/images/heroes/home.jpg"});
    });
</script>

<? } ?>



</body>
</html>
