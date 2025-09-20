<?php require 'includes/header.php'; ?>

    <title>Guides Library | TunnelCraft</title>    
    <body>
    <main>
        <section class="guides-library">
            <div class="container">
                <div class="guides-header">
                    <h1>The Guides Library</h1>
                    <p>Find your next project. Filter by category to get started.</p>
                </div>

                <div class="filter-controls">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="web-dev">Web Development</button>
                    <button class="filter-btn" data-filter="it-infra">IT & Infrastructure</button>
                </div>

                <div class="guide-grid">
                    <a href="guides/Git&Github.php" class="guide-card" data-category="web-dev">
                        <img src="assets/images/git&github_card_image.png" alt="Git & Github Project">
                        <div class="card-content">
                            <h3>Getting Started with Git & Github</h3>
                            <p>Learn the fundamentals of version control and collaboration from setup to your first pull request.</p>
                            <div class="card-tags">
                                <span class="tag">Beginner</span>
                                <span class="tag">Git</span>
                                <span class="tag">Version Control</span>
                            </div>
                        </div>
                    </a>

                    <a href="guides/Bootstrap.php" class="guide-card" data-category="web-dev">
                        <img src="assets/images/Bootstrap_card_image.png" alt="Bootstrap Project">
                        <div class="card-content">
                            <h3>Build a Responsive Website with Bootstrap</h3>
                            <p>Create a modern, mobile-friendly personal website from scratch using Bootstrap's powerful grid system and interactive components.</p>
                            <div class="card-tags">
                                <span class="tag">Beginner</span>
                                <span class="tag">Bootstrap</span>
                                <span class="tag">Responsive Design</span>
                            </div>
                        </div>
                    </a>

                    <!--<a href="#" class="guide-card" data-category="it-infra">
                        <img src="https://via.placeholder.com/400x250.png?text=Home+Server" alt="Home Server Project">
                        <div class="card-content">
                            <h3>Set Up a Linux Home Server</h3>
                            <p>Turn an old computer into a powerful home server for file storage, media streaming, and more.</p>
                            <div class="card-tags">
                                <span class="tag">Intermediate</span>
                                <span class="tag">Linux</span>
                                <span class="tag">Networking</span>
                            </div>
                        </div>
                    </a>!-->

                    </div>
            </div>
        </section>
    </main>
    
    <?php require 'includes/footer.php'; ?>
    
    <script src="assets/js/guide-filter.js"></script>
    <script src="../assets/js/header-scroll.js"></script>
</body>
</html>