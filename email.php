<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require  'phpmailer\vendor\phpmailer\phpmailer\src\Exception.php';
require  'phpmailer\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require  'phpmailer\vendor\phpmailer\phpmailer\src\SMTP.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                             // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                     // Enable SMTP authentication
        $mail->Username = 'techspherelogix@gmail.com';              // SMTP username
        $mail->Password = 'ybqjecuckfcaympd
';                       // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable implicit TLS encryption
        $mail->Port = 587;                                          // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name); // Sender email
        $mail->addAddress('techspherelogix@gmail.com', 'Tech Sphere Logix'); // Recipient email

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message . '</br>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
