

<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<?php $this->load->view('contacts/quotemodal.php')?>
<!-- Make A Payment Modal -->
<div class="modal fade" id="makeAPaymentPopup" tabindex="-1" aria-labelledby="makeAPaymentLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 16px;">
      <div class="modal-header border-0">
        <h5 class="modal-title w-100 text-center" id="makeAPaymentLabel">Scan & Pay</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="<?=base_url()?>assets/media/qr-code/make-a-payment-qr-code.webp" alt="Make A Payment QR Code" class="img-fluid mb-4" style="max-width: 300px;">
        <button type="button" class="btn theme-btn bg-blue w-100" data-bs-dismiss="modal">
          Close <i class="fa-solid fa-arrow-right-long"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Header Section Start -->
<header>
    <!-- top_bar -->
    <div class="gocube-top-header border-section-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="top-list">
                        <li>
                            || Welcome to SRB Group ||
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a onclick="gtag_report_conversion_call_btn();" href="<?=$phonehtml?>" title="Call us now"> <?=$phone?></a>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i> <a href="<?=$mailhtml?>" title="Send us an email">
                                <?=$mail?></a>
                        </li>
                    </ul>
                </div>
             <div class="col-lg-4">
    <ul class="top-social">
        <li>
            <button type="button" class="sign-in" data-bs-toggle="modal" data-bs-target="#makeAPaymentPopup">
                <i class="fa fa-inr" aria-hidden="true"></i> Make A Payment
            </button>
        </li>
        <li>
            <button type="button" class="sign-in quickEnquirybtn" data-bs-toggle="modal" title="Request a Free Quote Today!" data-bs-target="#qteModal">
                <i class="fa-solid fa-arrow-right-long"></i> Get A Quote
            </button>
        </li>
    </ul>
</div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-1 border-section-top border-section-bottom">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo" style="width:254px;">
                            <a href="<?=site_url()?>" class="header-logo" title="Back to Home Page">
                                <img src="<?=base_url()?>assets/media/logo/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers Company Logo" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                  <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="<?= site_url() ?>" class="menu-active">Home</a></li>
                                        <li><a href="<?= site_url('about') ?>">About Us</a></li>
                                        <li>
                                           <button type="button" class="fw-bold">Strategy <i class="fas fa-angle-down"></i></button>
                                            <ul class="submenu">
                                                <li><a href="<?= site_url('packing-material') ?>" class=""><i class="fa-light fa-arrow-right"></i> Packing Material</a></li>
                                                <li><a href="<?= site_url('packing-tips') ?>" class=""><i class="fa-light fa-arrow-right"></i> Packing Tips</a></li>
                                                <li><a href="<?= site_url('our-working-process') ?>" class=""><i class="fa-light fa-arrow-right"></i> Our Working Process</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                           <button type="button" class="fw-bold">Our Services <i class="fas fa-angle-down"></i></button>
                                            <ul class="submenu">
                                                <li><a href="<?= site_url('all_services') ?>" class=""><i class="fa-light fa-arrow-right"></i> All Services</a></li>
                                                <li><a href="<?= site_url('transportation') ?>" class=""><i class="fa-light fa-arrow-right"></i> Transportation</a></li>
                                                <li><a href="<?= site_url('packing-moving') ?>" class=""><i class="fa-light fa-arrow-right"></i> Packing and Moving</a></li>
                                                <li><a href="<?= site_url('loading-unloading') ?>" class=""><i class="fa-light fa-arrow-right"></i> Loading and Unloading</a></li>
                                                <li><a href="<?= site_url('unpacking-escort') ?>" class=""><i class="fa-light fa-arrow-right"></i> Unpacking and Escort</a></li>
                                                <li><a href="<?= site_url('home-shifting') ?>" class=""><i class="fa-light fa-arrow-right"></i> Home Shifting</a></li>
                                                <li><a href="<?= site_url('domestic-relocation') ?>" class=""><i class="fa-light fa-arrow-right"></i> Domestic Relocation</a></li>
                                                <li><a href="<?= site_url('international-relocation') ?>" class=""><i class="fa-light fa-arrow-right"></i> International Relocation</a></li>
                                                <li><a href="<?= site_url('warehouse') ?>" class=""><i class="fa-light fa-arrow-right"></i> WareHouse Services</a></li>
                                                <li><a href="<?= site_url('car-bike') ?>" class=""><i class="fa-light fa-arrow-right"></i> Car & Bike Transportation</a></li>
                                                <li><a href="<?= site_url('office-relocation') ?>" class=""><i class="fa-light fa-arrow-right"></i> Office Shifting</a></li>
                                                <li><a href="<?= site_url('hotel-shifting') ?>" class=""><i class="fa-light fa-arrow-right"></i> Hotel Shifting</a></li>
                                                <li><a href="<?= site_url('factory-shifting') ?>" class=""><i class="fa-light fa-arrow-right"></i> Factory Shifting</a></li>
                                                <li><a href="<?= site_url('pet-moving') ?>" class=""><i class="fa-light fa-arrow-right"></i> Pet Moving</a></li>
                                                <li><a href="<?= site_url('custom-clearance') ?>" class=""><i class="fa-light fa-arrow-right"></i> Custom Clearance</a></li>
                                                <li><a href="<?= site_url('painting-moving') ?>" class=""><i class="fa-light fa-arrow-right"></i> Painting Moving</a></li>
                                                <li><a href="<?= site_url('goods-insurance') ?>" class=""><i class="fa-light fa-arrow-right"></i> Goods Insurance</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                         <button type="button" class="fw-bold">Activity <i class="fas fa-angle-down"></i></button>
                                            <ul class="submenu">
                                                <li><a href="<?= site_url('photo-gallery') ?>">Gallery</a></li>
                                                <li><a href="<?= site_url('faqs') ?>">FAQ's</a></li>
                                                <li><a href="<?= site_url('reviews') ?>">Review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= site_url('our-branches') ?>">Our Branches</a></li>

                                        <li><a href="<?= site_url('contacts') ?>">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-button">
    <button type="button" class="theme-btn quickEnquirybtn"
        data-bs-toggle="modal"
        title="Request a Free Quote Today!"
        data-bs-target="#qteModal">
        <span>
            get A Quote
            <i class="fa-solid fa-arrow-right-long"></i>
        </span>
    </button>
</div>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="<?=site_url()?>">
                            <img src="<?=base_url()?>assets/media/logo/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers Logo Main">
                        </a>
                    </div>
                    <div class="offcanvas__close">
    <button type="button" aria-label="Close menu">
        <i class="fas fa-times" aria-hidden="true"></i>
    </button>
</div>
                </div>
                <p class="text d-none d-lg-block">
                    Get Ready to Move with Ease! Reach Out to <b>SRB Group Packers and Movers</b> for a Smooth, Stress-Free Relocation Experience. Contact Us Today!
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="" title="View Our Location on Google Maps"><?=$address?></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="<?=$mailhtml?>" title="Send us an email">
                                    <span><?=$mail?></span>
                                </a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a onclick="gtag_report_conversion_call_btn();" href="<?=$phonehtml?>" title="Call us now on <?=$phone?>">
                                    <?=$phone?> (Sanjay Singh Shekhawat)
                                </a>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <span>We Are Available 24x7</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

