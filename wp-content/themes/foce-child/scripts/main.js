
// Apparition des titres au Scroll
document.addEventListener("DOMContentLoaded", function () {
    const titles = document.querySelectorAll("h2, h3");

    // Ajout de la classe not-visible au chargement
    titles.forEach(title => {
        title.classList.add("not-visible");
    });

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top < window.innerHeight - 100 && 
            rect.bottom >= 0
        );
    }

    function handleScroll() {
        titles.forEach(title => {
            if (isElementInViewport(title)) {
                setTimeout(() => {
                    title.classList.remove("not-visible"); // Supprime la classe de blocage
                    title.classList.add("fade-in-visible"); // Applique l'effet
                }, 200);
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll();
});

