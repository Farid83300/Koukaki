
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
// NavBAR et Menu Hamburger
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    if (menuToggle) {
        // Force l'affichage du bouton
        menuToggle.style.display = 'flex';
      }
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
// Parallax Logo
document.addEventListener("DOMContentLoaded", function () {
    const logo = document.querySelector(".logo");
    
    if (!logo) return;
    
    window.addEventListener("scroll", function() {
        // Calcul du décalage vertical basé sur le défilement
        // Le facteur 0.3 détermine l'intensité de l'effet de parallax
        const parallaxOffset = window.scrollY * 0.29;
        
        // Application de la transformation de parallax
        // Nous utilisons un attribut personnalisé pour stocker la valeur
        logo.setAttribute('data-parallax', parallaxOffset);
        updateLogoTransform(logo);
    });
    
    // Fonction pour mettre à jour les transformations combinées
    function updateLogoTransform(element) {
        // Nous n'ajoutons pas directement de style transform pour ne pas interférer
        // avec les animations CSS, nous utilisons une variable CSS personnalisée
        element.style.setProperty('--logo-parallax-y', `${element.getAttribute('data-parallax') || 0}px`);
    }
});


//////////////////////////////////////////////////////////////////////
// Animation des Clouds
document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector("#studio");
    const bigCloud = document.querySelector(".big-cloud");
    const littleCloud = document.querySelector(".little-cloud");
    
    if (!section || !bigCloud || !littleCloud) return;
    
    function isSectionVisible() {
        const rect = section.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
    }
    
    function handleScroll() {
        if (!isSectionVisible()) return;
        
        const maxDisplacement = 300;
        
        // Calcul du facteur de déplacement
        const sectionTop = section.getBoundingClientRect().top;
        const sectionHeight = section.offsetHeight;
        const scrollFactor = Math.min(Math.max((window.innerHeight - sectionTop) / sectionHeight, 0), 1);
        
        // Assurer un déplacement maximal de 300px
        const displacement = -maxDisplacement * scrollFactor;
        
        bigCloud.style.transform = `translateX(${displacement}px)`;
        littleCloud.style.transform = `translateX(${displacement}px)`;
    }
    
    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Exécuter une première fois au chargement
});

