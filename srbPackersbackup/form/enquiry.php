<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/autoload.php';

header('Content-Type: application/json');

if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['movingfrom']) && isset($_POST['email'])) {
    $name = $_POST['name'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';
    $movingfrom = $_POST['movingfrom'] ?? '';
    $movingto = $_POST['movingto'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';  // Apne SMTP server ka address daalen
        $mail->SMTPAuth   = true;
        $mail->Username   = 'no-reply@srbpackers.com';  // SMTP username
        $mail->Password   = 'Gopcube@#e#s32';  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('enquiry@gocube.in', 'Enquiry Submission from GoCube');
        $mail->addAddress('info@srbpackers.com', 'SRB Packers and Movers');  // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body    = "
            <!DOCTYPE html>
<html lang='en' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='format-detection' content='telephone=no, date=no, address=no, email=no'>
    <title>New Form Submission</title>
    <!--[if mso]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <style>
      table {border-collapse: collapse;}
      .spacer,.divider {mso-line-height-rule:exactly;}
    </style>
    <![endif]-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body style='margin: 0; padding: 0; width: 100%; background-color: #f4f7fa; font-family: Poppins, Arial, sans-serif;'>
    <table cellpadding='0' cellspacing='0' role='presentation' width='100%' style='max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);'>
        <tr>
            <td align='center' style='background: linear-gradient(135deg, #6a11cb, #2575fc); padding: 27px 20px; text-align: center;'>
                <h1 style='color: #ffffff; font-size: 24px; font-weight: 700; margin: 0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);'>New Form Submission</h1>
            </td>
        </tr>
        <tr>
            <td style='padding: 28px 30px; background-color: #ffffff;'>
                <p style='font-size: 18px; color: #333; margin-bottom: 15px; margin-top: 0px;'>Hello Admin,</p>
                <p style='font-size: 16px; color: #555; line-height: 1.6;'>You have received a new form submission from your website. Here are the details:</p>
                
                <table cellpadding='0' cellspacing='0' role='presentation' style='width: 100%; background-color: #f0f7ff; border-left: 5px solid #2575fc; border-radius: 8px; padding: 25px; margin-bottom: 30px;'>
                    <tr>
                        <td style='padding-bottom: 15px; border-bottom: 1px solid #e0e0e0;'>
                            <strong style='color: #333333; font-weight: 600; display: inline-block; width: 120px;'>Name:</strong>
                            <span>{$name}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 15px 0; border-bottom: 1px solid #e0e0e0;'>
                            <strong style='color: #333333; font-weight: 600; display: inline-block; width: 120px;'>Mobile:</strong>
                            <span>{$mobile}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 15px 0; border-bottom: 1px solid #e0e0e0;'>
                            <strong style='color: #333333; font-weight: 600; display: inline-block; width: 120px;'>E-Mail Address:</strong>
                            <span>{$email}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 15px 0; border-bottom: 1px solid #e0e0e0;'>
                            <strong style='color: #333333; font-weight: 600; display: inline-block; width: 120px;'>Moving From:</strong>
                            <span>{$movingfrom}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 15px 0; border-bottom: 1px solid #e0e0e0;'>
                            <strong style='color: #333333; font-weight: 600; display: inline-block; width: 120px;'>Moving To:</strong>
                            <span>{$movingto}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding-top: 15px;'>
                            <strong style='color: #333333; font-weight: 600; display: inline-block; width: 120px;'>Message:</strong>
                            <span>{$message}</span>
                        </td>
                    </tr>
                </table>
                
                <p style='background: linear-gradient(135deg, rgba(106, 17, 203, 0.1), rgba(37, 117, 252, 0.1)); padding: 15px; border-radius: 8px; margin-top: 20px; font-weight: 500; color: #2575fc; text-align: center;'>Please follow up with the user as soon as possible.</p>
                <p style='background: linear-gradient(135deg, rgba(106, 17, 203, 0.1), rgba(37, 117, 252, 0.1)); padding: 15px; border-radius: 8px; margin-top: 20px; font-weight: 500; color: #2575fc; text-align: center;'>Best regards,<a href='https://www.gocube.in' style='color: #2575fc; text-decoration: none;'>GoCube Solution India</a></p>
            </td>
        </tr>
        <tr>
            <td style='text-align: center; padding: 30px; background-color: #f4f7fa; color: #666666; font-size: 14px; border-top: 1px solid #e0e0e0;'>
                <p style='margin: 0;'>&copy; GoCube Solution India. All rights reserved.</p>
                <p style='margin-top: 10px;'>
                    <a href='https://www.gocube.in' style='color: #2575fc; text-decoration: none;'>www.gocube.in</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
        ";

        $mail->send();
        header("Location: ../thankyou.php");
        die();
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent."]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
