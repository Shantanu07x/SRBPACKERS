<!DOCTYPE html>
<html lang="en">
<?php
// define some Constent Variable
define("MySite", true);
define("page_title", 'Client Reviews - SRB Group Packers and Movers');
define('page_description', 'Read client reviews for SRB Group Packers and Movers. See what our satisfied customers from across India have to say about our reliable and efficient packing and moving services.');
define('page_keyword', 'client reviews, SRB Group Packers and Movers reviews, customer feedback, packing and moving reviews, best movers India');
// define some variable
$review_menu_active = 1;
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
                                    <h4>Rajesh Kumar</h4>
                                    <p>Mumbai</p>
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
                                <b>SRB Group Packers and Movers</b> made my relocation from Mumbai to Delhi incredibly smooth. Their team was professional and handled everything with care. Highly recommended!
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
                                    <h4>Priya Sharma</h4>
                                    <p>Bangalore</p>
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
                                I was worried about moving my office, but <b>SRB Group Packers and Movers</b> took care of everything efficiently. From packing to unpacking, they were outstanding. Thank you for the excellent service!
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
                                    <h4> Ankit Verma</h4>
                                    <p>Bangalore</p>
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
                                The team was very professional and courteous. They ensured that all my belongings were packed <b>securely and transported without any damage</b>. Great job! Highly recommended!
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
                                    <h4> Sunita Agarwal</h4>
                                    <p>Kolkata</p>
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
                                Fantastic service! <b> SRB Group Packers and Movers</b> made my home shifting experience hassle-free. The <b>staff was friendly and very efficient</b>. I would definitely use their services again.
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
                                    <h4> Vikram Singh</h4>
                                    <p>Hyderabad</p>
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
                                <b>SRB Group Packers and Movers</b> exceeded my expectations. They provided excellent service and ensured that my <b>car was transported safely to my new home</b>. Very happy with their service!
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
                                    <h4>Neha Gupta</h4>
                                    <p>Chennai</p>
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
                                <b>SRB Group Packers and Movers</b> made my move seamless and stress-free. Their team was professional and handled all my belongings with care. Highly recommend their services!
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
                                    <h4>Rajesh Kumar</h4>
                                    <p>Mumbai</p>
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
                                The <b>best movers in India</b>! SRB Group Packers and Movers provided excellent service during my office relocation. Everything was handled efficiently and on time.
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
                                    <h4>Anita Desai</h4>
                                    <p>Bangalore</p>
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
                                I had a wonderful experience with <b>SRB Group Packers and Movers</b>. The team was courteous and handled all my items with great care. Would definitely use their services again.
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
                                    <h4>Vikram Singh</h4>
                                    <p>Delhi</p>
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
                                <b>SRB Group Packers and Movers</b> exceeded my expectations. Their professionalism and efficiency made my international relocation smooth and hassle-free.
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
                                    <h4>Priya Verma</h4>
                                    <p>Pune</p>
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
                                I highly recommend <b>SRB Group Packers and Movers</b> for their reliable and professional service. My car and household items were moved without any issues.
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
                                    <h4>Ramesh Patel</h4>
                                    <p>Ahmedabad</p>
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
                                <b>SRB Group Packers and Movers</b> provided excellent service. Their team was very careful with my belongings, and everything arrived in perfect condition.
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
                                    <h4>Sunita Reddy</h4>
                                    <p>Hyderabad</p>
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
                                I am very impressed with <b>SRB Group Packers and Movers</b>. They were punctual, professional, and took great care of all my items during the move.
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
                                    <h4>Arjun Das</h4>
                                    <p>Kolkata</p>
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
                                My experience with <b>SRB Group Packers and Movers</b> was fantastic. They handled everything professionally and made sure all my items were transported safely.
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
                                    <h4>Meera Rao</h4>
                                    <p>Goa</p>
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
                                I highly recommend <b>SRB Group Packers and Movers</b>. Their team was efficient, friendly, and took great care of all my belongings during the move.
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
                                    <h4>Rohit Sharma</h4>
                                    <p>Jaipur</p>
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
                                **SRB Group Packers and Movers** provided outstanding service. Their team was very professional and handled my move with great care and efficiency.
                            </p>
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