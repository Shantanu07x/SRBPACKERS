<!-- <div class="contact-form">
    
    <form method="post" id="faqform" onsubmit="return false">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="far fa-user-tie"></i>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-icon">
                <i class="far fa-comment-lines"></i>
                <textarea name="question" cols="30" rows="5" class="form-control"
                    placeholder="Write Your questions" ></textarea>
            </div>
        </div>
            <div id="resultfaq"></div>
        <button id="submitbfaq" type="submit" class="theme-btn" style="background-color:#FBA707;">Submit <i class="far fa-paper-plane"></i></button>
        <button onclick="$('#resultfaq').html('');"  type="reset" class="theme-btn" style="background-color:white;color:#A0A0A0;">Clear <i class="far fa-trash-alt"></i></button>
    </form>
</div>
<script type="text/javascript">
    $(function() {
        $('#submitbfaq').click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/faq') ?>",
                data: $("#faqform").serialize(),
                beforeSend: function() {
                    $('#resultfaq').html('<p style="color:red">Please wait...</p>');
                },
                success: function(data) {
                    $('#resultfaq').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><p style='color:green;'>Thank you for your question! Our team will get back to you shortly with the information you need.</p></div>";
                        $("#faqform").trigger('reset');
                    }
                    $('#resultfaq').html(data);
                }
            });
        });
    });
</script> -->



<!-- Offcanvas Area Start -->
<div class="fix-area">
  <div class="offcanvas__info">
    <div class="offcanvas__wrapper">
      <div class="offcanvas__content">
        <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
          <div class="offcanvas__logo">
            <a href="https://www.srbpackers.com/index.php">
              <img src="<?=base_url()?>assets/images/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers Logo Main">
            </a>
          </div>
          <div class="offcanvas__close">
            <button>
              <i class="fas fa-times"></i>
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
                <a target="_blank" href="https://maps.app.goo.gl/b1p7x1f5H3EAV9JXA" title="View Our Location on Google Maps">31 Girraj Nagar Vistar Golyawas Mansarovar Jaipur 302020</a>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="offcanvas__contact-icon mr-15">
                <i class="fal fa-envelope"></i>
              </div>
              <div class="offcanvas__contact-text">
                <a href="mailto:info@srbpackers.com" title="Send us an email">
                  <span>info@srbpackers.com</span>
                </a>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="offcanvas__contact-icon mr-15">
                <i class="fa-regular fa-phone"></i>
              </div>
              <div class="offcanvas__contact-text">
                <a onclick="gtag_report_conversion_call_btn();" href="tel:08383053021" title="Call us now on +91 8383053021">
                  +91 8383053021 (Sanjay Singh Shekhawat)
                </a>
              </div>
            </li>

            <li class="d-flex align-items-center">
              <div class="offcanvas__contact-icon mr-15">
                <i class="fal fa-clock"></i>
              </div>
              <div class="offcanvas__contact-text">
                <a target="_blank" href="javascript:void(0);">We Are Available 24x7</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Make a payment popup -->
<!-- Modal -->
<div class="modal fade" id="makeAPaymentPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 16px;">
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="service-card-items" style="margin-top: 0px;border: 4px solid #1c35a4;border-radius: 16px;">
          <div class="service-image">
            <img src="<?=base_url()?>assets/images/make-a-payment-qr-code.webp" alt="Make A Payment qr code.">
          </div>
          <div class="service-content" style="padding:25px 30px">
            <h4 style="text-align: center;">
              <p>- Scan & pay -</p>
            </h4>
            <div>
              <button class="theme-btn bg-blue" style="width: 100%;" id="makeAPaymentPopupCloseBtn">
                <span>Close <i class="fa-solid fa-arrow-right-long"></i></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Quick Enquiry Modal -->
<div class="modal fade" id="quickEnquiryPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 16px;background-color: #f3f7fb;">
      <div class="quick-enquery-popup-content">
        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
          <div class="offcanvas__logo">
            <a href="index.php">
              <img src="<?=base_url()?>assets/images/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers logo">
            </a>
          </div>
          <div class="offcanvas__close" id="quickEnquiryPopupClose">
            <button>
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="mb-3"></div>
        <div class="offcanvas__contact">
          <h4 id="headlineg">Get A Free Quote !</h4>
          <form action="form/quick-inq.php" method="POST" class="contact-form-items">
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

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?=base_url()?>assets/images/breadcrumb.png');">
  <div class="border-shape">
    <img src="<?=base_url()?>assets/images/element.webp" alt="Decorative shape">
  </div>
  <div class="line-shape">
    <img src="<?=base_url()?>assets/images/line-element.webp" alt="Line shape">
  </div>
  <div class="container">
    <div class="page-heading">
      <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">About Us</h2>
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
        <li>
          <a href="https://www.srbpackers.com/index.php" title="Go to Home Page">
            Home
          </a>
        </li>
        <li>
          <i class="fas fa-chevron-right" aria-hidden="true"></i>
        </li>
        <li>
          About Us
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
          <span class="text-slider">Trusted Movers</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Nationwide Coverage</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Secure Packing</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Timely Delivery</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Hassle-Free Service</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>

          <span class="text-slider">Government Approved</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">9+ Years Experience</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Customized Solutions</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Professional Team</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">24/7 Support</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>

          <span class="text-slider">Safe Storage Options</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Quality Assurance</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Affordable Rates</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Comprehensive Insurance</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
          <span class="text-slider">Client Satisfaction Guaranteed</span><span class="text-slider"><img src="<?=base_url()?>assets/images/star.svg" alt="star icon"></span>
        </li>
      </ul>
    </div>
  </div>
</div>