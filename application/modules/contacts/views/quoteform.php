<div class="contact-form  shadow-sm rounded">
    <div class="contact-form-header  text-white p-2 rounded-top" style="background:#1c35a4;">
        <div class="row align-items-center">
            <div class="col-12">
                <h5 class="mb-0 d-flex justify-content-between align-items-center">
                    <span class="font-weight-normal" style="font-size: 1rem;color:white;">Request a Free Quote Today!</span>
                    <?php if (strtolower($city) == 'jodhpur'): ?>
                        <a href="tel:9982390043" class="text-white text-decoration-none align-items-center">
                            <i class="fas fa-phone-alt mr-2"></i> 9982390043
                        </a>
                    <?php else: ?>
                        <a href="<?= $phonehtml ?>" class="text-white text-decoration-none align-items-center">
                            <i class="fas fa-phone-alt mr-2"></i> <?= $phone ?>
                        </a>
                    <?php endif; ?>
                </h5>
            </div>
        </div>
    </div>

    <form method="post" id="quoteform" onsubmit="return false" class="p-2">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="form-group mb-0">
                    <div class="input-group h-100">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light border-right-0 d-flex align-items-center" style="min-width: 40px;">
                                <i class="fas fa-user-tie text-primary mx-auto"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control border-left-0" name="name" placeholder="Your Name" style="height: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group mb-0">
                    <div class="input-group h-100">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light border-right-0 d-flex align-items-center" style="min-width: 40px;">
                                <i class="fas fa-phone text-primary mx-auto"></i>
                            </span>
                        </div>
                        <input type="tel" class="form-control border-left-0" name="phone" placeholder="Mobile Number" style="height: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-3">
                <div class="form-group mb-0">
                    <div class="input-group h-100">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light border-right-0 d-flex align-items-center" style="min-width: 40px;">
                                <i class="fas fa-map-marker-alt text-primary mx-auto"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control border-left-0" name="mfrom" placeholder="From" style="height: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-3">
                <div class="form-group mb-0">
                    <div class="input-group h-100">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light border-right-0 d-flex align-items-center" style="min-width: 40px;">
                                <i class="fas fa-thumbtack text-primary mx-auto"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control border-left-0" name="mto" placeholder="To" style="height: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-light border-right-0 d-flex align-items-center" style="min-width: 40px;">
                        <i class="fas fa-comment-dots text-primary mx-auto"></i>
                    </span>
                </div>
                <textarea name="message" cols="30" rows="3" class="form-control border-left-0" placeholder="Write Your Message"></textarea>
            </div>
        </div>

        <div id="resultquotefrom" class="mb-3"></div>

        <div class=" mt-5">
            <button id="submitbquoteform" type="submit" class="theme-btn quickEnquirybtn text-white font-weight-bold mr-2 px-4">
                <i class="fas fa-paper-plane mr-2"></i> Submit
            </button>
            <button onclick="$('#resultquotefrom').html('');" type="reset" class="theme-btn quickEnquirybtn  text-white btn-outline-secondary px-4" style="background:#4f565f !important;">
                <i class="fas fa-trash-alt mr-2"></i> Clear
            </button>
        </div>
    </form>
</div>

<style>
    .contact-form {
        border: 1px solid #e0e0e0;
        background: white;
    }


    .form-control:focus,
    .form-control:active {
        box-shadow: none;
        border-color: #FBA707;
    }

    .input-group-text {
        transition: all 0.3s;
        height: 100%;
    }

    textarea {
        resize: none;
    }

    .input-group-text i {
        font-size: 1rem;
    }

    .form-control {

        border: var(--bs-border-width) solid #ccd0d5 !important;
    }
</style>
<script type="text/javascript">
    $(function() {
        $('#submitbquoteform').click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/booking') ?>",
                data: $("#quoteform").serialize(),
                beforeSend: function() {
                    $('#resultquotefrom').html('<p style="color:red">Please wait...</p>');
                },
                success: function(data) {
                    $('#resultquotefrom').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
                        $("#quoteform").trigger('reset');
                        gtag_report_conversion();
                    }
                    $('#resultquotefrom').html(data);
                }
            });
        });
    });
</script>