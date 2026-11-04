<div class="modal fade" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 16px;background-color: #f3f7fb;">
            <div class="quick-enquery-popup-content">
                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="<?=site_url()?>">
                            <img src="<?=base_url()?>assets/media/logo/srb-group-packers-and-movers-logo.webp" alt="SRB Group Packers and Movers logo">
                        </a>
                    </div>
                    <div class="offcanvas__close" id="quickEnquiryPopupClose">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="offcanvas__contact">
                    <h4 id="headlineg">Get A Free Quote !</h4>
                    <form method="post" id="quotemodal" onsubmit="return false">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="tel" class="form-control" name="phone" placeholder="Mobile Number" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" class="form-control" name="mfrom" placeholder="From" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" class="form-control" name="mto" placeholder="To" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <textarea name="message" rows="4" class="form-control" placeholder="Write Your Message" ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12" id="resultquotemodal"></div>
                            <div class="col-lg-12 d-flex gap-3 justify-content-center">
                                <button id="submitbquotemodal" type="submit" class="theme-btn" style="width: 100%; background-color:#1c35a4;">
                                    Submit <i class="far fa-paper-plane"></i>
                                </button>
                                <button onclick="document.getElementById('resultquotemodal').innerHTML='';" type="reset" class="theme-btn" style="background-color:white;color:#A0A0A0;">
                                    Clear <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('#submitbquotemodal').click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/booking') ?>",
                data: $("#quotemodal").serialize(),
                beforeSend: function() {
                    $('#resultquotemodal').html('<p style="color:red">Please wait...</p>');
                },
                success: function(data) {
                    $('#resultquotemodal').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
                        $("#quotemodal").trigger('reset');
                       gtag_report_conversion();
                    }
                    $('#resultquotemodal').html(data);
                }
            });
        });
    });
</script>
