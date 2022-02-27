<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="col-md-3">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger hidden" id="newsletterError"></div>

                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Latest Tweets</h4>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
                    <p>Please wait...</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                        <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</p></li>
                        <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <ul class="social-icons">
                        <li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
                        <li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
                        <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="index.html" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="public/img/logo-footer.png">
                    </a>
                </div>
                <div class="col-md-7">
                    <p>© Copyright 2015. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="page-faq.html">FAQ's</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Vendor -->
<script src="public/vendor/jquery/jquery.js"></script>
<script src="public/vendor/jquery.appear/jquery.appear.js"></script>
<script src="public/vendor/jquery.easing/jquery.easing.js"></script>
<script src="public/vendor/jquery-cookie/jquery-cookie.js"></script>
<script src="public/vendor/bootstrap/bootstrap.js"></script>
<script src="public/vendor/common/common.js"></script>
<script src="public/vendor/jquery.validation/jquery.validation.js"></script>
<script src="public/vendor/jquery.stellar/jquery.stellar.js"></script>
<script src="public/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="public/vendor/jquery.gmap/jquery.gmap.js"></script>
<script src="public/vendor/isotope/jquery.isotope.js"></script>
<script src="public/vendor/owlcarousel/owl.carousel.js"></script>
<script src="public/vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="public/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="public/vendor/vide/vide.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="public/js/theme.js"></script>

<!-- Specific Page Vendor and Views -->
<script src="public/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="public/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="public/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
<script src="public/js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="public/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="public/js/theme.init.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-12345678-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
-->
