document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.guide-content section[id]');
    const navLinks = document.querySelectorAll('.guide-nav a');

    // Exit if there's nothing to observe
    if (sections.length === 0 || navLinks.length === 0) {
        return;
    }

    const observerOptions = {
        root: null, // Use the viewport as the root
        // Creates a stable "tripwire" for detection near the top of the screen
        rootMargin: '-120px 0px -50% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Get the link that corresponds to the observed section
            const id = entry.target.getAttribute('id');
            const activeLink = document.querySelector(`.guide-nav a[href="#${id}"]`);

            if (activeLink) {
                if (entry.isIntersecting) {
                    // When a section enters the detection zone, make its link active
                    navLinks.forEach(link => link.classList.remove('active'));
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