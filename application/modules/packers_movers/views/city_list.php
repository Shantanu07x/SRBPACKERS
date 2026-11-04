    <?php
    $st = strtolower(str_replace(" ", "-", $state));
    include "data/$st.php";
    $state = ucwords($state);
    ?>

<main class="main">
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
                <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">Packers and Movers in <?= $state ?>, India</h2>
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
                        Our Branches
                    </li>
                     <li>
                        <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li>
                        <?= $state ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php $this->load->view('home/marquee.php')?>

<div class="our-service-page" style="padding: 60px 0;">
    <div class="container feature-content-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-card-link d-block h-100 text-decoration-none wow fadeInUp" data-wow-delay=".3s">
                        <div class="city-card card border-0 shadow h-100">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <!-- Truck Icon on Left -->
                                <div class="icon">
                                    <img src="<?=base_url()?>assets\media\svg\delivery-truck.png" style="width:50px;" alt="<?= $ct['nm'] ?>">
                                </div>
                                <!-- Title on Right -->
                                <div class="city-name">
                                    <h5>Packers and Movers <b><?= $ct['nm'] ?></b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>
<style>
.our-service-page {
    background-attachment: fixed;
    padding: 40px 0;
}



.city-card {
    border-radius: 10px;
    background-color: #ffffff;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer; 
    transform: translateY(0); 
}

.city-card:hover {
    background-color: #f8f9fa; 
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); 
    transform: translateY(-10px); 
}

.card-body {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:5px;
}


.city-name h5 {
    font-size: 15px;
    font-weight: bold;
    color: #333;
    margin-left:15px;
}

.city-card:hover .icon-container i {
    color: #007bff; 
}

@media (max-width: 576px) {
    .city-name h5 {
        font-size: 10px;
    }

    .icon-container i {
        font-size: 2rem;
    }
}

</style>