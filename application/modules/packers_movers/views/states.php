<main class="main">
    <!-- Breadcrumb Section -->
    <div class="bg-primary py-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <h2 class="text-white mb-2">Our Branches</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url() ?>" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white">Our Branches</li>

                </ol>
            </nav>
        </div>
    </div>

    <?php $this->load->view('home/marquee.php') ?>
    <?php
    $states = [
        ["category" => "Rajasthan", "title" => "Packers and Movers", "link" => "rajasthan"],
        ["category" => "Uttar Pradesh", "title" => "Packers and Movers", "link" => "uttar-pradesh"],
        ["category" => "Delhi", "title" => "Packers and Movers", "link" => "delhi"],
        ["category" => "Haryana", "title" => "Packers and Movers", "link" => "haryana"],
        ["category" => "Madhya Pradesh", "title" => "Packers and Movers", "link" => "madhya-pradesh"],
        ["category" => "Gujarat", "title" => "Packers and Movers", "link" => "gujarat"],
        ["category" => "Maharashtra", "title" => "Packers and Movers", "link" => "maharashtra"],
        ["category" => "West Bengal", "title" => "Packers and Movers", "link" => "west-bengal"],
        ["category" => "Tamil Nadu", "title" => "Packers and Movers", "link" => "tamil-nadu"],
        ["category" => "Telangana", "title" => "Packers and Movers", "link" => "telangana"],
        ["category" => "Karnataka", "title" => "Packers and Movers", "link" => "karnataka"],
        ["category" => "Chandigarh", "title" => "Packers and Movers", "link" => "chandigarh"],
        ["category" => "Bihar", "title" => "Packers and Movers", "link" => "bihar"],
        ["category" => "Chhattisgarh", "title" => "Packers and Movers", "link" => "chhattisgarh"],
        ["category" => "Andhra Pradesh", "title" => "Packers and Movers", "link" => "andhra-pradesh"],
        ["category" => "Jammu and Kashmir", "title" => "Packers and Movers", "link" => "jammu-and-kashmir"],
        ["category" => "Punjab", "title" => "Packers and Movers", "link" => "punjab"],
        ["category" => "Uttarakhand", "title" => "Packers and Movers", "link" => "uttarakhand"],
        ["category" => "Jaipur", "title" => "Packers and Movers", "link" => "jaipur"],
        ["category" => "Udaipur", "title" => "Packers and Movers", "link" => "udaipur"],
        ["category" => "Kota", "title" => "Packers and Movers", "link" => "kota"],
        ["category" => "Ajmer", "title" => "Packers and Movers", "link" => "ajmer"],
        ["category" => "Jhunjhunu ", "title" => "Packers and Movers", "link" => "jhunjhunu "],
        ["category" => "Sikar", "title" => "Packers and Movers", "link" => "sikar"],
        ["category" => "Jodhpur", "title" => "Packers and Movers", "link" => "jodhpur"],
        ["category" => "Alwar", "title" => "Packers and Movers", "link" => "alwar"],
        ["category" => "Bikaner", "title" => "Packers and Movers", "link" => "bikaner"],
        ["category" => "Bhilwada", "title" => "Packers and Movers", "link" => "bhilwada"],
        ["category" => "Chittorgad", "title" => "Packers and Movers", "link" => "chittorgad"],
        ["category" => "India", "title" => "Packers and Movers", "link" => "india"],

    ];
    ?>



    <!-- State Cards Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($states as $item): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fas fa-map-marker-alt fa-lg"></i>
                                </div>
                                <small class="text-muted mb-1"><?= $item['category'] ?></small>
                                <h6 class="fw-bold mb-2"><?= $item['title'] ?></h6>
                                <a href="<?= $item['link'] ?>" class="btn btn-outline-primary btn-sm mt-auto">
                                    Visit <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>