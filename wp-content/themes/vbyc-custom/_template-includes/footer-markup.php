<footer class="footer pad-top-7 pad-bot-5 v-offset-6">
        <div class="container">
            <div class="row">
                <div class="item col-xs-12 col-sm-4 col-md-3">  
                    Van Buren Youth Camp<br>
                    <a href="#">
                        12370 45th St.<br>
                        Bloomingdale, MI 49026<br>
                    </a>
                    <a href="#">Get Directions</a>
                </div>


                <div class="item footer-contact col-xs-12 col-sm-7 col-md-2">
                    <p class="contact-item">  
                        Call Us<br>
                        <a href="#">269-521-3855</a>
                    </p>

                    <p class="contact-item">  
                        Email Us<br>
                        <a href="#">hello@vbyc.org</a>
                    </p>
                </div>

                

                <div class="item col-xs-12 col-md-6"> 
                    <? include("_template-includes/footer-nav.php"); ?> 
                </div>
            </div>
        </div>
    </footer>





        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/ekko-lightbox.js"></script>

        <? /*
        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
                        onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
                        }
                    });
                });

                //Programatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

                // navigateTo
                $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                    event.preventDefault();

                    var lb;
                    return $(this).ekkoLightbox({
                        onShown: function() {

                            lb = this;

                            $(lb.modal_content).on('click', '.modal-footer a', function(e) {

                                e.preventDefault();
                                lb.navigateTo(2);

                            });

                        }
                    });
                });


            });
        </script>
        */ ?>

        <script src="js/main.js"></script>