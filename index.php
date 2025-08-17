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

<header>
    <div class="container">
        <nav>
            <div class="logo">Your Logo</div>
            <button class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="#hero">Home</a></li>
                <li><a href=#resources>Features</a></li>
                <li><a href="#team">Team</a></li>
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

<body>

<main>
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Where Code and Infrastructure Meet.</h1>
                <h2>Building and managing tech is the best way to learn. Find fun projects and guides for both developers and IT pros.</h2>
            </div>
            <div class="hero-graphic">
                <div class="hero-graphic">
    <img src="https://via.placeholder.com/400x300.png?text=Your+Awesome+Graphic" alt="Hero Graphic Placeholder">
</div>
                </div>
            </div>
    </section>

    <section class="about-us" id="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>I'm a developer and IT enthusiast. This site is my playground, where I document the challenge and satifaction of building fun projects and learning new skills, whether it's with code or hardware.</p>
            <a href="#team">Meet the Team</a>
        </div>
    </section>

    <section class="call-to-action">
        <div class="container">
            <a href="#">Build Something Awesome</a>
        </div>
    </section>

    <section class="team" id="team">
        <div class="container">
            <h2>Meet the Team</h2>

            <div class="member">
                <img src="your-photo.jpg" alt="Your Name">
                <h3>Your Name</h3>
                <p>Founder & Lead Developer</p>
                <p>Passionate gamer with over 10 years of experience in server management and development. Expertise in PHP, JavaScript, and database management. Dedicated to providing high-performance, reliable, and secure server hosting solutions.</p>

                <h4>Skills</h4>
                <ul>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>SQL</li>
                    <li>Server Administration (Linux)</li>
                    <li>Network Security</li>
                </ul>

                <h4>Experience</h4>
                <p>Over 10 years of experience in managing and developing game servers, with a focus on providing exceptional performance, security, and customer support.</p>

                <h4>Contact</h4>
                <ul>
                    <li><a href="mailto:your-email@example.com">your-email@example.com</a></li>
                    <li><a href="https://www.linkedin.com/in/your-linkedin-profile">LinkedIn</a></li>
                    <li><a href="https://github.com/your-github-profile">GitHub</a></li>
                </ul>
            </div>

        </div>
    </section>

    <section class="features" id="resources">
        <div class="container">
            <h2>Our Features</h2>

            <div class="feature">
                <h3>High Performance</h3>
                <p>Experience lightning-fast speeds and lag-free gameplay with our cutting-edge hardware and optimized network infrastructure.</p>
            </div>

            <div class="feature">
                <h3>DDoS Protection</h3>
                <p>Stay protected from disruptive attacks with our robust DDoS protection, ensuring uninterrupted gaming experiences.</p>
            </div>

            <div class="feature">
                <h3>Mod Support</h3>
                <p>Customize your server with your favorite mods and plugins, creating unique and engaging gameplay experiences.</p>
            </div>

            <div class="feature">
                <h3>Easy Setup</h3>
                <p>Get your server up and running in minutes with our intuitive control panel and easy-to-follow setup guides.</p>
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

