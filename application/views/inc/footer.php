
    <!--=== Footer Version 1 ===-->
    <div class="footer-v1" style="margin-top:50px">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="<?php echo base_url();?>"><img id="logo-footer" class="footer-logo" src="<?php echo base_url();?>assets/img/tevabarosh_logo_transparent.png" alt=""></a>
                        <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>מאמרים אחרונים</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">תוכן מעולה</a>
                                    <small>מאי 8, 2014</small>
                                </li>
                                <li>
                                    <a href="#">תמונות נבחרות</a>
                                    <small>יוני 23, 2014</small>
                                </li>
                                <li>
                                    <a href="#">תנאים והגבלות</a>
                                    <small>ספטמבר 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>קישורים שימושיים</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">על עצמינו</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">פורטפוליו</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">מנויים</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">צור קשר</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>צור קשר</h2></div>
                        <address class="md-margin-bottom-40">
                            יצחק הלוי 9, חולון <br />
                            ישראל <br />
                            טל: 800 123 3456 <br />
                            פקס: 800 123 3456 <br />
                            אימייל: <a href="mailto:info@tevabarosh.co.il" class="">info@tevabarosh.co.il</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <!-- Social Links -->
        <div class="col-md-6">
            <ul class="footer-socials list-inline"  style="text-align:right; margin-right:170px" >
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Social Links -->
        <div class="copyright"  style="text-align:left">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2017 &copy; כל הזכויות שמורות.
                          <a href="http://tofraweb.com/">TofraWeb</a>  Developed by
                        </p>
                    </div>

                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->




<!-- JS Global Compulsory -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="<?php echo base_url();?>assets/plugins/back-to-top.js"></script>
<script src="<?php echo base_url();?>assets/plugins/smoothScroll.js"></script>
<script src="<?php echo base_url();?>assets/plugins/parallax-slider/js/modernizr.js"></script>
<script src="<?php echo base_url();?>assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script src="<?php echo base_url();?>assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<!-- JS Customizat -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/owl-carousel-rtl.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/style-switcher-rtl.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/parallax-slider.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        ParallaxSlider.initParallaxSlider();
        OwlRecentWorks.initOwlRecentWorksV1();
    });
</script>
<!--[if lt IE 9]>
    <script src="../assets/plugins/respond.js"></script>
    <script src="../assets/plugins/html5shiv.js"></script>
    <script src="../assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
