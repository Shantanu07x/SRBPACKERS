<!DOCTYPE html>
<html lang="en">
<?php
// define some Constent Variable
define("MySite", true);
define("page_title", 'Affordable Packing and Moving Services Near You');
define('page_description', 'Find top-rated packing & moving services near you for hassle-free relocation. Our expert team ensures safe handling and timely delivery of your belongings.');
define('page_keyword', 'Packing and Moving, Relocation Services, SRB Group Packers and Movers, Professional Packing, Moving Services, Safe Relocation');
// define some variable
$Our_services_menu_active = 1;
$packing_and_moving_menu_active = 1;
$root_path = '../';
// include general resouces files
include $root_path . 'config/general.php';
?>

<head>
    <!-- include head files -->
    <?php include $root_path . "inc/head.php"; ?>
</head>

<body>

    <?php
    // include header section
    include  $root_path . "inc/header.php";
    ?>


    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/media/background/breadcrumb.webp');">
        <div class="border-shape">
            <img src="assets/media/shape/breadcrumb/element.webp" alt="Decorative shape">
        </div>
        <div class="line-shape">
            <img src="assets/media/shape/breadcrumb/line-element.webp" alt="Line shape">
        </div>
        <div class="container">
            <div class="page-heading">
                <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">Packing And Moving</h2>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="<?php echo HOME_PAGE_URL; ?>" title="Go to Home Page">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li>
                        Our Services
                    </li>
                    <li>
                        <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li>
                        Packing And Moving
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="marque-section">
        <div class="marquee-wrapper text-slider">
            <div class="marquee-inner to-left">
                <ul class="marquee-list d-flex">
                    <li class="marquee-item">
                        <span class="text-slider">Trusted Movers</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Nationwide Coverage</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Secure Packing</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Timely Delivery</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Hassle-Free Service</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>

                        <span class="text-slider">Government Approved</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">9+ Years Experience</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Customized Solutions</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Professional Team</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">24/7 Support</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>

                        <span class="text-slider">Safe Storage Options</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Quality Assurance</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Affordable Rates</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Comprehensive Insurance</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                        <span class="text-slider">Client Satisfaction Guaranteed</span><span class="text-slider"><img src="assets/media/svg/star.svg" alt="star icon"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- packing and moving service Section Start -->
    <section class="service-details-section fix section-padding">
        <div class="container">
            <div class="service-details-wrapper unorder-list-reset">
                <div class="row g-4">
                    <div class="col-12 col-lg-8 order-1 order-md-1">
                        <div class="service-details-items">
                            <div class="details-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="assets/media/services/srb-group-packers-and-movers-packing-and-moving-services-details.webp" alt="SRB Group Packers and Movers Packing and Moving Services" title="Packing and Moving Services by SRB Group Packers and Movers" loading="lazy">
                            </div>

                            <div class="details-content wow fadeInUp" data-wow-delay=".3s">
                                <p class="mb-3">Welcome to <strong>SRB Group Packers and Movers</strong>, your trusted partner in hassle-free relocations. With over <strong>9 years of experience</strong> in the industry, we have perfected our working process to deliver seamless and stress-free moving experiences for our valued customers. As a <strong>government-approved packing and moving company</strong>, we pride ourselves on our reliability, professionalism, and commitment to excellence.</p>

                                <h3>Packing and Moving Services</h3>
                                <p class="mb-3">
                                    Moving to a new home or office can be a daunting task, but with the right packing and moving services, you can ensure a smooth and hassle-free move. At <b>SRB Group Packers and Movers</b>, we are dedicated to making your relocation as easy and efficient as possible. Our expert team will help you organize, pack, and protect your belongings to ensure they arrive at your new location safely. Whether you are moving locally or internationally, our services are designed to meet your specific needs.
                                </p>

                                <h3>Our Packing and Moving Process</h3>
                                <p class="mb-3"><strong>1. Initial Consultation:</strong> We start with a comprehensive consultation to understand your moving needs. Our experts will listen to your requirements, assess your belongings, and provide a detailed plan for your move.</p>
                                <p class="mb-3"><strong>2. Customized Packing Plans:</strong> Based on the initial consultation, we create customized packing plans tailored to your specific needs. We use high-quality packing materials to ensure the safety of your items.</p>
                                <p class="mb-3"><strong>3. Professional Packing Team:</strong> Our professional packers handle your belongings with care. From delicate items to heavy furniture, we pack everything meticulously to prevent any damage during transit.</p>
                                <p class="mb-3"><strong>4. Efficient Loading:</strong> Our team ensures efficient loading of packed items into our well-maintained transportation vehicles. We use proper techniques to maximize space and ensure the safety of your belongings.</p>
                                <p class="mb-3"><strong>5. Safe Transportation:</strong> We offer reliable transportation services, ensuring timely and safe delivery of your belongings to the new location. Our drivers are experienced and trained to handle all types of cargo.</p>
                                <p class="mb-3"><strong>6. Unloading and Unpacking:</strong> Upon arrival, we efficiently unload and unpack your items. Our team places your belongings in the designated rooms as per your instructions, making your new place ready to live in.</p>
                                <p class="mb-3"><strong>7. Post-Move Support:</strong> We provide post-move support to ensure that you are satisfied with our services. Our team is available to address any concerns and assist you with settling into your new home or office.</p>

                                <h3>Why Choose Our Packing and Moving Services?</h3>
                                <p class="mb-3"><strong>Experienced Professionals:</strong> With over 9 years of experience, our team has the expertise to handle all types of moves, ensuring a smooth and hassle-free experience for you.</p>
                                <p class="mb-3"><strong>High-Quality Packing Materials:</strong> We use top-quality packing materials to protect your belongings from damage during transit.</p>
                                <p class="mb-3"><strong>Customized Solutions:</strong> We offer tailored packing and moving solutions to meet your specific needs and preferences.</p>
                                <p class="mb-3"><strong>Reliable and Timely Services:</strong> Our commitment to reliability and timeliness ensures that your move is completed as scheduled, without any delays.</p>
                                <p class="mb-3"><strong>Customer Satisfaction:</strong> We prioritize customer satisfaction and strive to exceed your expectations with our professional and courteous service.</p>

                                <h3>Packing Tips for a Smooth Move</h3>
                                <p class="mb-3"><strong>1. Start Early:</strong> Begin packing well in advance to avoid last-minute stress. Create a packing schedule and stick to it.</p>
                                <p class="mb-3"><strong>2. Declutter:</strong> Before packing, declutter your home or office. Donate or dispose of items you no longer need to reduce the amount of stuff you need to move.</p>
                                <p class="mb-3"><strong>3. Use Quality Packing Materials:</strong> Invest in high-quality packing materials such as sturdy boxes, bubble wrap, and packing tape to protect your belongings.</p>
                                <p class="mb-3"><strong>4. Label Boxes:</strong> Clearly label each box with its contents and the room it belongs to. This will make unpacking easier and more organized.</p>
                                <p class="mb-3"><strong>5. Pack Fragile Items Carefully:</strong> Use extra padding for fragile items and pack them separately. Mark these boxes as 'Fragile' to ensure they are handled with care.</p>
                                <p class="mb-3"><strong>6. Keep Essentials Handy:</strong> Pack a separate box with essential items such as toiletries, medications, and important documents that you will need immediately upon arrival.</p>
                                <p class="mb-3"><strong>7. Take Inventory:</strong> Make an inventory of all your packed items. This will help you keep track of your belongings and ensure nothing is lost during the move.</p>

                                <p class="mb-3">At <b>SRB Group Packers and Movers</b>, we understand that every move is unique. Our goal is to provide you with personalized packing and moving services that cater to your specific needs, ensuring a smooth and stress-free relocation experience. Contact us today to learn more about our services and how we can assist you with your next move.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-2 order-md-2">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".3s">
                                <div class="wid-title">
                                    <h3>Our Strategy</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul style="padding-left: 0px !important">
                                        <li class="<?php echo isset($packing_meterial_menu_active) ? 'active' : '' ?>"><a href="<?php echo PACKING_METERIAL_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Packing Material</a></li>
                                        <li class="<?php echo isset($packing_tips_menu_active) ? 'active' : '' ?>"><a href="<?php echo PACKING_TIPS_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Packing Tips</a></li>
                                        <li class="<?php echo isset($our_working_process_menu_active) ? 'active' : '' ?>"><a href="<?php echo OUR_WORKING_PROCESS_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Our Working Process</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".3s">
                                <div class="wid-title">
                                    <h3>Our Services</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul style="padding-left: 0px !important">
                                        <li class="<?php echo isset($all_services_menu_active) ? 'active' : '' ?>"><a href="<?php echo ALL_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> All Services</a></li>
                                        <li class="<?php echo isset($transportation_menu_active) ? 'active' : '' ?>"><a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Transportation</a></li>
                                        <li class="<?php echo isset($packing_and_moving_menu_active) ? 'active' : '' ?>"><a href="<?php echo PACKING_AND_MOVING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Packing and Moving</a></li>
                                        <li class="<?php echo isset($loading_and_unloading_menu_active) ? 'active' : '' ?>"><a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Loading and Unloading</a></li>
                                        <li class="<?php echo isset($unpacking_and_escort_menu_active) ? 'active' : '' ?>"><a href="<?php echo UNPACKING_AND_ESCORT_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Unpacking and Escort</a></li>
                                        <li class="<?php echo isset($home_shifting_menu_active) ? 'active' : '' ?>"><a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Home Shifting</a></li>
                                        <li class="<?php echo isset($domestic_relocation_menu_active) ? 'active' : '' ?>"><a href="<?php echo DOMESTIC_RELOCATION_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Domestic Relocation</a></li>
                                        <li class="<?php echo isset($international_relocation_menu_active) ? 'active' : '' ?>"><a href="<?php echo INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> International Relocation</a></li>
                                        <li class="<?php echo isset($warehouse_services_menu_active) ? 'active' : '' ?>"><a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> WareHouse Services</a></li>
                                        <li class="<?php echo isset($car_and_bike_transportation_menu_active) ? 'active' : '' ?>"><a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Car & Bike Transportation</a></li>
                                        <li class="<?php echo isset($office_shifting_menu_active) ? 'active' : '' ?>"><a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Office Shifting</a></li>
                                        <li class="<?php echo isset($hotel_shifting_menu_active) ? 'active' : '' ?>"><a href="<?php echo HOTEL_SHIFTING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Hotel Shifting</a></li>
                                        <li class="<?php echo isset($factory_shifting_menu_active) ? 'active' : '' ?>"><a href="<?php echo FACTORY_SHIFTING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Factory Shifting</a></li>
                                        <li class="<?php echo isset($pet_moving_menu_active) ? 'active' : '' ?>"><a href="<?php echo PET_MOVING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Pet Moving</a></li>
                                        <li class="<?php echo isset($custom_clearance_menu_active) ? 'active' : '' ?>"><a href="<?php echo CUSTOM_CLEARANCE_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Custom Clearance</a></li>
                                        <li class="<?php echo isset($painting_moving_menu_active) ? 'active' : '' ?>"><a href="<?php echo PAINTING_MOVING_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Painting Moving</a></li>
                                        <li class="<?php echo isset($goods_insurance_menu_active) ? 'active' : '' ?>"><a href="<?php echo GOODS_INSURANCE_SERVICES_PAGE_URL; ?>"><i class="fa-regular fa-arrow-right"></i> Goods Insurance</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Section Start -->
    <section class="achievement-section-2 fix section-bg-2 border-section-bottom">
        <div class="container">
            <div class="achievement-wrapper style-2">
                <div class="section-title mb-0">
                    <span class="text-white wow fadeInUp"><i class="fa-regular fa-eject"></i> achievement <i class="fa-solid fa-grip-lines"></i></span>
                    <h2 class="text-white wow fadeInUp achievement-section-headline" data-wow-delay=".3s">
                        We Are Increasing <br> Business Success
                    </h2>
                </div>
                <div class="counter-area">
                    <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="assets/media/svg/achievement-icon/client-hand-shake.svg" alt="client hand shake icon img">
                        </div>
                        <div class="content">
                            <h2 class="achievement-section-headline"><span class="count">5,561</span>+</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="assets/media/svg/achievement-icon/done-project.svg" alt="done project icon img">
                        </div>
                        <div class="content">
                            <h2 class="achievement-section-headline"><span class="count">7,569</span>+</h2>
                            <p>Finished Projects</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <img src="assets/media/svg/achievement-icon/experienced-staff.svg" alt="experienced staff icon img">
                        </div>
                        <div class="content">
                            <h2 class="achievement-section-headline"><span class="count">896</span>+</h2>
                            <p>Experienced Staff</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon">
                            <img src="assets/media/svg/achievement-icon/office-building.svg" alt="Office Building icon img">
                        </div>
                        <div class="content">
                            <h2 class="achievement-section-headline"><span class="count">69</span>+</h2>
                            <p>Worldwide Office</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Faq Section Start >>-->
    <section class="faq-section fix section-padding">
        <div class="right-shape">
            <img src="assets/media/shape/faq/right-shape.webp" alt="right shape icon img">
        </div>
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><i class="fa-regular fa-eject"></i> FAQ'S <i class="fa-solid fa-grip-lines"></i></span>
                                <h2 class="wow fadeInUp h2sectionheadline mb-3" data-wow-delay=".3s">
                                    Our Most Frequently Asked Questions
                                </h2>
                            </div>
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".2s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                1. How do I book your moving services?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Booking our services is simple! You can contact us via our <b>website, phone, or email. Our customer service</b> team will guide you through the process and schedule a convenient time for your move.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".4s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                2. What should I do to prepare for the move?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We recommend you start by <b>decluttering and organizing your belongings</b>. Make a list of items to be moved, and if possible, separate valuable and fragile items. Our team will handle the rest, from <b>packing to unpacking</b>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                3. Do you provide packing materials?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we provide <b>high-quality packing materials</b>, including boxes, bubble wrap, and packing tape, to ensure your items are <b>securely packed and transported safely</b>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                4. Are my belongings insured during the move?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Absolutely. We offer comprehensive <b>goods insurance</b> to cover any potential damages during the move. You can have peace of mind knowing your <b>belongings are protected</b>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".8s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                                5. How long does the moving process take?
                                            </button>
                                        </h5>
                                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                The duration of the moving process depends on the distance and the volume of items being moved. Our team will provide you with an estimated <b>timeline during the initial consultation</b>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="1s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                6. Can you handle international relocations?
                                            </button>
                                        </h5>
                                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we specialize in both <b>domestic and international relocations</b>. Our team is experienced in managing the <b>logistics and paperwork</b> required for international moves, ensuring a smooth and <b>hassle-free experience</b>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><i class="fa-regular fa-eject"></i> Contact Us <i class="fa-solid fa-grip-lines"></i></span>
                                <h2 class="wow fadeInUp h2sectionheadline mb-3" data-wow-delay=".5s">
                                    Get in Touch with Us
                                </h2>
                            </div>
                            <div class="quick-enquery-popup-content wow fadeInUp" style="padding: 0px 0px;" data-wow-delay=".5s">
                                <div class="offcanvas__contact">
                                    <form action="form/enquiry.php" method="POST" class="contact-form-items">
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
                                                    <input type="email" name="email" required placeholder="Your E-Mail Address">
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
            </div>
        </div>
    </section>


    <!-- Brand Section Start -->
    <div class="brand-section fix section-padding" style="padding-bottom: 35px;padding-top: 25px !important;">
        <div class="container">
            <div class="brand-wrapper">
                <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">Top Brands Trust Us</h6>
                <div class="swiper brand-slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/castrol.webp" alt="Castrol Logo" title="Trusted by Castrol">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/genpact.webp" alt="Genpact Logo" title="Trusted by Genpact">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/hdfc-bank.webp" alt="Hdfc Bank Logo" title="Trusted by Hdfc Bank">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/ibm.webp" alt="IBM Logo" title="Trusted by IBM">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/icici-bank.webp" alt="Icici Bank Logo" title="Trusted by Icici Bank">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/kotak-bank.webp" alt="Kotak Bank Logo" title="Trusted by Kotak Bank">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/media/our-client/ndtv-news.webp" alt="NDTV News Logo" title="Trusted by Ndtv News">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // include footer section
    include $root_path . 'inc/footer.php';
    // include page menu social
    include $root_path . "inc/footer-menu.php";
    // include page js section
    include $root_path . "inc/page-js.php";
    ?>
</body>

</html>