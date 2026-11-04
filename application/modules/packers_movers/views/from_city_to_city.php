<?php
$from = strtolower(str_replace(" ", "-", $from));
$from = ucwords($from);
$to = strtolower(str_replace(" ", "-", $to));
$to = ucwords($to);
include 'from_city_content.php'; ?>

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
            <h1 class="wow fadeInUp text-white" data-wow-delay=".3s">Best Packers And Movers From <?= @$from ?> To <?= @$to ?></h1>
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
                    <?= @$from ?> - <?= @$to ?>
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


<?php $this->load->view('home/achievement.php') ?>
<?php $this->load->view('home/faq.php') ?>
<?php $this->load->view('home/client.php') ?>
