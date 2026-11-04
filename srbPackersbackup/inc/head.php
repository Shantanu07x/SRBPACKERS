<?php
if (!defined("MySite")) {
    die("Direct Access Denied.");
}
?>
<!-- ========== Meta Tags ========== -->
<base href="<?php echo BASE_URL; ?>">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="GoCube Solution India">
<!-- ======== Page title ============ -->
<title><?php echo page_title; ?></title>
<!-- ========= Page Description =========== -->
<meta name="description" content="<?php echo page_description; ?>">
<!-- ========= Page KeyWord =========== -->
<meta name="description" content="<?php echo page_keyword; ?>">
<!--<< Favcion >>-->
<link rel="shortcut icon" href="assets/media/logo/favicon.webp">
<!--<< Bootstrap min.css >>-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!--<< All Min Css >>-->
<link rel="stylesheet" href="assets/css/all.min.css">
<!--<< Animate.css >>-->
<link rel="stylesheet" href="assets/css/animate.css">
<!--<< Magnific Popup.css >>-->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!--<< MeanMenu.css >>-->
<link rel="stylesheet" href="assets/css/meanmenu.css">
<!--<< Swiper Bundle.css >>-->
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
<!--<< Nice Select.css >>-->
<link rel="stylesheet" href="assets/css/nice-select.css">
<!--<< Main.css >>-->
<link rel="stylesheet" href="assets/css/main.css">
<!-- Custom.css -->
<link rel="stylesheet" href="assets/css/custom.css">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11509123835"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11509123835');
</script>

<!-- Event snippet for Call Button conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion_call_btn(url) {
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-11509123835/uQvWCKGew58aEPuV_e8q',
            'event_callback': callback
        });
        return false;
    }
</script>
<!-- Event snippet for Sms Button conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion_sms_btn(url) {
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-11509123835/E8s7CKSew58aEPuV_e8q',
            'event_callback': callback
        });
        return false;
    }
</script>
<!-- Event snippet for Whatsapp Button conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion_whatsapp_btn(url) {
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-11509123835/6GfyCLOhw58aEPuV_e8q',
            'event_callback': callback
        });
        return false;
    }
</script>