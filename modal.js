// Fonction pour ouvrir la modal avec le titre, la description et l'image
function openModal(title, description, imageSrc) {
    document.getElementById("modalTitle").textContent = title;
    document.getElementById("modalDescription").textContent = description;
    document.getElementById("modalImage").src = imageSrc;
    document.getElementById("designModal").style.display = "flex"; // Utilise "flex" pour centrer le contenu
    document.body.classList.add("no-scroll"); // Désactiver le scroll
}

// Fonction pour fermer la modal
function closeModal() {
    document.getElementById("designModal").style.display = "none";
    document.body.classList.remove("no-scroll"); // Réactiver le scroll
}

// Fermer la modal lorsque l'utilisateur clique en dehors de la boîte
window.onclick = function(event) {
    var modal = document.getElementById("designModal");
    if (event.target === modal) {
        closeModal();
    }
};

function toggleMenu() {
    document.getElementById("fullscreenMenu").classList.toggle("active");
    document.body.classList.toggle("no-scroll"); // Désactiver le scroll en arrière-plan
}

