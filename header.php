<?php
ob_start(); // Enable output buffering
session_start(); // Start the session?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Server Hosting</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<header>
    <div class="container">
        <nav>
            <div class="logo">Your Logo</div>
            <button class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    $username = $_SESSION['username'];
                    echo '<li class="user-info">';
                    echo '<span>Welcome, '. $username. '</span>';
                    echo '<a href="logout.php">Logout</a>';
                    echo '</li>';
                } else {
                    echo '<li class="login-links">';
                    echo '<a href="login.html">Login</a>';
                    echo '<a href="signup.html">Sign Up</a>';
                    echo '</li>';
                }
              ?>
            </ul>
        </nav>
    </div>
</header>
<script>
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>

<?php
ob_end_flush(); // Flush the output buffer?>

</body>
</html>