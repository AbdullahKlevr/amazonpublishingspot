<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $name = $_POST['name'] ?? 'Unknown';
    $email = $_POST['email'] ?? 'Unknown';
    $phone = $_POST['phone'] ?? 'Unknown';
    $brief = $_POST['brief'] ?? 'No message provided';
    $service = $_POST['service'] ?? 'null';

    // Log submitted data for debugging
    error_log(print_r($_POST, true));

    // Get the user's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Initialize location variables
    $country = $state = $city = $code = $longitude = $latitude = "Unknown";

    // Get location data from IP
    $locationData = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
    error_log(print_r($locationData, true));

    if ($locationData && $locationData->status === 'success') {
        $country = ucfirst(strtolower($locationData->country));
        $state = ucfirst(strtolower($locationData->regionName));
        $city = ucfirst(strtolower($locationData->city));
        $code = $locationData->countryCode;
        $longitude = $locationData->lon;
        $latitude = $locationData->lat;
    }

    $lb_source = $_POST['lb_source'] ?? 'Organic';
    $referring_url = $_SERVER['HTTP_REFERER'] ?? 'Direct Access';

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'mail.worldwidepublisher.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@worldwidepublisher.com';
        $mail->Password = 'KlevrM@321@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('info@worldwidepublisher.com', 'World Wide Publisher');
        $mail->addAddress('info@worldwidepublisher.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Lead';
        $mail->Body = "<h1>New Form Submission</h1>
                       <p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Phone:</strong> $phone</p>
                       <p><strong>Message:</strong><br> $brief</p>
                       <p><strong>Service:</strong><br> $service</p>
                       <p><strong>Lead Source:</strong> $lb_source</p>
                       <p><strong>Country Code:</strong> $code</p>
                       <p><strong>Country:</strong> $country</p>
                       <p><strong>State:</strong> $state</p>
                       <p><strong>City:</strong> $city</p>
                       <p><strong>Longitude:</strong> $longitude</p>
                       <p><strong>Latitude:</strong> $latitude</p>
                       <p><strong>Referring URL:</strong> $referring_url</p>";

        // Send the email
        $mail->send();
        header('Location: /thank-you/');
        exit();
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
