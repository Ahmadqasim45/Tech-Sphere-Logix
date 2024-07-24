<?php
session_start(); // Start session

require 'config.php'; // Adjust path to config.php
require 'vendor/autoload.php'; // Include SendGrid library

use SendGrid\Mail\Mail;

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $city = htmlspecialchars($_POST['city']);
    $business_name = htmlspecialchars($_POST['business']);
    $interest = htmlspecialchars($_POST['interest']);
    $message = htmlspecialchars($_POST['message']);
    $current_page = isset($_POST['current_page']) ? htmlspecialchars($_POST['current_page']) : 'index.php'; // Default to index.php if not set

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `form-techspherelogix` (name, email, phone, city, business, interest, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $city, $business_name, $interest, $message);

    if ($stmt->execute()) {
        // Record inserted successfully

        // Prepare email using SendGrid
        $sendGridApiKey = 'YOUR_SENDGRID_API_KEY'; // Replace with your SendGrid API key
        $email = new Mail();
        $email->setFrom("noreply@yoursite.com", "Tech Sphere Logix");
        $email->setSubject("Email From Client");
        $email->addTo("ahmedqasim45ah@gmail.com", "Admin"); // Admin's email
        $email->addReplyTo($email, $name); // Set Reply-To address to the user's email
        $emailContent = "Name: $name<br>Email: $email<br>Phone: $phone<br>City: $city<br>Business Name: $business_name<br>Interest: $interest<br>Message: $message";
        $email->addContent("text/html", $emailContent);

        $sendgrid = new \SendGrid($sendGridApiKey);

        try {
            $response = $sendgrid->send($email);
            if ($response->statusCode() == 202) {
                $_SESSION['message'] = "Thank you for contacting us!";
            } else {
                $_SESSION['message'] = "Mailer Error: Unable to send email.";
            }
        } catch (Exception $e) {
            $_SESSION['message'] = 'Mailer Error: ' . htmlspecialchars($e->getMessage());
        }
    } else {
        $_SESSION['message'] = "Error: " . htmlspecialchars($stmt->error);
    }

    $conn->close();

    // Redirect based on the current page
    header("Location: " . $current_page);
    exit();
}
