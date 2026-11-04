<!DOCTYPE html>
<html lang="en">
<?php
// define some Constent Variable
define("MySite", true);
define("page_title", 'All Services - SRB Group Packers and Movers');
define('page_description', 'Explore the comprehensive range of services offered by SRB Group Packers and Movers, including transportation, packing and moving, loading and unloading, unpacking and escort, home and office shifting, and more. Click to read more about each service.');
define('page_keyword', 'SRB Group Packers and Movers, packing and moving services, transportation services, loading and unloading, unpacking and escort, home shifting, office shifting, car transportation, bike transportation, warehouse services, domestic relocation, international relocation, goods insurance, painting moving services');
// define some variable
$Our_services_menu_active = 1;
$all_services_menu_active = 1;
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
                <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">All Services</h2>
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
                        All Services
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

    <!-- Service Section Start -->
    <section class="service-section-3 fix section-padding bg-cover" style="background-image: url('assets/media/background/service-background.webp');padding-bottom:50px;">
        <div class="container">
            <div class="section-title text-center mb-2">
                <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><i class="fa-regular fa-eject"></i> We Offer Best Services <i class="fa-solid fa-grip-lines"></i></span>
                <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    Your Moving Needs, Our Priority
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-tranportation-service.webp" alt="Nationwide Transportation Service by SRB Group Packers and Movers" title="Reliable Transportation Across India" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/transportation.svg" alt="Transportation Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/transportation.svg" alt="Transportation Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>">Transportation</a>
                            </h4>
                            <p>
                                Expert transportation services ensuring timely and safe delivery of all types of cargo across different locations.
                            </p>
                            <a href="<?php echo TRANSPORTATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-packing-and-moving-services.webp" alt="Packing and Moving Service by SRB Group Packers and Movers" title="Comprehensive Packing and Moving" loading="lazy">
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
                                We offer comprehensive packing and moving services to ensure your belongings are packed securely and transported safely.
                            </p>
                            <a href="<?php echo PACKING_AND_MOVING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-loading-and-unloading-services.webp" alt="Loading and Unloading Service by SRB Group Packers and Movers" title="Safe Loading and Unloading" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/trucking.svg" alt="Loading and Unloading Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/trucking.svg" alt="Loading and Unloading Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>">Loading and Unloading</a>
                            </h4>
                            <p>
                                Our loading and unloading services are designed to handle your goods with care, ensuring safe handling during the move.
                            </p>
                            <a href="<?php echo LOADING_AND_UNLOADING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-unpacking-and-escort-service.webp" alt="Unpacking and Escort Service by SRB Group Packers and Movers" title="Efficient Unpacking and Escort Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/open-box.svg" alt="Unpacking and Escort Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/open-box.svg" alt="Unpacking and Escort Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo UNPACKING_AND_ESCORT_SERVICES_PAGE_URL; ?>">Unpacking and Escort</a>
                            </h4>
                            <p>
                                Our unpacking and escort services help you settle into your new place quickly, with assistance in unpacking and arranging items.
                            </p>
                            <a href="<?php echo UNPACKING_AND_ESCORT_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-home-shifting-service.webp" alt="Home Shifting Service by SRB Group Packers and Movers" title="Smooth Home Shifting Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/moving-home.svg" alt="Home Shifting Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/moving-home.svg" alt="Home Shifting Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>">Home Shifting</a>
                            </h4>
                            <p>
                                Our home shifting services ensure a smooth and hassle-free relocation of your household items, handling everything from packing to transportation.
                            </p>
                            <a href="<?php echo HOME_SHIFTING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-office-shifting-services.webp" alt="Office Shifting Service by SRB Group Packers and Movers" title="Efficient Office Shifting Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/office-location.svg" alt="Office Shifting Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/office-location.svg" alt="Office Shifting Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>">Office Shifting</a>
                            </h4>
                            <p>
                                We offer office shifting services to help businesses relocate efficiently, minimizing downtime and ensuring a seamless transition with SRB Group Packers
                            </p>
                            <a href="<?php echo OFFICE_SHIFTING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-car-and-bike-transportation-service.webp" alt="Car and Bike Transportation Service by SRB Group Packers and Movers" title="Secure Car and Bike Transportation" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/car.svg" alt="Car and Bike Transportation Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/car.svg" alt="Car and Bike Transportation Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>">Car & Bike Transportation</a>
                            </h4>
                            <p>
                                Our car and bike transportation services ensure that your vehicles are transported safely to your new location, using specially designed carriers.
                            </p>
                            <a href="<?php echo CAR_AND_BIKE_TRANSPORTATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-warehouse-service.webp" alt="Warehouse Service by SRB Group Packers and Movers" title="Secure Warehouse Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/warehouse.svg" alt="Warehouse Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/warehouse.svg" alt="Warehouse Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>">Warehouse Services</a>
                            </h4>
                            <p>
                                We offer secure warehouse services for storing your goods, equipped with advanced security systems to ensure the safety of your belongings.
                            </p>
                            <a href="<?php echo WAREHOUSING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-domestic-relocation-service.webp" alt="Domestic Relocation Service by SRB Group Packers and Movers" title="Smooth Domestic Relocation" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/container.svg" alt="Domestic Relocation Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/container.svg" alt="Domestic Relocation Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo DOMESTIC_RELOCATION_SERVICES_PAGE_URL; ?>">Domestic Relocation</a>
                            </h4>
                            <p>
                                Our domestic relocation services are designed to provide a seamless moving experience within India, handling all aspects of the move efficiently.
                            </p>
                            <a href="<?php echo DOMESTIC_RELOCATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-international-relocation-service.webp" alt="International Relocation Service by SRB Group Packers and Movers" title="Hassle-Free International Relocation" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/air-plane.svg" alt="International Relocation Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/air-plane.svg" alt="International Relocation Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL; ?>">International Relocation</a>
                            </h4>
                            <p>
                                We offer international relocation services to help you move abroad smoothly, handling everything from documentation to transportation.
                            </p>
                            <a href="<?php echo INTERNATIONAL_RELOCATION_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-goods-insurance-service.webp" alt="Goods Insurance Service by SRB Group Packers and Movers" title="Comprehensive Goods Insurance" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/insurance.svg" alt="Goods Insurance Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/insurance.svg" alt="Goods Insurance Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo GOODS_INSURANCE_SERVICES_PAGE_URL; ?>">Goods Insurance</a>
                            </h4>
                            <p>
                                Our goods insurance services provide coverage for your belongings during transit, ensuring compensation for any loss or damage.
                            </p>
                            <a href="<?php echo GOODS_INSURANCE_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-painting-relocation-service.webp" alt="Painting Moving Service by SRB Group Packers and Movers" title="Specialized Painting Moving Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/painting-frame.svg" alt="Painting Moving Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/painting-frame.svg" alt="Painting Moving Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo PAINTING_MOVING_SERVICES_PAGE_URL; ?>">Painting Moving</a>
                            </h4>
                            <p>
                                We offer specialized painting moving services to transport your artwork safely, using custom packaging solutions to protect your valuable paintings.
                            </p>
                            <a href="<?php echo PAINTING_MOVING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-pet-moving-service.webp" alt="Pet Moving Service by SRB Group Packers and Movers" title="Caring Pet Moving Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/pet-moving.svg" alt="Pet Moving Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/pet-moving.svg" alt="Pet Moving Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo PET_MOVING_SERVICES_PAGE_URL; ?>">Pet Moving</a>
                            </h4>
                            <p>
                                Our pet moving services ensure that your beloved pets are transported safely and comfortably to your new home, with care and compassion.
                            </p>
                            <a href="<?php echo PET_MOVING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-factory-shifting-service.webp" alt="Factory Shifting Service by SRB Group Packers and Movers" title="Efficient Factory Shifting Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/factory-shifting.svg" alt="Factory Shifting Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/factory-shifting.svg" alt="Factory Shifting Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo FACTORY_SHIFTING_SERVICES_PAGE_URL; ?>">Factory Shifting</a>
                            </h4>
                            <p>
                                Our factory shifting services are designed to relocate industrial equipment and machinery safely, minimizing downtime and ensuring a smooth transition.
                            </p>
                            <a href="<?php echo FACTORY_SHIFTING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-hotel-shifting-service.webp" alt="Hotel Shifting Service by SRB Group Packers and Movers" title="Professional Hotel Shifting Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/hotel-shifting.svg" alt="Hotel Shifting Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/hotel-shifting.svg" alt="Hotel Shifting Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo HOTEL_SHIFTING_SERVICES_PAGE_URL; ?>">Hotel Shifting</a>
                            </h4>
                            <p>
                                Our hotel shifting services ensure a seamless transition for hotels relocating, handling everything from furniture to equipment with care.
                            </p>
                            <a href="<?php echo HOTEL_SHIFTING_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="assets/media/services/srb-group-packers-and-movers-custom-clearance-service.webp" alt="Custom Clearance Service by SRB Group Packers and Movers" title="Efficient Custom Clearance Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="assets/media/svg/services-icon/custom-clearance.svg" alt="Custom Clearance Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="assets/media/svg/services-icon/custom-clearance.svg" alt="Custom Clearance Service Icon">
                            </div>
                            <h4>
                                <a href="<?php echo CUSTOM_CLEARANCE_SERVICES_PAGE_URL; ?>">Custom Clearance</a>
                            </h4>
                            <p>
                                We provide custom clearance services to ensure that your goods comply with all legal regulations, making the import/export process hassle-free.
                            </p>
                            <a href="<?php echo CUSTOM_CLEARANCE_SERVICES_PAGE_URL; ?>" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
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