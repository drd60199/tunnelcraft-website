<?php
// Include the config file to get the BASE_URL
require_once __DIR__ . '/../config.php';

// Start output buffering and session
ob_start();
session_start();

// Generate a CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css">

    <script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" />
</head>
<body>

<header>
    <div class="container">
        <nav>
            <a href="<?php echo BASE_URL; ?>index.php"><img class="logo" src="<?php echo BASE_URL; ?>assets/images/TunnelCraftu_Logo.png" alt="Logo Placeholder"></a>
            
            <button class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="nav-links">
                <li><a href="<?php echo BASE_URL; ?>index.php#hero">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>guides.php">Guides</a></li>
                <li><a href="<?php echo BASE_URL; ?>index.php#contact">Contact</a></li>
            </ul>

            <div class="nav-account">
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    $username = $_SESSION['username'];
                    echo '<div class="user-info">';
                    echo '<span>Welcome, '. htmlspecialchars($username). '</span>';
                    echo '<a href="' . BASE_URL . 'includes/logout.php">Logout</a>';
                    echo '</div>';
                } else {
                    echo '<div class="login-links">';
                    echo '<a href="' . BASE_URL . 'login.php">Login/Signup</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </nav>
    </div>
</header>