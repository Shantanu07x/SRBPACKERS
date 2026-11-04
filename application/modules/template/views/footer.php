<!--<< Footer Section Start >>-->
<footer class="footer-section border-section-top">
    <div class="footer-widgets-wrapper footer-bg">
        <div class="shape-1">
            <img src="<?= base_url() ?>assets/media/shape/footer/footer-shape-1.webp" alt="footer background shape icon">
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
                                <a href="<?= site_url() ?>" title="Go to Home Page">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('about') ?>" title="Learn About Us">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('photo-gallery') ?>" title="View Our Gallery">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Our Gallery
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('') ?>" title="Read Frequently Asked Questions">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    FAQ's
                                </a>
                            </li>
                            <li>
                                <a href="" title="Check Client Reviews">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Client Review
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('') ?>" title="View Terms and Conditions">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Terms and Condition
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('') ?>" title="Read Our Privacy Policy">
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
                                <a href="<?= site_url('transportation') ?>" title="Explore Transportation Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Transportation
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('packing-moving') ?>" title="Discover Packing and Moving Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Packing and Moving
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('loading-unloading') ?>" title="Learn about Loading and Unloading Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Loading and Unloading
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('home-shifting') ?>" title="View Home Shifting Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Home Shifting
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('office-relocation') ?>" title="Browse Office Shifting Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Office Shifting
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('car-bike') ?>" title="Explore Car & Bike Transportation Services">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Car & Bike Transportation
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('warehouse') ?>" title="Discover WareHouse Services">
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
                                    <?php if (strtolower($city) == 'jodhpur'): ?>
                                        Sangariya Bypass, Circle, Jodhpur Rajasthan 342013
                                    <?php else: ?>
                                        <?= $address ?>
                                    <?php endif; ?>
                                </li>
                                

                                <li style="margin-bottom: 6px;">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <?php if (strtolower($city) == 'jodhpur'): ?>
                                        <a onclick="gtag_report_conversion_call_btn();" href="tel:9982390043" title="Call us now on +91 9982390043">
                                        +91 9982390043 </a>
                                    <?php else: ?>
                                        <a onclick="gtag_report_conversion_call_btn();" href="tel:08383053021" title="Call us now on +91 8383053021">
                                        +91 8383053021 </a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:info@srbpackers.com" title="Send us an email">
                                        <span>info@srbpackers.com</span>
                                    </a>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="theme-btn hover-white mt-4 quickEnquirybtn" title="Get A Quote" data-bs-toggle="modal" title="Request a Free Quote Today!" data-bs-target="#qteModal">
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
                    Copyright © 2025 <a href="https://www.srbpackers.com/" title="Visit SRB Group Packers and Movers Website">SRB Group Packers and Movers</a> All Rights Reserved.
                </p>
                <?php /*?>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="http://www.gocube.in" target="_blank" title="Visit GoCube Solution India Website">
                            Designed and Developed by GoCube Solution India
                        </a>
                    </li>
                </ul>
                <?php */ ?>
            </div>
        </div>
        <a href="javascript:void(0);" id="scrollUp" class="scroll-icon" title="Scroll to Top">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>
</footer>
<div class="goweb_quick_link_btn_1">
    <a onclick="gtag_report_conversion_call_btn();" class="botbtn" href="tel:8383053021"><i class="fa-light fa-phone"></i><br><span>
            <p>CALL</p>
        </span></a>
    <a class="botbtn" href="mailto:info@srbpackers.com?cc=info@srbpackers.com&amp;subject=Iam Looking for Packers and Movers"><i class="fa-regular fa-envelope" aria-hidden="true"></i><br><span>
            <p>E-MAIL</p>
        </span></a>
    <a onclick="gtag_report_conversion_whatsapp_btn();" class="botbtn" href="http://api.whatsapp.com/send?phone=+918383053021&amp;text=Iam%20Looking%20for%20Packers%20and%20Movers"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i><br><span>
            <p>WHATSAPP</p>
        </span></a>
    <a class="botbtn quickEnquirybtn" href="javascript:void(0);" data-bs-toggle="modal" title="Request a Free Quote Today!" data-bs-target="#qteModal"><i class="fa-light
fa-square-pen" aria-hidden="true"></i><br><span>
            <p>ENQUIRY</p>
        </span></a>
    <a onclick="gtag_report_conversion_sms_btn();" class="botbtn" href="sms:08383053021?body=Iam Looking For Packers and Movers"> <i class="fa-light fa-message-sms" aria-hidden="true"></i><br><span>
            <p>MESSAGE</p>
        </span></a>
</div>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsERRLq2V9Xw1DJZOYnhr5Uo0Na2RbxRg&libraries=places"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<!--<< Viewport Js >>-->
<script src="<?= base_url() ?>assets/js/viewport.jquery.js"></script>

<!--<< Waypoints Js >>-->
<script src="<?= base_url() ?>assets/js/jquery.waypoints.js"></script>

<!--<< Counterup Js >>-->
<script src="<?= base_url() ?>assets/js/jquery.counterup.min.js"></script>

<!--<< MeanMenu Js >>-->
<script src="<?= base_url('') ?>assets/js/jquery.meanmenu.min.js"></script>

<!--<< Wow Animation Js >>-->
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-nice-select@1.1.0/js/jquery.nice-select.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="<?= base_url() ?>assets/js/main.js"></script>
<script>
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        const scrollBtn = document.getElementById('scrollUp');
        if (window.scrollY > 200) {
            scrollBtn.style.display = 'block';
        } else {
            scrollBtn.style.display = 'none';
        }
    });

    // Scroll to top smoothly on click
    document.getElementById('scrollUp').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

</body>

</html>