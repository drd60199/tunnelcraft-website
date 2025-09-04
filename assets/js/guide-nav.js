document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.guide-content section');
    const navLinks = document.querySelectorAll('.guide-nav a');

    const observerOptions = {
        root: null, // observes intersections relative to the viewport
        rootMargin: '0px 0px -75% 0px',
        threshold: 0 
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Remove active class from all links
                navLinks.forEach(link => link.classList.remove('active'));

                // Find the corresponding nav link and add active class
                const id = entry.target.getAttribute('id');
                const activeLink = document.querySelector(`.guide-nav a[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }, observerOptions);

    // Observe each section
    sections.forEach(section => {
        observer.observe(section);
    });
});