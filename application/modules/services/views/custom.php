
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
                       Our Services
                   </li>
                   <li>
                       <i class="fas fa-chevron-right" aria-hidden="true"></i>
                   </li>
                   <li>
                       Custom Clearance
                   </li>
               </ul>
            </div>
        </div>
    </div>
    <?php $this->load->view('home/marquee.php')?>

 <!-- Custom Clearance service Section Start -->
    <section class="service-details-section fix section-padding">
        <div class="container">
            <div class="service-details-wrapper unorder-list-reset">
                <div class="row g-4">
                    <div class="col-12 col-lg-8 order-1 order-md-1">
                        <div class="service-details-items">
                            <div class="details-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="<?=base_url()?>assets/media/services/srb-group-packers-and-movers-custom-clearance-details.webp" alt="SRB Group Packers and Movers Custom Clearance" title="Custom Clearance by SRB Group Packers and Movers" loading="lazy">
                            </div>

                            <div class="details-content wow fadeInUp" data-wow-delay=".3s">
                                <p class="mb-3">At <strong>SRB Group Packers and Movers</strong>, we understand the complexities of customs clearance and the importance of timely processing for your shipments. That's why we offer professional <strong>custom clearance services</strong> to ensure smooth and efficient clearance of your goods through customs.</p>

                                <h3>Why Choose Our Custom Clearance Services?</h3>
                                <p class="mb-3">
                                    1. <strong>Expert Knowledge</strong>: Our team of customs clearance specialists has extensive knowledge of customs regulations and procedures, ensuring compliance and smooth processing.<br>
                                    2. <strong>Efficient Processing</strong>: We handle all documentation and paperwork required for customs clearance, streamlining the process and saving you time and hassle.<br>
                                    3. <strong>Timely Delivery</strong>: Our efficient customs clearance services help expedite the clearance process, ensuring your shipments reach their destination on time.<br>
                                    4. <strong>Customized Solutions</strong>: We tailor our customs clearance services to meet the specific requirements of your shipments, whether for imports or exports.<br>
                                    5. <strong>Transparent Communication</strong>: We keep you informed throughout the customs clearance process, providing updates and resolving any issues promptly.
                                </p>

                                <h3>Our Custom Clearance Process</h3>
                                <p class="mb-3">
                                    1. <strong>Document Preparation</strong>: We gather all necessary documents and information required for customs clearance, including invoices, packing lists, and import/export licenses.<br>
                                    2. <strong>Customs Documentation</strong>: Our team prepares and submits all customs documentation on your behalf, ensuring accuracy and compliance with regulations.<br>
                                    3. <strong>Customs Inspection</strong>: We coordinate customs inspections, if required, and ensure all goods meet regulatory standards and requirements.<br>
                                    4. <strong>Customs Clearance</strong>: Once customs clearance is obtained, we arrange for the release of your shipments and coordinate delivery to the final destination.<br>
                                    5. <strong>Post-Clearance Support</strong>: We offer post-clearance support to address any additional requirements or issues that may arise after clearance.
                                </p>

                                <h3>Additional Services</h3>
                                <p class="mb-3">
                                    - <strong>Import/Export Consulting</strong>: We provide expert consulting services to help you navigate complex import and export regulations and optimize your customs clearance process.<br>
                                    - <strong>Duty Calculation</strong>: We assist in calculating customs duties and taxes for your shipments, ensuring compliance and minimizing costs.<br>
                                    - <strong>Customs Brokerage</strong>: As licensed customs brokers, we represent you in dealings with customs authorities and ensure smooth clearance of your goods.
                                </p>

                                <p class="mb-3">At <strong>SRB Group Packers and Movers</strong>, we take the hassle out of customs clearance, allowing you to focus on your business while we handle the paperwork. Contact us today to learn more about our custom clearance services and let us simplify your international shipments.</p>
                            </div>


                        </div>
                    </div>
                      </div>
                    <?php $this->load->view('strategy/services_widget.php')?>
                </div>
                
            </div>
        </div>
    </section>

  <?php $this->load->view('home/achievement.php')?>
    <?php $this->load->view('home/faq.php')?>
      <?php $this->load->view('home/client.php')?>