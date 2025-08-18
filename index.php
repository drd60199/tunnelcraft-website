<?php ob_start(); // Enable output buffering
session_start(); // Start the session?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunnelCraft</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<header>
    <div class="container">
        <nav>
            <img src="https://via.placeholder.com/400x300.png?text=Your+Awesome+Graphic" alt="Logo Placeholder">
            <button class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="#hero">Home</a></li>
                <li><a href="#mission">Mission</a></li>
                <li><a href=#resources>Resources</a></li>
                <li><a href="#community">Community</a></li>
                <li><a href="#contact">Contact</a></li>
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

<main>
    <section class="hero" id="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Where Code and Infrastructure Meet.</h1>
                <h2>Building and managing tech is the best way to learn. Find fun projects and guides for both developers and IT pros.</h2>
            </div>
            <div class="hero-graphic">
    <img src="https://via.placeholder.com/400x300.png?text=Your+Awesome+Graphic" alt="Hero Graphic Placeholder">
        </div>
    </div>
</section>

    <section class="mission" id="mission">
        <div class="container">
            <h1>Mission</h1>
                <h2>Learn By Doing</h2>
                <p>I believe the best way to master a skill is to get your hands dirty. This site is a living testament to that philosophy, born from my personal challenge to make one small change-one "commit"-to a project every single day.</p>
                <p>Here, we're not just reading about code and infrastructure; we're building it, one step at a time. Our mission is to provide you with the practical guides and resources you need to get your hands dirty, turn ideas into reality, and build a portfolio of real-life world skills.</p>
            </div>
    </section>

    <section class="call-to-action">
     <div class="container">
        <a href="#resources">Build Something Awesome</a>
    </div>
 </section>

    <section class="features" id="resources">
        <div class="container">
            <h2>Your Next Project Starts Here</h2>
            <div class="feature">
                <h3>Web Development Projects</h3>
                <p>Learn the fundamentals of HTML, CSS, and JavaScript by building a portfolio from scratch, a simple web app, or a personal blog.</p>
            </div>

            <div class="feature">
                <h3>IT & Infrastructure Guides</h3>
                <p>Get comfortable with server administration and networking by following our guides to setting up your own Linux home server, automating tasks with scripts, and securing your network.</p>
            </div>

            <div class="feature">
                <h3>Version Control</h3>
                <p>We make it easy to understand the industry standard: Git. Learn how to manage your project's history, collaborate with others, and keep track of your work, one commit at a time.</p>
            </div>

        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2>Contact Us</h2>

            <form action="submit_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <div style="display: none;">
                    <label for="website">Website:</label>
                    <input type="text" id="website" name="website">
                </div>

                <button type="submit">Send</button>
            </form>

        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 TunnelCraft</p>
        <ul class="social-links">
            <li><a href="#"><img src="images/FB_Logo.png" alt="Facebook"></a></li>
            <li><a href="#"><img src="images/Linkedin_Logo.png" alt="LinkedIn"></a></li>
            <li><a href="#"><img src="images/GitHub_Logo.png" alt="GitHub"></a></li>
        </ul>
    </div>
</footer>

<script src="script.js"></script>

<?php ob_end_flush(); // Flush the output buffer?>

</body>
</html>

