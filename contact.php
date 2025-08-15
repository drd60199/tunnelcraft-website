<?php include 'header.php';?>

<main>
    <section class="contact">
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
        <p>&copy; 2024 Your Server Hosting</p>
        <ul class="social-links">
            <li><a href="#"><img src="social-icon1.png" alt="Social Media 1"></a></li>
            <li><a href="#"><img src="social-icon2.png" alt="Social Media 2"></a></li>
        </ul>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>