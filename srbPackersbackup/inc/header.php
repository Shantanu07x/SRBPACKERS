<?php
if (!defined("MySite")) {
    die("Direct Access Denied");
}
?>

<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- Header Section Start -->
<header>
    <!-- top_bar -->
    <div class="gocube-top-header border-section-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="top-list">
                        <li>
                            || Welcome to SRB Group ||
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a onclick="gtag_report_conversion_call_btn();" href="tel:0<?php echo PRIMARY_MOBILE; ?>" title="Call us now"> +91 <?php echo PRIMARY_MOBILE; ?></a>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" title="Send us an email">
                                <?php echo EMAIL_ADDRESS; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="top-social">
                        <li>
                            <a href="javascript:void(0);" id="makeAPaymentBtn" class="sign-in">
                                <i class="fa fa-inr" aria-hidden="true"></i>Make A Payment
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="sign-in quickEnquirybtn">
                                <i class="fa-solid fa-arrow-right-long"></i> Get A Quote
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-1 border-section-top border-section-bottom">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo" style="width:254px;">
                            <a href="<?php echo HOME_PAGE_URL; ?>" class="header-logo" title="Back to Home Page">
                                <img src="assets/media/logo/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers Company Logo" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="<?php echo HOME_PAGE_URL; ?>" class="<?php echo isset($home_menu_active) ? 'menu-active' : '' ?>"> Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo ABOUTUS_PAGE_URL; ?>" class="<?php echo isset($aboutus_menu_active) ? 'menu-active' : '' ?>"> About Us</a>
                                        </li>
                                        <li>
                                            <a href="javascrip:void(0)" class="<?php echo isset($our_strategy_menu_active) ? 'menu-active' : '' ?>"> Strategy <i class="fas fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo PACKING_METERIAL_PAGE_URL; ?>" class="<?php echo isset($packing_meterial_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Packing Material</a></li>
                                                <li><a href="<?php echo PACKING_TIPS_PAGE_URL; ?>" class="<?php echo isset($packing_tips_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Packing Tips</a></li>
                                                <li><a href="<?php echo OUR_WORKING_PROCESS_PAGE_URL; ?>" class="<?php echo isset($our_working_process_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Our Working Process</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascrip:void(0)" class="<?php echo isset($Our_services_menu_active) ? 'menu-active' : '' ?>"> Our Services <i class="fas fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo ALL_SERVICES_PAGE_URL; ?>" class="<?php echo isset($all_services_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> All Services</a></li>
                                                <li><a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>" class="<?php echo isset($transportation_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Transportation</a></li>
                                                <li><a href="<?php echo PACKING_AND_MOVING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($packing_and_moving_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Packing and Moving</a></li>
                                                <li><a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($loading_and_unloading_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Loading and Unloading</a></li>
                                                <li><a href="<?php echo UNPACKING_AND_ESCORT_SERVICES_PAGE_URL; ?>" class="<?php echo isset($unpacking_and_escort_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Unpacking and Escort</a></li>
                                                <li><a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($home_shifting_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Home Shifting</a></li>
                                                <li><a href="<?php echo DOMESTIC_RELOCATION_SERVICES_PAGE_URL; ?>" class="<?php echo isset($domestic_relocation_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Domestic Relocation</a></li>
                                                <li><a href="<?php echo INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL; ?>" class="<?php echo isset($international_relocation_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> International Relocation</a></li>
                                                <li><a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($warehouse_services_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> WareHouse Services</a></li>
                                                <li><a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>" class="<?php echo isset($car_and_bike_transportation_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Car & Bike Transportation</a></li>
                                                <li><a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($office_shifting_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Office Shifting</a></li>
                                                <li><a href="<?php echo HOTEL_SHIFTING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($hotel_shifting_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Hotel Shifting</a></li>
                                                <li><a href="<?php echo FACTORY_SHIFTING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($factory_shifting_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Factory Shifting</a></li>
                                                <li><a href="<?php echo PET_MOVING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($pet_moving_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Pet Moving</a></li>
                                                <li><a href="<?php echo CUSTOM_CLEARANCE_SERVICES_PAGE_URL; ?>" class="<?php echo isset($custom_clearance_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Custom Clearance</a></li>
                                                <li><a href="<?php echo PAINTING_MOVING_SERVICES_PAGE_URL; ?>" class="<?php echo isset($painting_moving_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Painting Moving</a></li>
                                                <li><a href="<?php echo GOODS_INSURANCE_SERVICES_PAGE_URL; ?>" class="<?php echo isset($goods_insurance_menu_active) ? 'menu-active' : '' ?>"><i class="fa-regular fa-arrow-right"></i> Goods Insurance</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo OUR_GALLERY_PAGE_URL; ?>" class="<?php echo isset($gallery_menu_active) ? 'menu-active' : '' ?>"> Gallery</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo FAQ_PAGE_URL; ?>" class="<?php echo isset($faq_menu_active) ? 'menu-active' : '' ?>"> Faq's</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo CLIENT_REVIEW_PAGE_URL; ?>" class="<?php echo isset($review_menu_active) ? 'menu-active' : '' ?>"> Review</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo CONTACT_US_PAGE_URL; ?>" class="<?php echo isset($contact_us_menu_active) ? 'menu-active' : '' ?>"> Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-button">
                            <a href="javascript:void(0);" class="theme-btn quickEnquirybtn">
                                <span>
                                    get A Quote
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="<?php echo HOME_PAGE_URL; ?>">
                            <img src="assets/media/logo/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers Logo Main">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-lg-block">
                    Get Ready to Move with Ease! Reach Out to <b>SRB Group Packers and Movers</b> for a Smooth, Stress-Free Relocation Experience. Contact Us Today!
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="<?php echo PRIMARY_ADDRESS_GMAP_LINK; ?>" title="View Our Location on Google Maps"><?php echo PRIMARY_ADDRESS; ?></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" title="Send us an email">
                                    <span><?php echo EMAIL_ADDRESS; ?></span>
                                </a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a onclick="gtag_report_conversion_call_btn();" href="tel:0<?php echo PRIMARY_MOBILE; ?>" title="Call us now on +91 <?php echo PRIMARY_MOBILE; ?>">
                                    +91 <?php echo PRIMARY_MOBILE; ?> (Sanjay Singh Shekhawat)
                                </a>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="javascript:void(0);">We Are Available 24x7</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Make a payment popup -->
<!-- Modal -->
<div class="modal fade" id="makeAPaymentPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 16px;">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="service-card-items" style="margin-top: 0px;border: 4px solid #1c35a4;border-radius: 16px;">
                    <div class="service-image">
                        <img src="assets/media/qr-code/make-a-payment-qr-code.webp" alt="Make A Payment qr code.">
                    </div>
                    <div class="service-content" style="padding:25px 30px">
                        <h4 style="text-align: center;">
                            <p>- Scan & pay -</p>
                        </h4>
                        <div>
                            <button class="theme-btn bg-blue" style="width: 100%;" id="makeAPaymentPopupCloseBtn">
                                <span>Close <i class="fa-solid fa-arrow-right-long"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Enquiry Modal -->
<div class="modal fade" id="quickEnquiryPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 16px;background-color: #f3f7fb;">
            <div class="quick-enquery-popup-content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.php">
                            <img src="assets/media/logo/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers logo">
                        </a>
                    </div>
                    <div class="offcanvas__close" id="quickEnquiryPopupClose">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-3"></div>
                <div class="offcanvas__contact">
                    <h4 id="headlineg">Get A Free Quote !</h4>
                    <form action="form/quick-inq.php" method="POST" class="contact-form-items">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <input type="text" name="name" required placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <input type="tel" name="mobile" required placeholder="Your Mobile Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <input type="text" class="gocube-gmapapi-06" name="movingfrom" required placeholder="Moving From">
                                    <ul class="gocube-gmapapi-01"></ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <input type="text" class="gocube-gmapapi-06" name="movingto" required placeholder="Moving To">
                                    <ul class="gocube-gmapapi-01"></ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <textarea name="message" required placeholder="Write Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="theme-btn" style="width: 100%;">
                                    Send Message <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>