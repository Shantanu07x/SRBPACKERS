<?php
if (!defined("MySite")) {
    die("Direct Access Denied.");
} ?>

<div class="goweb_quick_link_btn_1">
    <a onclick="gtag_report_conversion_call_btn();" class="botbtn" href="tel:<?php echo PRIMARY_MOBILE; ?>"><i class="fa-regular fa-phone"></i><br><span>
            <p>CALL</p>
        </span></a>
    <a class="botbtn" href="mailto:<?php echo EMAIL_ADDRESS; ?>?cc=<?php echo EMAIL_ADDRESS; ?>&amp;subject=Iam Looking for Packers and Movers"><i class="fa-regular fa-envelope" aria-hidden="true"></i><br><span>
            <p>E-MAIL</p>
        </span></a>
    <a onclick="gtag_report_conversion_whatsapp_btn();" class="botbtn" href="http://api.whatsapp.com/send?phone=+91<?php echo PRIMARY_MOBILE; ?>&amp;text=Iam%20Looking%20for%20Packers%20and%20Movers"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i><br><span>
            <p>WHATSAPP</p>
        </span></a>
    <a class="botbtn quickEnquirybtn" href="javascript:void(0);"><i class="fa-regular fa-square-pen" aria-hidden="true"></i><br><span>
            <p>ENQUIRY</p>
        </span></a>
    <a onclick="gtag_report_conversion_sms_btn();" class="botbtn" href="sms:0<?php echo PRIMARY_MOBILE; ?>?body=Iam Looking For Packers and Movers"><i class="fa-regular fa-comment-sms" aria-hidden="true"></i><br><span>
            <p>MESSAGE</p>
        </span></a>
</div>