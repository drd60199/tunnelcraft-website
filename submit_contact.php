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
        /* The z-index from the parent container will apply */
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
            // Initialize message variables
            $titleMessage = '';
            $bodyMessage = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Honeypot Check
                if (!empty($_POST["website"])) {
                    exit;
                }

                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];

                // --- Validation and Processing ---
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
                    // All checks passed, proceed to send email
                    $name = htmlspecialchars($name);
                    $email = htmlspecialchars(str_replace(['"', "'"], '', $email));
                    $message = htmlspecialchars($message);

                    $to = "hello@tunnelcraft.net";
                    $subject = "New Contact Form Submission";
                    $body = "Name: $name\nEmail: $email\nMessage: $message";
                    $headers = "From: $email";

                    if (mail($to, $subject, $body, $headers)) {
                        $titleMessage = "Thank You!";
                        $bodyMessage = "Your message has been sent successfully. We'll be in touch soon.";
                    } else {
                        $titleMessage = "Error";
                        $bodyMessage = "Oops! Something went wrong and we couldn't send your message. Please try again later.";
                    }
                }
            } else {
                // Handle cases where the page is accessed directly
                $titleMessage = "Access Denied";
                $bodyMessage = "This page should only be accessed by submitting the contact form.";
            }

            // --- Display the final messages ---
            echo "<h1>" . $titleMessage . "</h1>";
            echo "<p>" . $bodyMessage . "</p>";
        ?>
        <a href="index.php#contact">Go Back</a>
    </div>

</body>
</html>