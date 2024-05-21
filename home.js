// Get all navbar links
const navbarLinks = document.querySelectorAll('.navbar-link');

// Add click event listener to each navbar link
navbarLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Remove 'clicked' class from all navbar links
        navbarLinks.forEach(link => {
            link.classList.remove('clicked');
        });

        // Add 'clicked' class to the clicked navbar link
        this.classList.add('clicked');
    });
});
