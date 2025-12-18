const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');

function openMenu() {
    mobileMenu.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeMenuFunc() {
    mobileMenu.classList.remove('active');
    document.body.style.overflow = '';
}

if (hamburger && closeMenu && mobileMenu) {
    hamburger.addEventListener('click', openMenu);
    closeMenu.addEventListener('click', closeMenuFunc);

    // Close menu when clicking on a link
    const menuLinks = mobileMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', closeMenuFunc);
    });

    // Close menu when clicking outside
    mobileMenu.addEventListener('click', (e) => {
        if (e.target === mobileMenu) {
            closeMenuFunc();
        }
    });
}