// Select elements
const toggler = document.querySelector('.navbar-toggler');
const navMenu = document.querySelector('#navbarSupportedContent');
const navLinks = document.querySelectorAll('.nav-link');
const togglerIcon = document.querySelector('.navbar-toggler-icon');


// Toggle "X" button and open/close menu
toggler.addEventListener('click', () => {
    const isExpanded = toggler.getAttribute('aria-expanded') === 'true';

    if (isExpanded) {
        toggler.setAttribute('aria-expanded', 'false');
        togglerIcon.classList.remove('open'); // Remove "X" class
    } else {
        toggler.setAttribute('aria-expanded', 'true');
        togglerIcon.classList.add('open'); // Add "X" class
    }
});

// Close menu when a link is clicked
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (navMenu.classList.contains('show')) {
            navMenu.classList.remove('show');
            toggler.setAttribute('aria-expanded', 'false');
            togglerIcon.classList.remove('open'); // Reset to default menu icon
        }
    });
});
