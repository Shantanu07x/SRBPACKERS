<!DOCTYPE html>
<html lang="en">
<?php
// define some Constent Variable
define("MySite", true);
define("page_title", 'About Us - Discover Our Story | SRB Group Packers and Movers');
define('page_description', 'Learn about SRB Group Packers and Movers, a trusted name in relocation services in India. Discover our journey, values, and commitment to providing seamless moving experiences. Contact us today!');
define('page_keyword', 'About Us, SRB Group Packers and Movers, Relocation Services, Moving Company, Packers and Movers, Trusted Movers, Moving Experiences, Domestic Relocation, International Relocation');
// define some variable
$aboutus_menu_active = 1;
$root_path = '';
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
                <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">Client Review</h2>
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
                        Client Review
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

    <!-- About Section Start -->
    <section class="about-section section-padding fix bg-cover border-section-bottom" style="background-image: url('assets/media/background/white-background-liner.webp');">
        <div class="container">
            <div class="about-wrapper style-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="circle-shape">
                                <img src="assets/media/shape/about-us/circle.png" alt="shape Sircle img">
                            </div>
                            <div class="counter-shape float-bob-y">
                                <div class="icon">
                                    <img src="assets/media/svg/user-hand-shake.svg" alt="use hand shake icon img">
                                </div>
                                <div class="content">
                                    <h3><span class="count">9</span>+ Years</h3>
                                    <p>Of Experience</p>
                                </div>
                            </div>
                            <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('assets/media/about/srb-group-packers-and-movers-about-us-main.webp');">
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                    <img src="assets/media/about/srb-group-packers-and-movers-about-us-2.webp" alt="about usimg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><i class="fa-regular fa-eject"></i> ABOUT Us <i class="fa-solid fa-grip-lines"></i></span>
                                <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                                    Delivering Excellence in <span> Every Move</span>
                                </h2>
                            </div>
                            <p class="mt-2 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <strong>SRB Group Packers and Movers</strong> boasts over <strong>9 years</strong> of experience as a government-approved packing and moving company. Our extensive range of services covers <strong>transportation, packing and moving, loading and unloading, unpacking and escort, home and office shifting, car and bike transportation, warehouse services, domestic and international relocation, goods insurance, and painting moving services</strong>. Renowned for our reliability and professionalism, we've earned the trust of clients across India.
                            </p>
                            <p class="mt-2 mt-md-0 wow fadeInUp" data-wow-delay=".5s">We understand that every relocation is <strong>unique</strong>, which is why we offer personalized solutions tailored to your specific needs. Whether you're moving <strong>delicate items</strong> or <strong>heavy furniture</strong>, our meticulous approach ensures that every aspect of your move is handled with <strong>utmost care</strong> and <strong>attention to detail</strong>.</p>
                            <p class="mt-2 mt-md-0 wow fadeInUp" data-wow-delay=".5s">At <strong>SRB Group Packers and Movers</strong>, we're more than just a moving company; we're your dedicated partner in <strong>simplifying the relocation process</strong>. With our commitment to <strong>excellence</strong> and <strong>customer satisfaction</strong>, we aim to make your next move as <strong>smooth</strong> and <strong>hassle-free</strong> as possible.</p>
                        </div>
                    </div>
                    <div class="section-title mt-3">
                        <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                            <span> Customer-Centric Approach</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">At <strong>SRB Group Packers and Movers</strong>, our customers are at the <strong>heart</strong> of everything we do. We prioritize their <strong>needs</strong> and <strong>preferences</strong>, ensuring that every step of the moving process is tailored to provide them with the best experience possible. From the <strong>initial inquiry</strong> to the <strong>final delivery</strong>, we strive to exceed customer <strong>expectations</strong> and build long-lasting <strong>relationships</strong> based on <strong>trust</strong> and <strong>satisfaction</strong>.</p>

                    <div class="section-title mt-3">
                        <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                            <span> Innovation and Technology</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">We believe in staying ahead of the curve by embracing <strong>innovation</strong> and leveraging cutting-edge <strong>technology</strong> in our operations. From <strong>state-of-the-art tracking systems</strong> to advanced <strong>packing materials</strong>, we continuously explore new ways to improve <strong>efficiency</strong>, <strong>accuracy</strong>, and <strong>safety</strong>. By embracing innovation, we enhance the overall moving experience for our <strong>customers</strong> while minimizing <strong>environmental impact</strong>.</p>

                    <div class="section-title mt-3">
                        <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                            <span> Social Responsibility</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">As a responsible corporate citizen, we are committed to giving back to <strong>society</strong> and contributing to the <strong>communities</strong> we serve. Through various initiatives and partnerships, we actively support <strong>social causes</strong>, <strong>environmental sustainability</strong>, and <strong>community development projects</strong>. Our goal is to make a positive difference in the lives of others and leave a lasting impact beyond our business operations.</p>

                    <div class="section-title mt-3">
                        <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                            <span> Problem Solving</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Every relocation comes with its unique challenges, and our team excels at <strong>problem-solving</strong> to ensure smooth transitions for our clients. Whether it's navigating logistical hurdles, addressing unexpected issues, or finding creative solutions to meet specific requirements, we approach every problem with a proactive mindset and a commitment to finding the best possible outcome.</p>

                    <div class="section-title mt-3">
                        <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                            <span> Our Vision</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Our <strong>vision</strong> is to be the leading provider of packing and moving solutions, renowned for our exceptional service, reliability, and integrity. We aspire to set industry standards and exceed customer expectations at every touchpoint, driving continuous innovation and growth while maintaining a steadfast focus on quality and customer satisfaction.</p>

                    <div class="section-title mt-3">
                        <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                            <span> Our Mission</span>
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Our <strong>mission</strong> is to simplify the moving process and provide our customers with peace of mind during what can often be a stressful time. Through personalized service, attention to detail, and a dedication to excellence, we aim to deliver seamless relocations that exceed expectations. We are driven by a passion for customer satisfaction and a commitment to professionalism, integrity, and reliability in all that we do.</p>

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