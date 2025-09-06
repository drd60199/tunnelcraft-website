<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #333333;
    }
    body {
        display: flex;
        flex-direction: column; /* Stack content vertically */
    }
    .message-container {
        color: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-grow: 1; 
        padding: 20px;
        position: relative;
        z-index: 2;        
    }
    h1 {
        font-size: 2.5em;
        background-image: linear-gradient(to right, #00ff01, #00ffff);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: #00ff01;
        margin-bottom: 20px;
    }
    p {
        font-size: 1.2em;
        margin-bottom: 30px;
    }
    a {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #00ff01;
        color: #00ff01;
        text-decoration: none;
        border-radius: 20px;
        transition: background-color 0.3s, color 0.3s;
    }
    a:hover {
        background-color: #00ffff;
        color: #333333;
    }
    </style>
</head>
<body>
    <div class="message-container">
        <?php
require_once __DIR__ . '/../config.php';
// We need to start the session to access session variables
session_start();

// Initialize message variables
$titleMessage = '';
$bodyMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. --- CSRF TOKEN VALIDATION ---
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $titleMessage = "Invalid Request";
        $bodyMessage = "There was an issue with your form submission. Please go back and try again.";
    } else {
        // CSRF token is valid, so unset it to prevent reuse
        unset($_SESSION['csrf_token']);

        // 2. --- RATE LIMITING LOGIC ---
        $max_submissions = 3;
        $time_window = 900; // 15 minutes in seconds
        $currentTime = time();

        if (!isset($_SESSION['form_submissions'])) {
            $_SESSION['form_submissions'] = [];
        }

        // Filter out old submissions
        $_SESSION['form_submissions'] = array_filter($_SESSION['form_submissions'], function ($timestamp) use ($currentTime, $time_window) {
            return ($currentTime - $timestamp) < $time_window;
        });

        // Check if the submission limit is exceeded
        if (count($_SESSION['form_submissions']) >= $max_submissions) {
            $titleMessage = "Too Many Submissions";
            $bodyMessage = "You have sent too many messages in a short period. Please wait a while before trying again.";
        } else {
            // All security checks passed, record this submission time
            $_SESSION['form_submissions'][] = $currentTime;

            // 3. --- HONEYPOT & VALIDATION ---
            if (!empty($_POST["website"])) {
                exit; // Silently exit for bots
            }

            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            if (empty($name) || empty($email) || empty($message)) {
                $titleMessage = "Missing Information";
                $bodyMessage = "Please fill in all required fields.";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $titleMessage = "Invalid Email";
                $bodyMessage = "The email format you entered is not valid.";
            } else if (!preg_match("/^[a-zA-Z' -]{2,50}$/", $name)) {
                $titleMessage = "Invalid Name";
                $bodyMessage = "Please use only letters, spaces, hyphens, and apostrophes in the name field.";
            } else {
                // 4. --- SEND EMAIL ---
                $mail = new PHPMailer(true);
                try {

                    // $mail->SMTPDebug = 2; // Enable verbose debug output
                    $mail->isSMTP();
                    $mail->Host       = SMTP_HOST;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = SMTP_USERNAME;
                    $mail->Password   = SMTP_PASSWORD;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = SMTP_PORT;

                    $mail->setFrom('hello@tunnelcraft.net', htmlspecialchars('TunnelCraft Form'));
                    $mail->addAddress('hello@tunnelcraft.net', 'TunnelCraft Admin');
                    $mail->addReplyTo($email, htmlspecialchars($name));

                    $mail->isHTML(false);
                    $mail->Subject = 'New Contact Form Submission from ' . htmlspecialchars($name);
                    $mail->Body    = "Name: " . htmlspecialchars($name) . "\n" .
                                   "Email: " . htmlspecialchars($email) . "\n" .
                                   "Message:\n" . htmlspecialchars($message);

                    $mail->send();
                    $titleMessage = "Thank You!";
                    $bodyMessage = "Your message has been sent successfully. We'll be in touch soon.";
                } catch (Exception $e) {
                    $titleMessage = "Error";
                    $bodyMessage = "Oops! Something went wrong and we couldn't send your message. Please try again later.";
                }
            }
        }
    }
} else {
    // Handle cases where the page is accessed directly via GET request
    $titleMessage = "Access Denied";
    $bodyMessage = "This page should only be accessed by submitting the contact form.";
}

// --- Display the final messages ---
echo "<h1>" . htmlspecialchars($titleMessage) . "</h1>";
echo "<p>" . htmlspecialchars($bodyMessage) . "</p>";
?>
        <a href="../index.php#contact">Go Back</a>
    </div>

</body>
</html>