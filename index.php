<?php ob_start(); // Enable output buffering
session_start();

// Generate a new CSRF token if one doesn't exist
if (empty($_SESSION['csrf_token'])) {
    // bin2hex and random_bytes create a secure, random, hexadecimal string
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$csrf_token = $_SESSION['csrf_token'];
?>

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
            <img class="logo" src="images\TunnelCraftu_Logo.png" alt="Logo Placeholder">
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
                    echo '<span>Welcome, '. htmlspecialchars($username). '</span>';
                    echo '<a href="logout.php">Logout</a>';
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

<script>
  const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Carousel functionality
    document.addEventListener('DOMContentLoaded', () => {
    const carouselSlide = document.querySelector('.carousel-slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let counter = 0;
    const totalTiles = carouselSlide.querySelectorAll('.project-tile').length;

    function updateCarousel() {
        // Calculate the number of visible tiles
        const visibleTiles = window.innerWidth > 768 ? 3 : 1;
        
        // Disable buttons at the start and end of the carousel
        if (counter === 0) {
            prevBtn.disabled = true;
        } else {
            prevBtn.disabled = false;
        }

        if (counter >= totalTiles - visibleTiles) {
            nextBtn.disabled = true;
        } else {
            nextBtn.disabled = false;
        }

        const tileSize = carouselSlide.querySelector('.project-tile').clientWidth;
        carouselSlide.style.transform = `translateX(${-tileSize * counter}px)`;
    }

    nextBtn.addEventListener('click', () => {
        const visibleTiles = window.innerWidth > 768 ? 3 : 1;
        if (counter < totalTiles - visibleTiles) {
            counter++;
        }
        updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
        if (counter > 0) {
            counter--;
        }
        updateCarousel();
    });

    // Update carousel on window resize and initial load
    window.addEventListener('resize', updateCarousel);
    updateCarousel();

});

</script>

<main>
    <section class="hero" id="hero">
        <video id = "hero-video" class="hero-video" autoplay loop muted playsinline poster="images/blacktech.png">
            <source src=videos/blacktech.mp4 type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container hero-content">
            <div class="hero-text">
                <h1>Where Code and Infrastructure Meet.</h1>
                <h2>Building and managing tech is the best way to learn. Find fun projects and guides for both developers and IT pros.</h2>
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

    <section id="showcase">
    <div class="container">
        <h2>Featured Projects</h2>
        <div class="carousel-container">
            <div class="carousel-slide">
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Project+1" alt="Project 1">
                    <h3>Project Title 1</h3>
                    <p>Brief, compelling description of your project.</p>
                </div>
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Project+2" alt="Project 2">
                    <h3>Project Title 2</h3>
                    <p>Brief, compelling description of your project.</p>
                </div>
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Project+3" alt="Project 3">
                    <h3>Project Title 3</h3>
                    <p>Brief, compelling description of your project.</p>
                </div>
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Project+4" alt="Project 4">
                    <h3>Project Title 4</h3>
                    <p>Brief, compelling description of your project.</p>
                </div>
            </div>
        </div>
        <div class="carousel-nav">
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
        </div>
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
                
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            
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

<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-auth-compat.js"></script>

<?php require_once 'config.php'; ?>

<script>
     // This line uses PHP to securely insert the config from your new file
    const firebaseConfig = <?php echo json_encode($firebaseConfig); ?>;

    firebase.initializeApp(firebaseConfig);

    // Find the logout link
    const logoutLink = document.querySelector('a[href="logout.php"]');
    if (logoutLink) {
        logoutLink.addEventListener('click', function(event) {
            // Prevent the link from navigating immediately
            event.preventDefault(); 
            
            firebase.auth().signOut().then(() => {
                // Sign-out successful on the client-side. 
                // Now, redirect to the PHP logout script to clear the server session.
                window.location.href = 'logout.php';
            }).catch((error) => {
                console.error('Sign out error', error);
                // Even if there's an error, try to log out on the server
                window.location.href = 'logout.php';
            });
        });
    }
</script>

<script>
    // This code waits for the page content to be fully loaded before running
    document.addEventListener('DOMContentLoaded', (event) => {
        // Get the video element by its ID
        const heroVideo = document.getElementById('hero-video');

        // Set the playback speed
        // 1.0 is normal speed
        // 0.5 is half-speed
        // 0.75 is 75% of normal speed
        heroVideo.playbackRate = 0.25; 
    });
</script>

<?php ob_end_flush(); // Flush the output buffer?>

</body>
</html>

