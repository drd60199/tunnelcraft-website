<?php
session_start();

// Make sure you have run "composer require kreait/firebase-php"
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\IdTokenVerificationFailed;

if (isset($_POST['idToken'])) {
    $idTokenString = $_POST['idToken'];

    try {
        // Point this to your downloaded service account JSON file
        $factory = (new Factory)->withServiceAccount('firebase_credentials.json');
        $auth = $factory->createAuth();

        // Verify the ID token
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);

        // Get the user's unique ID from the token
        $uid = $verifiedIdToken->claims()->get('sub');
        
        // Use the UID to get the full user record
        $user = $auth->getUser($uid);
        
        // Set the session variables that your index.php expects
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = htmlspecialchars($user->displayName); // Use displayName for the user's name
        $_SESSION['uid'] = $uid;
        
        // Redirect to the homepage after successful login
        header('Location: index.php');
        exit();
        
    } catch (IdTokenVerificationFailed | InvalidArgumentException $e) {
        // Handle failed verification
        die('The token is invalid: ' . $e->getMessage());
    }
} else {
    die("No ID token was provided.");
}
?>