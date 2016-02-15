        <footer class="footer pad-top-7 pad-bot-7 v-offset-7">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-content">
                            <div class="footer-message">
                                Being ourselves, together.
                            </div>
                            <div class="item pad-bot-4 " > 
                                <? include("nav-footer.php"); ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-content clearfix">
                            <address class="item">
                                Van Buren Youth Camp<br>
                                <a href="<?=$url_google_map?>" target="_blank">
                                    12370 45th St.<br>
                                    Bloomingdale, MI 49026<br>
                                </a>
                            </address>
                            <p class="item">  
                                Call Us<br>
                                <a href="tel:2695213855">269-521-3855</a>
                            </p>
                            <address class="item">
                                Email Us<br>
                                <a href="mailto:<?=$url_email_main?>">mail@vbyc.org</a>
                            </address>
                            <p class="item">  
                                Connect With Us<br>
                                <a href="<?=$url_facebook?>" target="_blank">Facebook</a><br>
                                <a href="<?=$url_twitter?>" target="_blank">Twitter</a><br>
                                <a href="<?=$url_instagram?>" target="_blank">Instagram</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/vendor/ekko-lightbox.min.js"></script>
        <script src="/js/main.js"></script>
        <script>
            $(document).ready(function() {
                <?=$javascript_insert?>
            });
        </script>

        <!-- Google Analytics: Add when go live: UA-8152298-1. -->
        <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create','UA-8152298-1','auto');ga('send','pageview');
        </script>
    </body>
</html>

        