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
                    <a href="path/to/your/guide.php" class="guide-card" data-category="web-dev">
                        <img src="https://via.placeholder.com/400x250.png?text=Portfolio+Site" alt="Portfolio Project">
                        <div class="card-content">
                            <h3>Build a Personal Portfolio Website</h3>
                            <p>Learn the fundamentals of HTML and CSS by creating a stunning portfolio from scratch.</p>
                            <div class="card-tags">
                                <span class="tag">Beginner</span>
                                <span class="tag">HTML</span>
                                <span class="tag">CSS</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="guide-card" data-category="it-infra">
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
                    </a>

                    </div>
            </div>
        </section>
    </main>
    
    <?php // You can require your footer file here ?>
    
    <script src="assets/js/guide-filter.js"></script>
    <script src="../assets/js/header-scroll.js"></script>
</body>
</html>