
// Apparition des titres au Scroll
document.addEventListener("DOMContentLoaded", function () {
    const sectionTitles = document.querySelectorAll(".section-title");

    const revealOnScroll = () => {
        sectionTitles.forEach(title => {
            const titleTop = title.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (titleTop < windowHeight * 0.85) {
                title.classList.add("visible");
            }
        });
    };

    // Exécuter la fonction au chargement et lors du scroll
    revealOnScroll();
    window.addEventListener("scroll", revealOnScroll);
});


