<?php
// Start output buffering and session
ob_start();
session_start();

// Generate a CSRF token if one doesn't exist
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<header>
    <div class="container">
        <nav>
            <?php
            // Get the name of the current page
            $currentPage = basename($_SERVER['SCRIPT_NAME']);
            // Define the base URL for anchor links
            $baseUrl = ($currentPage === 'index.php') ? '' : 'index.php';
            ?>
            <a href="index.php"><img class="logo" src="assets/images/TunnelCraftu_Logo.png" alt="Logo Placeholder"></a>
            <button class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="<?php echo $baseUrl; ?>#hero">Home</a></li>
                <li><a href="guides.php">Guides</a></li>
                <li><a href="<?php echo $baseUrl; ?>#contact">Contact</a></li>
                
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    $username = $_SESSION['username'];
                    echo '<li class="user-info">';
                    echo '<span>Welcome, '. htmlspecialchars($username). '</span>';
                    echo '<a href="includes/logout.php">Logout</a>';
                    echo '</li>';
                } else {
                    echo '<li class="login-links">';
                    echo '<a href="login.php">Login/Signup</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>