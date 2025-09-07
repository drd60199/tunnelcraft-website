// Wait for the HTML document to be fully loaded before running any scripts
document.addEventListener('DOMContentLoaded', () => {

    // --- Menu Toggle for Mobile Navigation ---
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // --- Carousel Functionality ---
    const carouselSlide = document.querySelector('.carousel-slide');
    if (carouselSlide) {
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let counter = 0;
        const totalTiles = carouselSlide.querySelectorAll('.project-tile').length;

        function updateCarousel() {
            const visibleTiles = window.innerWidth > 768 ? 3 : 1;
            prevBtn.disabled = counter === 0;
            nextBtn.disabled = counter >= totalTiles - visibleTiles;
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

        window.addEventListener('resize', updateCarousel);
        updateCarousel();
    }

    // --- Firebase Logout Handler ---
    // Note: firebase.initializeApp(firebaseConfig) is called in the HTML file before this script.
    const logoutLink = document.querySelector('a[href*="logout.php"]');
    if (logoutLink) {
        logoutLink.addEventListener('click', function(event) {
            event.preventDefault(); 
            const logoutUrl = this.href;
            
            firebase.auth().signOut().then(() => {
                window.location.href = logoutUrl;
            }).catch((error) => {
                console.error('Sign out error', error);
                window.location.href = logoutUrl;
            });
        });
    }

    // --- Hero Video Playback Speed ---
    const heroVideo = document.getElementById('hero-video');
    if (heroVideo) {
        heroVideo.playbackRate = 0.75; 
    }
});