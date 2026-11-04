<!DOCTYPE html>
<html lang="en">
<?php
// define some Constent Variable
define("MySite", true);
define("page_title", 'SRB Group Packers and Movers Ajmer - Reliable Moving and Packing Services');
define('page_description', 'SRB Group Packers and Movers in Ajmer offers safe, reliable, and affordable moving services. Local and long-distance relocation, professional packing, and hassle-free shifting across India. Get a free quote today!');
define('page_keyword', 'Packers and Movers Ajmer, Moving Services Ajmer, Relocation Services Ajmer, Local Packers Ajmer, Long Distance Moving Ajmer, Professional Packing Ajmer, Household Shifting Ajmer, Office Relocation Ajmer');
// define some variable
$home_menu_active = 1;
$root_path = '';
// include general resouces files
include $root_path . 'config/general.php';

$footer_address = 'Shop no, 8 ,Rail ka Badiya Village, Sedariya, Ajmer, 305002';
?>

<head>
    <!-- include head files -->
    <?php include $root_path . "inc/head.php"; ?>
</head>

<body>

    <?php
    // include preloader section
    include  $root_path . "inc/preloader.php";
    // include header section
    include  $root_path . "inc/header.php";
    ?>


    <!-- Hero Section Start -->
    <section class="hero-section fix hero-3">
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="array-next"><i class="fal fa-arrow-left"></i></button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <!-- sllider -->
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/media/header-slider/srb-group-packers-and-movers-ajmer-slider-1.webp');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="assets/media/shape/slider/mask-shape-2.webp" alt="mask shape img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="assets/media/shape/slider/border-shape.webp" alt="border shape img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="assets/media/shape/slider/logo-icon.webp" alt="logo icon img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="assets/media/shape/slider/frame.webp" alt="frame shape img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Moving Made Easy with SRB Group Packers</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        Safe & Hassle-Free Relocation in Ajmer
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        Experience stress-free moving with our professional team. From packing to unpacking, we ensure your belongings reach safely and on time. Trust SRB Group for a smooth move every time!
                                    </p>
                                    <div class="hero-button">
                                        <a href="<?php echo ABOUTUS_PAGE_URL; ?>" data-animation="slideInRight" data-duration="2s" data-delay=".9s" class="theme-btn hover-white">
                                            About Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-animation="slideInRight" data-duration="2s" data-delay=".9s" class="theme-btn border-white quickEnquirybtn">
                                            Get A Quote
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sllider -->
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/media/header-slider/srb-group-packers-and-movers-ajmer-slider-2.webp');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="assets/media/shape/slider/mask-shape-2.webp" alt="mask shape img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="assets/media/shape/slider/border-shape.webp" alt="border shape img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="assets/media/shape/slider/logo-icon.webp" alt="logo icon img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="assets/media/shape/slider/frame.webp" alt="frame shape img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">From Ajmer to Anywhere, We’ve Got You Covered</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        Nationwide Moving with Local Expertise
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        No matter the distance, our skilled movers guarantee secure and efficient relocation. From Ajmer to any destination in India, we deliver peace of mind with every move.
                                    </p>
                                    <div class="hero-button">
                                        <a href="<?php echo ABOUTUS_PAGE_URL; ?>" data-animation="slideInRight" data-duration="2s" data-delay=".9s" class="theme-btn hover-white">
                                            About Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-animation="slideInRight" data-duration="2s" data-delay=".9s" class="theme-btn border-white quickEnquirybtn">
                                            Get A Quote
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sllider -->
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/media/header-slider/srb-group-packers-and-movers-ajmer-slider-3.webp');">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="assets/media/shape/slider/mask-shape-2.webp" alt="mask shape img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="assets/media/shape/slider/border-shape.webp" alt="border shape img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="assets/media/shape/slider/logo-icon.webp" alt="logo icon img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="assets/media/shape/slider/frame.webp" alt="frame shape img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Precision Packing, Zero Damage</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        Expert Packing for Maximum Protection
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        Our customized packing solutions protect your valuables from start to finish. From fragile items to bulky furniture, we handle it all with utmost care and precision.
                                    </p>
                                    <div class="hero-button">
                                        <a href="<?php echo ABOUTUS_PAGE_URL; ?>" data-animation="slideInRight" data-duration="2s" data-delay=".9s" class="theme-btn hover-white">
                                            About Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-animation="slideInRight" data-duration="2s" data-delay=".9s" class="theme-btn border-white quickEnquirybtn">
                                            Get A Quote
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Our Process comon -->
    <section class="service-section fix section-padding" style="padding-top: 10px; padding-bottom:40px">
        <div class="container">
            <div class="service-wrapper mb-0">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items box-shadow active">
                            <div class="icon">
                                <img src="assets/media/svg/strategy/material.svg" alt="High-Quality Packing Material Icon" title="High-Quality Packing Material Icon">
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="<?php echo PACKING_METERIAL_PAGE_URL; ?>" title="Explore Our Packing Material">
                                        Packing Material
                                    </a>
                                </h4>
                                <p>
                                    Our premium quality packing materials ensure maximum protection for your belongings. From sturdy boxes to bubble wraps and sealing tapes, we use the best supplies to keep your items safe during transit, minimizing risks and damages.
                                </p>
                                <a href="<?php echo PACKING_METERIAL_PAGE_URL; ?>" class="theme-btn-2 mt-3" title="Read More About Packing Material">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items box-shadow active">
                            <div class="icon">
                                <img src="assets/media/svg/strategy/packing-tips.svg" alt="Packing Tips Icon" title="Packing Tips Icon">
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="<?php echo PACKING_TIPS_PAGE_URL; ?>" title="Discover Our Packing Tips">
                                        Packing Tips
                                    </a>
                                </h4>
                                <p>
                                    Pack smart and save time with our expert tips! From labeling boxes to securing fragile items, our practical advice makes your move smoother and stress-free. Follow our guidance to keep your valuables safe and organized during relocation.
                                </p>
                                <a href="<?php echo PACKING_TIPS_PAGE_URL; ?>" class="theme-btn-2 mt-3" title="Read More Packing Tips">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items box-shadow active">
                            <div class="icon">
                                <img src="assets/media/svg/strategy/working-process.svg" alt="Our Working Process Icon" title="Our Working Process Icon">
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="<?php echo OUR_WORKING_PROCESS_PAGE_URL; ?>" title="Learn About Our Working Process">
                                        Our Working Process
                                    </a>
                                </h4>
                                <p>
                                    Our streamlined moving process guarantees efficiency and safety. From planning and packing to transporting and unloading, our professional team handles every step with precision. Experience hassle-free relocation with complete transparency.
                                </p>
                                <a href="<?php echo OUR_WORKING_PROCESS_PAGE_URL; ?>" class="theme-btn-2 mt-3" title="Read More About Our Working Process">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('assets/media/about/srb-group-packers-and-movers-in-ajmer-about-us-main.webp');">
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                    <img src="assets/media/about/srb-group-packers-and-movers-in-ajmer-about-us-2.webp" alt="about usimg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><i class="fa-regular fa-eject"></i> About SRB Group Packers <i class="fa-solid fa-grip-lines"></i></span>
                                <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s">
                                    Your Trusted Moving Partner with 9+ Years of Excellence
                                </h2>
                            </div>
                            <p class="mt-2 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                At SRB Group Packers and Movers, we take pride in being Ajmer’s most reliable and professional moving service provider. With over 9 years of industry experience, we have successfully handled countless relocations, both locally and nationwide. Our commitment to quality and customer satisfaction sets us apart from the competition.</p>
                            <p class="mt-2 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                We offer a wide range of services, including household shifting, office relocation, car transportation, and secure packing solutions. Our skilled team uses top-quality packing materials and modern techniques to ensure the safe transit of your valuable belongings. From initial planning to final unloading, we take care of every detail with precision and care.</p>
                            <p class="mt-2 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Our mission is to make your moving experience stress-free and efficient. We believe in transparency, affordability, and personalized solutions tailored to your needs. Choose SRB Group Packers and Movers, and experience the difference with a team that truly cares.</p>

                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                    <a href="<?php echo ABOUTUS_PAGE_URL; ?>" class="theme-btn">
                                        Explore More
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <div class="author-image wow fadeInUp" data-wow-delay=".7s">
                                    <a href="javascript:void(0);" class="theme-btn quickEnquirybtn">
                                        Get A Quote
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
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

    <!-- Service Section Start -->
    <section class="service-section-3 pb-0 fix section-padding bg-cover" style="background-image: url('assets/media/background/service-background.webp');">
        <div class="container">
            <div class="section-title text-center mb-2">
                <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><i class="fa-regular fa-eject"></i> We Offer Best Services <i class="fa-solid fa-grip-lines"></i></span>
                <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    Your Moving Needs, Our Priority
                </h2>
            </div>
            <div class="row">
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-tranportation-service.webp" alt="Nationwide Transportation Service by SRB Group Packers and Movers" title="Reliable Transportation Across India" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/transportation.svg" alt="Tranportation Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/transportation.svg" alt="Tranportation Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>">Transportation</a>
                            </h4>
                            <p>
                                Expert transportation services ensuring timely and safe delivery of all types of cargo across different locations.
                            </p>
                            <a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-packing-and-moving-services.webp" alt="Comprehensive Packing and Moving Services by SRB Group Packers and Movers" title="Secure and Efficient Packing Solutions" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/moving.svg" alt="Packing and Moving Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/moving.svg" alt="Packing and Moving Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo PACKING_AND_MOVING_SERVICES_PAGE_URL; ?>">Packing and Moving</a>
                            </h4>
                            <p>
                                Comprehensive packing and moving solutions for seamless transitions, ensuring secure transport of your belongings.
                            </p>
                            <a href="<?php echo PACKING_AND_MOVING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-loading-and-unloading-services.webp" alt="Professional Loading and Unloading Services by SRB Group Packers and Movers" title="Expert Handling and Transportation" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/trucking.svg" alt="loading and Unloading Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/trucking.svg" alt="loading and Unloading Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>">Loading & Unloading</a>
                            </h4>
                            <p>
                                Efficient loading and unloading services designed to handle your goods with utmost care and precision.
                            </p>
                            <a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-unpacking-and-escort-service.webp" alt="Detailed Unpacking and Escort Services by SRB Group Packers and Movers" title="Careful Unpacking and Setup Assistance" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/open-box.svg" alt="Unpacking Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/open-box.svg" alt="Unpacking Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo UNPACKING_AND_ESCORT_SERVICES_PAGE_URL; ?>">Unpacking & Escort</a>
                            </h4>
                            <p>
                                Complete unpacking and setting services with an optional escort to guide you through every step of your move.
                            </p>
                            <a href="<?php echo UNPACKING_AND_ESCORT_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-home-shifting-service.webp" alt="Reliable Home Shifting Services by SRB Group Packers and Movers" title="Stress-Free Residential Relocation" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/moving-home.svg" alt="Home Shifting Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/moving-home.svg" alt="Home Shifting Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>">Home Shifting</a>
                            </h4>
                            <p>
                                Specialized home shifting services that cater to your every requirement, making house moves smooth and stress-free.
                            </p>
                            <a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-office-shifting-services.webp" alt="Streamlined Office Shifting Services by SRB Group Packers and Movers" title="Efficient Corporate Relocation Solutions" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/office-location.svg" alt="Office Shifting Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/office-location.svg" alt="Office Shifting Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>">Office Shifting</a>
                            </h4>
                            <p>
                                Professional office relocation services designed to minimize downtime and maintain business continuity.
                            </p>
                            <a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-car-and-bike-transportation-service.webp" alt="Safe Car and Bike Transportation Services by SRB Group Packers and Movers" title="Reliable Vehicle Relocation Experts" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/car.svg" alt="Car and Bike Moving Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/car.svg" alt="Car and Bike Moving Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>">Car & Bike Transportation</a>
                            </h4>
                            <p>
                                Secure and reliable vehicle transportation services to deliver your car or bike safely to your new destination.
                            </p>
                            <a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-warehouse-service.webp" alt="Secure and Spacious Warehouse Services by SRB Group Packers and Movers" title="Advanced Storage Solutions" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/warehouse.svg" alt="Warehousing Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/warehouse.svg" alt="Warehousing Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>">Warehouse Services</a>
                            </h4>
                            <p>
                                Secure and spacious warehouse services designed to meet your storage needs with optimal safety for all types of goods.
                            </p>
                            <a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-domestic-relocation-service.webp" alt="Comprehensive Domestic Relocation Services by SRB Group Packers and Movers" title="Expert Nationwide Moving Solutions" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/container.svg" alt="Domestic Relocation Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/container.svg" alt="Domestic Relocation Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo DOMESTIC_RELOCATION_SERVICES_PAGE_URL; ?>">Domestic Relocation</a>
                            </h4>
                            <p>
                                Efficient and reliable domestic relocation services to move your home or office across India with unmatched professionalism.
                            </p>
                            <a href="<?php echo DOMESTIC_RELOCATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-international-relocation-service.webp" alt="Global International Relocation Services by SRB Group Packers and Movers" title="Seamless Overseas Moving Expertise" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/air-plane.svg" alt="International Relocation Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/air-plane.svg" alt="International Relocation Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL; ?>">International Relocation</a>
                            </h4>
                            <p>
                                Comprehensive international moving services to help you relocate abroad with confidence and ease.
                            </p>
                            <a href="<?php echo INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-goods-insurance-service.webp" alt="Reliable Goods Insurance Services by SRB Group Packers and Movers" title="Protect Your Valuables During Transit" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/insurance.svg" alt="Goods Insurance Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/insurance.svg" alt="Goods Insurance Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo GOODS_INSURANCE_SERVICES_PAGE_URL; ?>">Goods Insurance</a>
                            </h4>
                            <p>
                                Protect your valuables during transit with our reliable goods insurance options for peace of mind.
                            </p>
                            <a href="<?php echo GOODS_INSURANCE_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Service box-->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-painting-relocation-service.webp" alt="Specialized Painting Relocation Services by SRB Group Packers and Movers" title="Safe Art and Painting Transport Solutions" loading="lazy">

                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/painting-frame.svg" alt="Painging Relocation Services Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/painting-frame.svg" alt="Painging Relocation Services Icon">
                            </div>
                            <h4>
                                <a href="<?php echo PAINTING_MOVING_SERVICES_PAGE_URL; ?>">Painting Moving</a>
                            </h4>
                            <p>
                                Specialized and careful transportation of paintings and artworks, ensuring their safety and integrity during every move.
                            </p>
                            <a href="<?php echo PAINTING_MOVING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-title text-center" style="margin-top: 32px !important;">
                <a href="<?php echo ALL_SERVICES_PAGE_URL; ?>" class="theme-btn wow fadeInUp" data-wow-delay=".3s" title="Browse all available services from SRB Group Packers and Movers" aria-label="See all services provided by SRB Group Packers and Movers">
                    See all Services
                    <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cta-banner-2 section-padding" style="padding-top: 30px;padding-bottom: 20px;">
            <div class="container">
                <div class="cta-wrapper-2">
                    <div class="author-icon wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content">
                            <span>Call Us Now</span>
                            <h4>
                                <a onclick="gtag_report_conversion_call_btn();" href="tel:0<?php echo PRIMARY_MOBILE; ?>" title="Call us now"> +91 <?php echo PRIMARY_MOBILE; ?></a>
                            </h4>
                        </div>
                    </div>
                    <h3 class="wow fadeInUp" data-wow-delay=".5s">
                        Seamless Moves, Endless Possibilities <br> Let’s Connect Your World!
                    </h3>
                    <a href="javascript:void(0);" class="theme-btn bg-white wow fadeInUp quickEnquirybtn" data-wow-delay=".7s">
                        get A Quote
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--<< Choose Us Section Start >>-->
    <section class="choose-us-section fix section-padding">
        <div class="choose-shape">
            <img src="assets/media/shape/why-choose/background-shape.webp" alt="background shape icon">
        </div>
        <div class="bottom-shape">
            <img src="assets/media/shape/why-choose/bottom-shape.webp" alt="bottom shape icon">
        </div>
        <div class="arrow-shape-1 bounce-x">
            <img src="assets/media/shape/arrow-shape.webp" alt="arrow shap icon">
        </div>
        <div class="circle-shape">
            <img src="assets/media/shape/why-choose/circle.webp" alt="circle icon">
        </div>
        <div class="line-shape">
            <img src="assets/media/shape/why-choose/line-shape.webp" alt="line shape icon">
        </div>
        <div class="container">
            <div class="choose-us-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-us-image wow fadeInUp" data-wow-delay=".4s">
                            <img src="assets/media/why-choose/srb-group-packers-and-movers-why-choose-man.webp" alt="Man coordinating reliable moving services at SRB Group Packers and Movers" title="Trusted Moving Expertise" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="choose-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><i class="fa-regular fa-eject"></i> WHY CHOOSE US <i class="fa-solid fa-grip-lines"></i> </span>
                                <h2 class="wow fadeInUp h2sectionheadline mb-3" data-wow-delay=".3s">
                                    Reliable and Trusted Moving Solutions
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                At <b>SRB Group Packers and Movers</b>, we are dedicated to providing top-notch <b>packing and moving services</b> tailored to your needs. With over <b>9 years of experience</b>, we ensure a seamless and stress-free relocation experience.
                            </p>
                            <div class="choose-list-area">
                                <ul class="choose-list wow fadeInUp" data-wow-delay=".7s">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Professional Packing Services
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Secure Transportation Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Timely Delivery and Unloading
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        24/7 Customer Support
                                    </li>
                                </ul>
                                <ul class="choose-list wow fadeInUp" data-wow-delay=".9s">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Comprehensive Insurance Coverage
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Expert Handling of Fragile Items
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Affordable Pricing Options
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Customized Moving Plans
                                    </li>
                                </ul>
                            </div>
                            <div class="progress-wrap">
                                <div class="pro-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="pro-head">
                                        <h6 class="title">
                                            Client Satisfaction
                                        </h6>
                                        <span class="point">
                                            99%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-value style-99"></div>
                                    </div>
                                </div>

                                <div class="pro-items wow fadeInUp" data-wow-delay=".9s">
                                    <div class="pro-head">
                                        <h6 class="title">
                                            Timely Delivery
                                        </h6>
                                        <span class="point">
                                            97%
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-value style-97"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Section Start -->
    <section class="project-section section-padding pt-0 fix" style="background-image: url('assets/media/background/why-choose-us-background.webp');padding-top:31px !important;padding-bottom: 34px !important;">
        <div class="swiper project-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/media/gallery/srb-group-packers-and-movers-household-relocation-image-01.webp" alt="Efficient household relocation service by SRB Group Packers and Movers" title="Household Relocation Services" loading="lazy">
                            <div class="project-content">
                                <p class="mb-0">HouseHold Relocation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/media/gallery/srb-group-packers-and-movers-household-relocation-image-02.webp" alt="Professional team packing for household relocation with SRB Group Packers and Movers" title="Professional Packing Services" loading="lazy">
                            <div class="project-content">
                                <p class="mb-0">HouseHold Relocation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/media/gallery/srb-group-packers-and-movers-car-moving-image-01.webp" alt="Secure car transport with specialized vehicle by SRB Group Packers and Movers" title="Specialized Car Moving Service" loading="lazy">

                            <div class="project-content">
                                <p class="mb-0">Car Moving</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/media/gallery/srb-group-packers-and-movers-bike-moving-image-01.webp" alt="Efficient bike moving with secure packaging by SRB Group Packers and Movers" title="Bike Moving Excellence" loading="lazy">
                            <div class="project-content">
                                <p class="mb-0">Bike Moving</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/media/gallery/srb-group-packers-and-movers-household-relocation-image-03.webp" alt="Expert household relocation services by SRB Group Packers and Movers" title="Household Relocation Expertise" loading="lazy">
                            <div class="project-content">
                                <p class="mb-0">Household Relocation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/media/gallery/srb-group-packers-and-movers-car-moving-image-02.webp" alt="Secure and reliable car moving services by SRB Group Packers and Movers" title="Car Moving Services" loading="lazy">
                            <div class="project-content">
                                <p class="mb-0">Car Moving</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-center-gallery">
                <div class="swiper-dot-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="dot-3"></div>
                </div>
                <div class="section-title" style="margin-top: 4px;">
                    <a href="<?php echo OUR_GALLERY_PAGE_URL; ?>" class="theme-btn wow fadeInUp" data-wow-delay=".3s" title="Browse our comprehensive gallery of services" aria-label="View all gallery images from SRB Group Packers and Movers">
                        See all Images
                        <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section Start -->
    <section class="work-process-section fix section-padding">
        <div class="container">
            <div class="section-title text-center mb-3">
                <span class="wow fadeInUp"><i class="fa-regular fa-eject"></i> How IT work <i class="fa-solid fa-grip-lines"></i></span>
                <h2 class="h2sectionheadline wow fadeInUp" data-wow-delay=".3s">Standard Work Process</h2>
            </div>
            <div class="process-work-wrapper wow fadeInUp" data-wow-delay=".5s">
                <div class="line-shape">
                    <img src="assets/media/shape/working-process/processing-line.webp" alt="Step Line" title="Step Line">
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="assets/media/svg/working-process/planning.svg" alt="Assessment and Planning Icon for Working Process" title="Assessment and Planning">
                                <h6 class="number">
                                    1
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Assessment & Planning</h4>
                                <p>
                                    Conduct a thorough assessment and create a tailored plan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Packing & Organizing</h4>
                                <p>
                                    Carefully pack and organize belongings for safety.
                                </p>
                            </div>
                            <div class="icon">
                                <img src="assets/media/svg/working-process/packing.svg" alt="Packing and Organizing Icon for Working Process" title="Packing and Organizing">
                                <h6 class="number">
                                    2
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="assets/media/svg/working-process/transportation.svg" alt="Transportation and Logistics Icon for Working Process" title="Transportation and Logistics">
                                <h6 class="number">
                                    3
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Transportation & Logistics</h4>
                                <p>
                                    Handle transportation and logistics with precision.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Unpacking & Settling In</h4>
                                <p>
                                    Unpack and assist in setting up your new space.
                                </p>
                            </div>
                            <div class="icon">
                                <img src="assets/media/svg/working-process/happy-service.svg" alt="Unpacking and Settling In Icon for Working Process" title="Unpacking and Settling In">
                                <h6 class="number">
                                    4
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Testimonial Section Start >>-->
    <section class="tesimonial-section-3 section-padding section-bg-2 bg-cover" style="padding-bottom: 80px;">

        <div class="mask-shape">
            <img src="assets/media/shape/testimonial/mask-shape.webp" alt="mask shape icon">
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="text-white wow fadeInUp"><i class="fa-regular fa-eject"></i> Testimonials <i class="fa-solid fa-grip-lines"></i></span>
                <h2 class="text-white h2sectionheadline wow fadeInUp" data-wow-delay=".3s">
                    Client Stories: Real Experiences, Real Satisfactio
                </h2>
            </div>
            <div class="swiper testimonial-slider-3 wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="assets/media/svg/testimonial/quote-icon.webp" alt="quote shape icon">
                            </div>
                            <div class="client-items">
                                <div class="client-content">
                                    <h4>Rakesh Sharma</h4>
                                    <p>Ajmer, India</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Highly reliable and professional service! SRB Group made my house shifting from Ajmer to Jaipur completely hassle-free. The team was punctual, polite, and took great care of my belongings. Highly recommended!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="assets/media/svg/testimonial/quote-icon.webp" alt="quote shape icon">
                            </div>
                            <div class="client-items">
                                <div class="client-content">
                                    <h4>Priya Mehta</h4>
                                    <p>Ajmer, India</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Amazing experience with SRB Packers! They packed my fragile items with utmost care and delivered everything on time. The staff was courteous and efficient. Best moving service I’ve ever used!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="assets/media/svg/testimonial/quote-icon.webp" alt="quote shape icon">
                            </div>
                            <div class="client-items">
                                <div class="client-content">
                                    <h4>Suresh Gupta</h4>
                                    <p>Ajmer, India</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                SRB Group Packers and Movers made my office relocation a breeze. Their organized approach and quick execution were impressive. I didn’t face a single issue throughout the move. Great job, team!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="assets/media/svg/testimonial/quote-icon.webp" alt="quote shape icon">
                            </div>
                            <div class="client-items">
                                <div class="client-content">
                                    <h4>Kavita Rathi</h4>
                                    <p>Ajmer, India</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                The best movers in Ajmer! I was worried about shifting my antique furniture, but SRB Group handled it like pros. Everything arrived intact and without a scratch. Worth every penny!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="assets/media/svg/testimonial/quote-icon.webp" alt="quote shape icon">
                            </div>
                            <div class="client-items">
                                <div class="client-content">
                                    <h4>Amit Patil</h4>
                                    <p>Ajmer, India</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                            From start to finish, SRB Group delivered exceptional service. The packing was top-notch, and the staff ensured everything was safely transported. Professionalism at its best! Would highly recommend their services to anyone.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="assets/media/svg/testimonial/quote-icon.webp" alt="quote shape icon">
                            </div>
                            <div class="client-items">
                                <div class="client-content">
                                    <h4>Nisha Verma</h4>
                                    <p>Ajmer, India</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                            Very impressed with SRB Packers and Movers! They maintained clear communication throughout and handled my move efficiently. No damage or delays. Truly a hassle-free experience. I will definitely use their services again!
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="service-section-3 fix section-padding bg-cover" style="background-image: url('assets/media/background/service-background.webp'); padding: 30px 0px;">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-2">
                    <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <i class="fa-regular fa-eject"></i> Our Pricing <i class="fa-solid fa-grip-lines"></i>
                    </span>
                    <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        Affordable Packing & Moving Charges
                    </h2>
                </div>

                <!-- Local Shifting Charges Table Start -->
                <div class="table-responsive">
                    <p class="text-center mb-2"><strong>Local Shifting Charges - Approximate Price List</strong></p>
                    <table class="table table-bordered">
                        <tbody class="table-light">
                            <tr style="background-color: var(--maroof-primary);">
                                <th>Type of Move</th>
                                <th>Up to 10 km</th>
                                <th>From 11 - 25 km</th>
                                <th>From 26 - 40 km</th>
                                <th>Above 45 km</th>
                            </tr>
                            <tr>
                                <td>1 BHK house shifting</td>
                                <td>₹ 3,000 - 5,000</td>
                                <td>₹ 4,000 – 6,500</td>
                                <td>₹ 7,000 - 8,500</td>
                                <td>₹ 8,000 - 10,500</td>
                            </tr>
                            <tr>
                                <td>2 BHK house shifting</td>
                                <td>₹ 4,000 - 7,000</td>
                                <td>₹ 6,500 - 9,500</td>
                                <td>₹ 8,500 - 11,000</td>
                                <td>₹ 10,000 - 13,500</td>
                            </tr>
                            <tr>
                                <td>3 BHK house shifting</td>
                                <td>₹ 8,000 - 10,000</td>
                                <td>₹ 9,500 - 12,500</td>
                                <td>₹ 12,000 – 16,500</td>
                                <td>₹ 15,000 - 20,500</td>
                            </tr>
                            <tr>
                                <td>4 BHK house shifting</td>
                                <td>₹ 8,000 - 12,000</td>
                                <td>₹ 12,000 - 14,500</td>
                                <td>₹ 13,500 - 17,500</td>
                                <td>₹ 15,000 - 20,500</td>
                            </tr>
                            <tr>
                                <td>Office shifting</td>
                                <td>₹ 6,500 - 10,000</td>
                                <td>₹ 11,000 - 18,500</td>
                                <td>₹ 18,000 - 26,000</td>
                                <td>₹ 25,000 - 35,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Local Shifting Charges Table End -->

                <!-- Domestic Shifting Charges Table Start -->
                <div class="table-responsive mt-4">
                    <p class="text-center mb-2"><strong>Domestic Shifting Charges - Approximate Price List</strong></p>
                    <table class="table table-bordered">
                        <tbody class="table-light">
                            <tr>
                                <th>Type of Move</th>
                                <th>Up to 400 Km</th>
                                <th>400 – 800 Km</th>
                                <th>800 – 1300 Km</th>
                                <th>1300 – 1900 Km</th>
                            </tr>
                            <tr>
                                <td>Complete house shifting</td>
                                <td>₹ 11,000 – 22,000</td>
                                <td>₹ 12,000 – 25,000</td>
                                <td>₹ 13,000 – 26,000</td>
                                <td>₹ 14,000 – 30,000</td>
                            </tr>
                            <tr>
                                <td>1 BHK house shifting</td>
                                <td>₹ 6,000 – 15,000</td>
                                <td>₹ 9,000 – 20,000</td>
                                <td>₹ 10,000 – 22,000</td>
                                <td>₹ 11,000 – 24,000</td>
                            </tr>
                            <tr>
                                <td>2 BHK house shifting</td>
                                <td>₹ 8,000 – 18,000</td>
                                <td>₹ 10,000 – 25,000</td>
                                <td>₹ 12,000 – 24,000</td>
                                <td>₹ 14,000 – 28,000</td>
                            </tr>
                            <tr>
                                <td>3 BHK house shifting</td>
                                <td>₹ 10,000 – 25,000</td>
                                <td>₹ 11,000 – 30,000</td>
                                <td>₹ 13,000 – 28,000</td>
                                <td>₹ 16,000 – 34,000</td>
                            </tr>
                            <tr>
                                <td>4 BHK house shifting</td>
                                <td>₹ 15,000 – 28,000</td>
                                <td>₹ 16,000 – 32,000</td>
                                <td>₹ 16,000 – 32,000</td>
                                <td>₹ 26,000 – 42,000</td>
                            </tr>
                            <tr>
                                <td>5 BHK house shifting</td>
                                <td>₹ 18,000 – 30,000</td>
                                <td>₹ 23,000 – 40,000</td>
                                <td>₹ 22,000 – 38,000</td>
                                <td>₹ 34,000 – 48,000</td>
                            </tr>
                            <tr>
                                <td>Car transportation charges</td>
                                <td>₹ 3,000 – 5,000</td>
                                <td>₹ 7,000 – 10,000</td>
                                <td>₹ 9,000 – 13,000</td>
                                <td>₹ 11,000 – 15,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Domestic Shifting Charges Table End -->

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

    <!-- covered city Section Start -->
    <section class="service-section-3 fix section-padding bg-cover" style="background-image: url('assets/media/background/service-background.webp'); padding: 30px 0px;">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-2">
                    <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <i class="fa-regular fa-eject"></i> Explore Our Service Areas <i class="fa-solid fa-grip-lines"></i>
                    </span>
                    <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        Trusted Moving Services in Your City
                    </h2>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_JAIPUR_URL; ?>" title="Packers and Movers in Jaipur">
                            Packers and Movers in Jaipur
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_NOIDA_URL; ?>" title="Packers and Movers in Noida">
                            Packers and Movers in Noida
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_DELHI_URL; ?>" title="Packers and Movers in Delhi">
                            Packers and Movers in Delhi
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_GURGAON_URL; ?>" title="Packers and Movers in Gurgaon">
                            Packers and Movers in Gurgaon
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_INDORE_URL; ?>" title="Packers and Movers in Indore">
                            Packers and Movers in Indore
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SURAT_URL; ?>" title="Packers and Movers in Surat">
                            Packers and Movers in Surat
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_MUMBAI_URL; ?>" title="Packers and Movers in Mumbai">
                            Packers and Movers in Mumbai
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BIKANER_URL; ?>" title="Packers and Movers in Bikaner">
                            Packers and Movers in Bikaner
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BHARATPUR_URL; ?>" title="Packers and Movers in Bharatpur">
                            Packers and Movers in Bharatpur
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_PUNE_URL; ?>" title="Packers and Movers in Pune">
                            Packers and Movers in Pune
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_UDAIPUR_URL; ?>" title="Packers and Movers in Udaipur">
                            Packers and Movers in Udaipur
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_KOTA_URL; ?>" title="Packers and Movers in Kota">
                            Packers and Movers in Kota
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_JODHPUR_URL; ?>" title="Packers and Movers in Jodhpur">
                            Packers and Movers in Jodhpur
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_JAISALMER_URL; ?>" title="Packers and Movers in Jaisalmer">
                            Packers and Movers in Jaisalmer
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_AJMER_URL; ?>" title="Packers and Movers in Ajmer">
                            Packers and Movers in Ajmer
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BHILWARA_URL; ?>" title="Packers and Movers in Bhilwara">
                            Packers and Movers in Bhilwara
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_ALWAR_URL; ?>" title="Packers and Movers in Alwar">
                            Packers and Movers in Alwar
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_CHITTORGARH_URL; ?>" title="Packers and Movers in Chittorgarh">
                            Packers and Movers in Chittorgarh
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_JHUNJHUNU_URL; ?>" title="Packers and Movers in Jhunjhunu">
                            Packers and Movers in Jhunjhunu
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SIKAR_URL; ?>" title="Packers and Movers in Sikar">
                            Packers and Movers in Sikar
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_PALI_URL; ?>" title="Packers and Movers in Pali">
                            Packers and Movers in Pali
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_LUCKNOW_URL; ?>" title="Packers and Movers in Lucknow">
                            Packers and Movers in Lucknow
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_KANPUR_URL; ?>" title="Packers and Movers in Kanpur">
                            Packers and Movers in Kanpur
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_KOLKATA_URL; ?>" title="Packers and Movers in Kolkata">
                            Packers and Movers in Kolkata
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_CHENNAI_URL; ?>" title="Packers and Movers in Chennai">
                            Packers and Movers in Chennai
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_HYDERABAD_URL; ?>" title="Packers and Movers in Hyderabad">
                            Packers and Movers in Hyderabad
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BANGALORE_URL; ?>" title="Packers and Movers in Bangalore">
                            Packers and Movers in Bangalore
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_AHMEDABAD_URL; ?>" title="Packers and Movers in Ahmedabad">
                            Packers and Movers in Ahmedabad
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_CHANDIGARH_URL; ?>" title="Packers and Movers in Chandigarh">
                            Packers and Movers in Chandigarh
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_GHAZIABAD_URL; ?>" title="Packers and Movers in Ghaziabad">
                            Packers and Movers in Ghaziabad
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_NAGPUR_URL; ?>" title="Packers and Movers in Nagpur">
                            Packers and Movers in Nagpur
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Mysuru_URL; ?>" title="Packers and Movers in Mysuru">
                            Packers and Movers in Mysuru
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_COIMBATORE_URL; ?>" title="Packers and Movers in Coimbatore">
                            Packers and Movers in Coimbatore
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_PATNA_URL; ?>" title="Packers and Movers in Patna">
                            Packers and Movers in Patna
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_RAIPUR_URL; ?>" title="Packers and Movers in Raipur">
                            Packers and Movers in Raipur
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_VADODARA_URL; ?>" title="Packers and Movers in Vadodara">
                            Packers and Movers in Vadodara
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_VISAKHAPATNAM_URL; ?>" title="Packers and Movers in Visakhapatnam">
                            Packers and Movers in Visakhapatnam
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_PARTAPNAGAR_URL; ?>" title="Packers and Movers in Pratap Nagar">
                            Packers and Movers in Pratap Nagar Jaipur
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SIRSIROAD_URL; ?>" title="Packers and Movers in Visakhapatnam">
                            Packers and Movers in Sirsi Road Jaipur
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_VKI14NUMBER_URL; ?>" title="Packers and Movers in Visakhapatnam">
                            Packers and Movers in VKI 14 Number Jaipur
                        </a>
                    </div>
                </div>

                <!-- Tonk -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_TONK_URL; ?>" title="Packers and Movers in Tonk">
                            Packers and Movers in Tonk
                        </a>
                    </div>
                </div>

                <!-- Sawai Madhopur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SAWAI_MADHOPUR_URL; ?>" title="Packers and Movers in Sawai Madhopur">
                            Packers and Movers in Sawai Madhopur
                        </a>
                    </div>
                </div>

                <!-- Churu -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_CHURU_URL; ?>" title="Packers and Movers in Churu">
                            Packers and Movers in Churu
                        </a>
                    </div>
                </div>

                <!-- Chirawa -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_CHIRAWA_URL; ?>" title="Packers and Movers in Chirawa">
                            Packers and Movers in Chirawa
                        </a>
                    </div>
                </div>

                <!-- Neem Ka Thana -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_NEEM_KA_THANA_URL; ?>" title="Packers and Movers in Neem Ka Thana">
                            Packers and Movers in Neem Ka Thana
                        </a>
                    </div>
                </div>

                <!-- Neemrana -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_NEEMRANA_URL; ?>" title="Packers and Movers in Neemrana">
                            Packers and Movers in Neemrana
                        </a>
                    </div>
                </div>

                <!-- Bhiwadi -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BHIWADI_URL; ?>" title="Packers and Movers in Bhiwadi">
                            Packers and Movers in Bhiwadi
                        </a>
                    </div>
                </div>

                <!-- Rawatbhata -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_RAWATBATHA_URL; ?>" title="Packers and Movers in Rawatbhata">
                            Packers and Movers in Rawatbhata
                        </a>
                    </div>
                </div>

                <!-- Barmer -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BARMER_URL; ?>" title="Packers and Movers in Barmer">
                            Packers and Movers in Barmer
                        </a>
                    </div>
                </div>

                <!-- Agra -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_AGRA_URL; ?>" title="Packers and Movers in Agra">
                            Packers and Movers in Agra
                        </a>
                    </div>
                </div>

                <!-- Prayagraj -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Prayagraj_URL; ?>" title="Packers and Movers in Prayagraj">
                            Packers and Movers in Prayagraj
                        </a>
                    </div>
                </div>

                <!-- Jammu and Kashmir -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_JAMMU_AND_KASHMIR_URL; ?>" title="Packers and Movers in Jammu and Kashmir">
                            Packers and Movers in Jammu and Kashmir
                        </a>
                    </div>
                </div>

                <!-- Hanumangarh -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_HANUMANGARH_URL; ?>" title="Packers and Movers in Hanumangarh">
                            Packers and Movers in Hanumangarh
                        </a>
                    </div>
                </div>

                <!-- Sri Ganganagar -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SRI_GANGANAGAR_URL; ?>" title="Packers and Movers in Sri Ganganagar">
                            Packers and Movers in Sri Ganganagar
                        </a>
                    </div>
                </div>

                <!-- Bathinda -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BATHINDA_URL; ?>" title="Packers and Movers in Bathinda">
                            Packers and Movers in Bathinda
                        </a>
                    </div>
                </div>

                <!-- Abu Road -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Abu_Road_URL; ?>" title="Packers and Movers in Abu Road">
                            Packers and Movers in Abu Road
                        </a>
                    </div>
                </div>

                <!-- Puskar -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_PUSHKAR_URL; ?>" title="Packers and Movers in Pushkar">
                            Packers and Movers in Pushkar
                        </a>
                    </div>
                </div>

                <!-- Mansarovar Jaipur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_MANSAROVAR_JAIPUR_URL; ?>" title="Packers and Movers in Mansarovar Jaipur">
                            Packers and Movers in Mansarovar Jaipur
                        </a>
                    </div>
                </div>

                <!-- Vishali Nagar Jaipur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Vishali_Nagar_JAIPUR_URL; ?>" title="Packers and Movers in Vishali Nagar Jaipur">
                            Packers and Movers in Vishali Nagar Jaipur
                        </a>
                    </div>
                </div>

                <!-- Chomu -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_CHOMU_URL; ?>" title="Packers and Movers in Chomu">
                            Packers and Movers in Chomu
                        </a>
                    </div>
                </div>

                <!-- Nagaur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_NAGAUR_URL; ?>" title="Packers and Movers in Nagaur">
                            Packers and Movers in Nagaur
                        </a>
                    </div>
                </div>

                <!-- Kuchaman City -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_KUCHAMAN_CITY_URL; ?>" title="Packers and Movers in Kuchaman City">
                            Packers and Movers in Kuchaman City
                        </a>
                    </div>
                </div>

                <!-- Jhansi -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Jhansi_URL; ?>" title="Packers and Movers in Jhansi">
                            Packers and Movers in Jhansi
                        </a>
                    </div>
                </div>

                <!-- Dholpur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_DHOLPUR_URL; ?>" title="Packers and Movers in Dholpur">
                            Packers and Movers in Dholpur
                        </a>
                    </div>
                </div>

                <!-- Manesar -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_MANESAR_URL; ?>" title="Packers and Movers in Manesar">
                            Packers and Movers in Manesar
                        </a>
                    </div>
                </div>

                <!-- Nashik -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_NASHIK_URL; ?>" title="Packers and Movers in Nashik">
                            Packers and Movers in Nashik
                        </a>
                    </div>
                </div>

                <!-- Morena -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Morena_URL; ?>" title="Packers and Movers in Morena">
                            Packers and Movers in Morena
                        </a>
                    </div>
                </div>

                <!-- Hisar -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_HISAR_URL; ?>" title="Packers and Movers in Hisar">
                            Packers and Movers in Hisar
                        </a>
                    </div>
                </div>

                <!-- Beawar -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_BEAWAR_URL; ?>" title="Packers and Movers in Beawar">
                            Packers and Movers in Beawar
                        </a>
                    </div>
                </div>

                <!-- Jagatpura Jaipur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_JAGATPURA_JAIPUR_URL; ?>" title="Packers and Movers in Jagatpura Jaipur">
                            Packers and Movers in Jagatpura Jaipur
                        </a>
                    </div>
                </div>

                <!-- Gangapur City -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_GANGAPUR_CITY_URL; ?>" title="Packers and Movers in Gangapur City">
                            Packers and Movers in Gangapur City
                        </a>
                    </div>
                </div>

                <!-- Amer -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_AMER_URL; ?>" title="Packers and Movers in Amer">
                            Packers and Movers in Amer Jaipur
                        </a>
                    </div>
                </div>

                <!-- Suratgarh -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SURATGARH_URL; ?>" title="Packers and Movers in Suratgarh">
                            Packers and Movers in Suratgarh
                        </a>
                    </div>
                </div>

                <!-- Sardarsahar -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SARDARSAHAR_URL; ?>" title="Packers and Movers in Sardarsahar">
                            Packers and Movers in Sardarsahar
                        </a>
                    </div>
                </div>

                <!-- Pali -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_PALI_URL; ?>" title="Packers and Movers in Pali">
                            Packers and Movers in Pali
                        </a>
                    </div>
                </div>

                <!-- Mount Abu -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Mount_Abu_URL; ?>" title="Packers and Movers in Mount Abu">
                            Packers and Movers in Mount Abu
                        </a>
                    </div>
                </div>

                <!-- Dehradun -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_DEHRADUN_URL; ?>" title="Packers and Movers in Dehradun">
                            Packers and Movers in Dehradun
                        </a>
                    </div>
                </div>

                <!-- Rajsamand -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_RAJSAMAND_URL; ?>" title="Packers and Movers in Rajsamand">
                            Packers and Movers in Rajsamand
                        </a>
                    </div>
                </div>

                <!-- Dugargarh -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_Dugargarh_URL; ?>" title="Packers and Movers in Dugargarh">
                            Packers and Movers in Dugargarh
                        </a>
                    </div>
                </div>

                <!-- Sodala Jaipur -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-content our-service-area5">
                        <a href="<?php echo PACKERS_MOVERS_SODALA_JAIPUR_URL; ?>" title="Packers and Movers in Sodala Jaipur">
                            Packers and Movers in Sodala Jaipur
                        </a>
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
    <script>
        // open popup on page load after 15 seconds
        setTimeout(function() {
            $('#quickEnquiryPopup').modal('show');
        }, 15000);
    </script>
</body>

</html>