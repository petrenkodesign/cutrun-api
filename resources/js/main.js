import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    // Mobile navigation
    const menuToggle = document.getElementById("menu-toggle");
    const navMenu = document.getElementById("nav-menu");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", () => {
            navMenu.classList.toggle("open");
        });
    }

    // Rotating hero text
    const rotatingText = document.getElementById("rotating-text");
    const texts = ["Powering Your Race Events", "Seamless Timing Solutions", "Engage Every Participant"];
    let index = 0;

    if (rotatingText) {
        setInterval(() => {
            index = (index + 1) % texts.length;
            rotatingText.textContent = texts[index];
        }, 10000);
    }
});