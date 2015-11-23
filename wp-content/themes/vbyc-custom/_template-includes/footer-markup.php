    <footer class="footer pad-top-5 pad-bot-5 v-offset-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-message">
                        You belong to youth camp, and youth camp belongs to you.
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-content">
                        <div class="item"> 
                            <? include("nav-footer.php"); ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-content clearfix">
                        <p class="item">  
                            Van Buren Youth Camp<br>
                            <a href="#">
                                12370 45th St.<br>
                                Bloomingdale, MI 49026<br>
                            </a>
                        </p>
                        <p class="item">  
                            Call Us<br>
                            <a href="#">269-521-3855</a>
                        </p>
                        <p class="item">  
                            Email Us<br>
                            <a href="#">hello@vbyc.org</a>
                        </p>
                        <p class="item">  
                            Connect With Us<br>
                            <a href="#">Facebook</a><br>
                            <a href="#">Twitter</a><br>
                            <a href="#">Instagram</a> 
                        </p>
                    </div>
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