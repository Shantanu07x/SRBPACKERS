<?php
if (!defined("MySite")) {
    die('Direct Access Denied.');
}
?>
<!--<< Footer Section Start >>-->
<footer class="footer-section border-section-top">
    <div class="footer-widgets-wrapper footer-bg">
        <div class="shape-1">
            <img src="assets/media/shape/footer/footer-shape-1.webp" alt="footer background shape icon">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>About Us</h3>
                        </div>
                        <div class="footer-content">
                            <p>
                                Your trusted partner for seamless moving experiences. Expertise in domestic and international relocations. Making your move stress-free.</p>
                            <p>Owener name : <strong>Exmen. Shyam Singh</strong></p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="<?php echo HOME_PAGE_URL; ?>" title="Go to Home Page">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo ABOUTUS_PAGE_URL; ?>" title="Learn About Us">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo OUR_GALLERY_PAGE_URL; ?>" title="View Our Gallery">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Our Gallery
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo FAQ_PAGE_URL; ?>" title="Read Frequently Asked Questions">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    FAQ's
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo CLIENT_REVIEW_PAGE_URL; ?>" title="Check Client Reviews">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Client Review
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo TERMS_AND_CONDITION_PAGE_URL; ?>" title="View Terms and Conditions">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Terms and Condition
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo PRIVACY_POLICY_PAGE_URL; ?>" title="Read Our Privacy Policy">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single-footer-widget style-margin">
                        <div class="widget-head">
                            <h3>Our Most Services</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>" title="Explore Transportation Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Transportation
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo PACKING_AND_MOVING_SERVICES_PAGE_URL; ?>" title="Discover Packing and Moving Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Packing and Moving
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>" title="Learn about Loading and Unloading Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Loading and Unloading
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>" title="View Home Shifting Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Home Shifting
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>" title="Browse Office Shifting Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Office Shifting
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>" title="Explore Car & Bike Transportation Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Car & Bike Transportation
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>" title="Discover WareHouse Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    WareHouse Services
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-content">
                            <ul class="contact-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <b>Address : </b>
                                    <?php
                                    if (isset($footer_address)) {
                                        echo $footer_address;
                                    } else {
                                        echo PRIMARY_ADDRESS;
                                    }
                                    ?>
                                </li>
                                <li style="margin-bottom: 6px;">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <a onclick="gtag_report_conversion_call_btn();" href="tel:0<?php echo PRIMARY_MOBILE; ?>" title="Call us now on +91 <?php echo PRIMARY_MOBILE; ?>">
                                        +91 <?php echo PRIMARY_MOBILE; ?>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" title="Send us an email">
                                        <span><?php echo EMAIL_ADDRESS; ?></span>
                                    </a>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="theme-btn hover-white mt-4 quickEnquirybtn" title="Get A Quote">
                                Get A Quote
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    Copyright © <?php echo date("Y"); ?> <a href="<?php echo BASE_URL; ?>" title="Visit SRB Group Packers and Movers Website">SRB Group Packers and Movers</a> All Rights Reserved.
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="http://www.gocube.in" target="_blank" title="Visit GoCube Solution India Website">
                            Designed and Developed by GoCube Solution India
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="javascript:void(0);" id="scrollUp" class="scroll-icon" title="Scroll to Top">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
</footer>