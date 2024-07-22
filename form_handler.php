<?php
session_start(); // Start session

require 'config.php'; // Adjust path to config.php
require 'PHPMailer-master/src/Exception.php'; // Adjust path to PHPMailer files
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $city = $conn->real_escape_string($_POST['city']);
    $business_name = $conn->real_escape_string($_POST['business']);
    $interest = $conn->real_escape_string($_POST['interest']);
    $message = $conn->real_escape_string($_POST['message']);
    $current_page = isset($_POST['current_page']) ? $conn->real_escape_string($_POST['current_page']) : 'index.php'; // Default to index.php if not set

    // Insert data into the database
    $sql = "INSERT INTO `form-techspherelogix` (name, email, phone, city, business, interest, message)
            VALUES ('$name', '$email', '$phone', '$city', '$business_name', '$interest', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully

        // Send email using PHPMailer
        $mail = new PHPMailer(true); // Enable exceptions
        try {
            $mail->SMTPDebug = 2; // Enable verbose debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'techspherelogix@gmail.com';
            $mail->Password = 'yupbcbekogeflzqe'; // Use the correct password
            $mail->SMTPSecure = 'tls'; // Use 'ssl' if you're using port 465
            $mail->Port = 587; // Use 465 for 'ssl'

            $mail->setFrom($email, $name);
            $mail->addAddress('techspherelogix@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Email From Client';
            $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>City: $city<br>Business Name: $business_name<br>Interest: $interest<br>Message: $message";

            $mail->send();
            $_SESSION['message'] = "Thank you for contacting us!";
        } catch (Exception $e) {
            $_SESSION['message'] = 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect based on the current page
    header("Location: " . $current_page);
    exit();
}

$conn->close();
?>
