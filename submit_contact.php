<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Honeypot Check
    if (!empty($_POST["website"])) {
        // Honeypot triggered - possible bot submission
        // Log the attempt and exit
        error_log("Honeypot triggered on contact form.");
        exit;
    }

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Sanitize email field for quotes
    $email = str_replace(['"', "'"], '', $email);

    // Validate name (example with regular expression)
    if (!preg_match("/^[a-zA-Z' -]{2,50}$/", $name)) {
        echo "Invalid name format. Please use only letters, spaces, hyphens, and apostrophes.";
        exit;
    }

    // Validate and sanitize data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Sanitize data (example with htmlspecialchars)
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        // Process data (example with sending an email)
        $to = "your-email@example.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for your message! We'll be in touch soon.";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}?>