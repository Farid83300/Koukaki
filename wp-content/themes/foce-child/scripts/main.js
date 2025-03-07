
//////////////////////////////////////////////////////////////////////
// Apparition des Titres au Scroll
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


//////////////////////////////////////////////////////////////////////
// Effet de Parallax entre la bannière et le logo



//////////////////////////////////////////////////////////////////////
// NavBAR et Menu Hamburger
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    menuToggle.addEventListener("click", function () {
        this.classList.toggle("open"); // Animation du bouton hamburger
        menu.classList.toggle("open"); // Animation du menu
    });

    // Fermeture du menu au clic en dehors
    document.addEventListener("click", function (event) {
        if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
            menuToggle.classList.remove("open");
            menu.classList.remove("open");
        }
    });
});


//////////////////////////////////////////////////////////////////////
// Animation des Clouds
document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector("#studio"); // Ajusté pour la bonne section
    const bigCloud = document.querySelector(".big-cloud");
    const littleCloud = document.querySelector(".little-cloud");
    
    if (!section || !bigCloud || !littleCloud) return;
    
    function isSectionVisible() {
        const rect = section.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
    }
    
    function handleScroll() {
        if (!isSectionVisible()) return;
        
        const scrollPosition = window.scrollY;
        const maxDisplacement = 300;
        
        // Calcul du déplacement proportionnellement à la position de la section
        const sectionTop = section.getBoundingClientRect().top;
        const sectionHeight = section.offsetHeight;
        const scrollFactor = Math.min(Math.max((window.innerHeight - sectionTop) / sectionHeight, 0), 1);
        const displacement = -maxDisplacement * scrollFactor;
        
        bigCloud.style.transform = `translateX(${displacement}px)`;
        littleCloud.style.transform = `translateX(${displacement}px)`;
    }
    
    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Exécuter une première fois au chargement
});

