<!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?=base_url()?>assets/media/background/breadcrumb.webp');">
        <div class="border-shape">
            <img src="<?=base_url()?>assets/media/shape/breadcrumb/element.webp" alt="Decorative shape">
        </div>
        <div class="line-shape">
            <img src="<?=base_url()?>assets/media/shape/breadcrumb/line-element.webp" alt="Line shape">
        </div>
        <div class="container">
            <div class="page-heading">
                <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">All Services</h2>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="<?=site_url()?>" title="Go to Home Page">
                            Home
                        </a>
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
    <?php $this->load->view('home/marquee.php')?>
    



<!-- All Service Section Start -->
<section class="service-section-3 fix section-padding bg-cover" style="background-image: url('assets/media/background/service-background.webp');padding-bottom:50px;">
    <div class="container">
        <div class="section-title text-center mb-2">
            <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><i class="fa-regular fa-eject"></i> We Offer Best Services <i class="fa-solid fa-grip-lines"></i></span>
            <h2 class="wow fadeInUp h2sectionheadline" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                Your Moving Needs, Our Priority
            </h2>
        </div>
        <div class="row">
            <?php
         $services = [
    [
        'image' => 'srb-group-packers-and-movers-tranportation-service.webp',
        'icon' => 'transportation.svg',
        'title' => 'Transportation',
        'url' => site_url('transportation'),
        'description' => 'Expert transportation services ensuring timely and safe delivery of all types of cargo across different locations.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-packing-and-moving-services.webp',
        'icon' => 'moving.svg',
        'title' => 'Packing and Moving',
        'url' => site_url('packing-moving'),
        'description' => 'We offer comprehensive packing and moving services to ensure your belongings are packed securely and transported safely.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-loading-and-unloading-services.webp',
        'icon' => 'trucking.svg',
        'title' => 'Loading and Unloading',
        'url' => site_url('loading-unloading'),
        'description' => 'Our loading and unloading services are designed to handle your goods with care, ensuring safe handling during the move.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-unpacking-and-escort-service.webp',
        'icon' => 'open-box.svg',
        'title' => 'Unpacking and Escort',
        'url' => site_url('unpacking-escort'),
        'description' => 'Our unpacking and escort services help you settle into your new place quickly, with assistance in unpacking and arranging items.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-home-shifting-service.webp',
        'icon' => 'moving-home.svg',
        'title' => 'Home Shifting',
        'url' => site_url('home-shifting'),
        'description' => 'Our home shifting services ensure a smooth and hassle-free relocation of your household items, handling everything from packing to transportation.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-office-shifting-services.webp',
        'icon' => 'office-location.svg',
        'title' => 'Office Shifting',
        'url' => site_url('office-relocation'),
        'description' => 'We offer office shifting services to help businesses relocate efficiently, minimizing downtime and ensuring a seamless transition with SRB Group Packers'
    ],
    [
        'image' => 'srb-group-packers-and-movers-car-and-bike-transportation-service.webp',
        'icon' => 'car.svg',
        'title' => 'Car & Bike Transportation',
        'url' => site_url('car-bike'),
        'description' => 'Our car and bike transportation services ensure that your vehicles are transported safely to your new location, using specially designed carriers.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-warehouse-service.webp',
        'icon' => 'warehouse.svg',
        'title' => 'Warehouse Services',
        'url' => site_url('warehouse'),
        'description' => 'We offer secure warehouse services for storing your goods, equipped with advanced security systems to ensure the safety of your belongings.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-domestic-relocation-service.webp',
        'icon' => 'container.svg',
        'title' => 'Domestic Relocation',
        'url' => site_url('domestic-relocation'),
        'description' => 'Our domestic relocation services are designed to provide a seamless moving experience within India, handling all aspects of the move efficiently.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-international-relocation-service.webp',
        'icon' => 'air-plane.svg',
        'title' => 'International Relocation',
        'url' => site_url('international-relocation'),
        'description' => 'We offer international relocation services to help you move abroad smoothly, handling everything from documentation to transportation.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-goods-insurance-service.webp',
        'icon' => 'insurance.svg',
        'title' => 'Goods Insurance',
        'url' => site_url('goods-insurance'),
        'description' => 'Our goods insurance services provide coverage for your belongings during transit, ensuring compensation for any loss or damage.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-painting-relocation-service.webp',
        'icon' => 'painting-frame.svg',
        'title' => 'Painting Moving',
        'url' => site_url('painting-moving'),
        'description' => 'We offer specialized painting moving services to transport your artwork safely, using custom packaging solutions to protect your valuable paintings.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-pet-moving-service.webp',
        'icon' => 'pet-moving.svg',
        'title' => 'Pet Moving',
        'url' => site_url('pet-moving'),
        'description' => 'Our pet moving services ensure that your beloved pets are transported safely and comfortably to your new home, with care and compassion.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-factory-shifting-service.webp',
        'icon' => 'factory-shifting.svg',
        'title' => 'Factory Shifting',
        'url' => site_url('factory-shifting'),
        'description' => 'Our factory shifting services are designed to relocate industrial equipment and machinery safely, minimizing downtime and ensuring a smooth transition.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-hotel-shifting-service.webp',
        'icon' => 'hotel-shifting.svg',
        'title' => 'Hotel Shifting',
        'url' => site_url('hotel-shifting'),
        'description' => 'Our hotel shifting services ensure a seamless transition for hotels relocating, handling everything from furniture to equipment with care.'
    ],
    [
        'image' => 'srb-group-packers-and-movers-custom-clearance-service.webp',
        'icon' => 'custom-clearance.svg',
        'title' => 'Custom Clearance',
        'url' => site_url('custom-clearance'),
        'description' => 'We provide custom clearance services to ensure that your goods comply with all legal regulations, making the import/export process hassle-free.'
    ]
];

            foreach ($services as $service) {
                echo '
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="'.base_url().'assets/media/services/'.$service['image'].'" alt="'.$service['title'].' Service by SRB Group Packers and Movers" title="'.$service['title'].' Services" loading="lazy">
                        </div>
                        <div class="icon-2">
                            <img src="'.base_url().'assets/media/svg/services-icon/'.$service['icon'].'" alt="'.$service['title'].' Service Icon">
                        </div>
                        <div class="service-content">
                            <div class="icon">
                                <img src="'.base_url().'assets/media/svg/services-icon/'.$service['icon'].'" alt="'.$service['title'].' Service Icon">
                            </div>
                            <h4>
                                <a href="'.$service['url'].'">'.$service['title'].'</a>
                            </h4>
                            <p>
                                '.$service['description'].'
                            </p>
                            <a href="'.$service['url'].'" class="theme-btn-2 mt-2">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

   <?php $this->load->view('home/achievement.php')?>
    <?php $this->load->view('home/faq.php')?>
      <?php $this->load->view('home/client.php')?>