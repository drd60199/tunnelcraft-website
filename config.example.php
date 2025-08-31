<?php
// config.example.php

// Brevo SMTP Credentials
define('SMTP_HOST', 'smtp-relay.brevo.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your_brevo_username_here');
define('SMTP_PASSWORD', 'your_brevo_password_here');

$firebaseConfig = [
  "apiKey" => "your_firebase_api_key_here",
  "authDomain" => "your_project_id.firebaseapp.com",
  "projectId" => "your_project_id_here",
  "storageBucket" => "your_project_id.appspot.com",
  "messagingSenderId" => "your_messaging_sender_id_here",
  "appId" => "your_app_id_here",
    "measurementId" => "your_measurement_id_here"
  ];