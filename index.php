<?php require 'includes/header.php'; ?>
<title>TunnelCraft | Home</title>

<main>
    <section class="hero" id="hero">
        <video id = "hero-video" class="hero-video" autoplay loop muted playsinline poster="assets/images/lightgreytech.png">
            <source src=assets/videos/lightgreytech.mp4 type="video/mp4">
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
                <p>--Forget passive reading.--</p>
                <p>TunnelCraft offers hands-on projects and practical guides designed to help you build real-world skills in code and infrastructure. It's time to get your hands dirty, turn ideas into reality.</p>
            </div>
    </section>

    <section id="showcase">
    <div class="container">
        <h2>Featured Projects</h2>
        <div class="carousel-container">
            <div class="carousel-slide">
                <div class="project-tile">
                    <img src="assets/images/Bootstrap_Feature.png" alt="Web Development Project">
                    <h3>Build a Responsive Website with Bootstrap</h3>
                    <p>Create a modern, mobile-friendly personal website from scratch using Bootstrap's powerful grid system and interactive components.</p>
                </div>
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Coming+Soon" alt="IT & Infrastructure Project">
                    <h3>Your First Home Server</h3>
                    <p>Coming Soon: Learn how to turn an old PC into a powerful home media and file server using Linux.</p>
                </div>
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Coming+Soon" alt="Python Automation Project">
                    <h3>Automate with Python Scripts</h3>
                    <p>Coming Soon: A beginner's guide to writing simple Python scripts that can organize files and automate daily tasks.</p>
                </div>
                <div class="project-tile">
                    <img src="https://via.placeholder.com/400x300.png?text=Coming+Soon" alt="Weather App Project">
                    <h3>Simple Weather App</h3>
                    <p>Coming Soon: Learn how to fetch and display real-time data from a public API by building a clean, modern weather app.</p>
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
        <a href="guides.php">Build Something Awesome</a>
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

            <form action="includes/submit_contact.php" method="post">
                
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

<?php require 'includes/footer.php'; ?>

