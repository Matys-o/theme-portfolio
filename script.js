function toggleMenu() {
    const fullscreenMenu = document.getElementById("fullscreenMenu");
    const body = document.body;

    if (fullscreenMenu) {
        fullscreenMenu.classList.toggle("active");
        body.classList.toggle("no-scroll");
    }
}

console.log("Le fichier scripts.js est chargé !");

function toggleMenu() {
    const fullscreenMenu = document.getElementById("fullscreenMenu");
    const body = document.body;

    if (fullscreenMenu) {
        fullscreenMenu.classList.toggle("active");
        body.classList.toggle("no-scroll");
    }
}

function toggleMenu() {
    const fullscreenMenu = document.getElementById("fullscreenMenu");
    const body = document.body;
    const burgerMenu = document.querySelector(".burger-menu");

    if (fullscreenMenu) {
        fullscreenMenu.classList.toggle("active");
        body.classList.toggle("no-scroll");

        // Masquer l'icône du menu burger lorsque le menu est actif
        if (fullscreenMenu.classList.contains("active")) {
            burgerMenu.style.display = "none";
        } else {
            burgerMenu.style.display = "block";
        }
    }
}

function toggleMenu() {
    const burger = document.querySelector('.burger-menu');
    const fullscreenMenu = document.getElementById('fullscreenMenu');
    burger.classList.toggle('active');
    fullscreenMenu.classList.toggle('active');
}


