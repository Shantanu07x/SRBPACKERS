<?php
// $this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} ?>


<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?= base_url() ?>assets/media/background/breadcrumb.webp');">
    <div class="border-shape">
        <img src="<?= base_url() ?>assets/media/shape/breadcrumb/element.webp" alt="Decorative shape">
    </div>
    <div class="line-shape">
        <img src="<?= base_url() ?>assets/media/shape/breadcrumb/line-element.webp" alt="Line shape">
    </div>
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp text-white" data-wow-delay=".3s">Best Packers and Movers in <?= $city ?></h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="<?= site_url() ?>" title="Go to Home Page">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </li>
                <li>
                    <?= $state ?>
                </li>
                <li>
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </li>
                <li>
                    <?= $city ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->load->view('home/marquee.php') ?>
<div class="container mt-2">
    <?php $this->load->view('quoteform.php') ?>

</div>
<section class="service-details-section fix section-padding">
    <div class="container">
        <div class="service-details-wrapper unorder-list-reset">
            <div class="row g-4">
                <div class="col-12 col-lg-8 order-1 order-md-1">
                    <div class="service-details-items">
                        <div class="details-content service-area-content-cus wow fadeInUp" data-wow-delay=".3s">
                            <?= $htmlcontent ?>


                            <div class="details-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="<?= base_url() ?>assets/media/service-area/srb-gr…ers-and-movers-team-image.jpeg.png" alt="SRB Group Packers and Movers" title="SRB Group Packers and Movers in <?= $city ?>" loading="lazy">
                            </div>

                            <?= $htmlcontent1 ?>
                            <?= $htmlcontent2 ?>
                            <hr>

                        </div>
                    </div>
                </div>
                <?php $this->load->view('strategy/services_widget.php') ?>
            </div>
        </div>

        <div class="service-details-wrapper unorder-list-reset">
            <div class="row g-4">
                <div class="col-12  order-1 order-md-1">
                    <div class="details-content service-area-content-cus wow fadeInUp" data-wow-delay=".3s">
                        <?= $htmlcontent3 ?>
                        <?= $htmlcontent4 ?>
                        <?= $footercontent1 ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


<?php if ($ctlink == "jaipur") { ?>

<?php include 'city_from_to_links.php';
} ?>
<br><br>


<?php $this->load->view('home/achievement.php') ?>
<?php $this->load->view('home/faq.php') ?>
<?php $this->load->view('home/client.php') ?>

<div class="container">
    <div class="row mt-2 mb-3">

        <div class="col-sm-12  wow fadeInUp">

            <?php

            $keyw = array(

                "Top 5 Packers in $city",

                "Top 10 Packers in $city",

                "Top movers in $city",

                "Top 5 movers in $city",

                "Movers near me $city",

                "Packers and movers in $city",

                "Moving companies near me $city",

                "Movers $city",

                "Packers and movers near me $city",

                "Removal companies in $city",

                "Moving services in $city",

                "Cheap movers in $city",

                "Local movers in $city",

                "Local moving companies in $city",

                "$city best moving companies",

                "House movers $city",

                "Packers movers $city",

                "Moving services near $city",

                "House removals $city",

                "Cheap moving companies in $city",

                "Professional movers in $city",

                "House movers near $city",

                "Cheap movers $city",

                "Best packers and movers in $city",

                "Affordable movers $city",

                "International movers from $city",

                "International moving companies in $city"

            );

            ?>

            <h6>Related Keywords in <?= $city ?></h6>

            <ul class="inline">

                <?php

                shuffle($keyw);

                foreach ($keyw as $k) { ?>

                    <li class="badge" style="background-color:#1C35A4"><?= $k ?></li>

                <?php } ?>

            </ul>

        </div>

    </div>
</div>
