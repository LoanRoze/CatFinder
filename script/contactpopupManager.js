// Sélectionner les boutons "Contacter" et les popups
const contacterButtons = document.querySelectorAll("#contacter");
const popupOverlays = document.querySelectorAll(".popup-overlay");
const closePopupButtons = document.querySelectorAll(".closePopup");

// Associer chaque bouton "Contacter" à son popup
contacterButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        popupOverlays[index].style.display = "flex"; // Affiche la popup correspondante
    });
});

closePopupButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        popupOverlays[index].style.display = "none"; // Ferme la popup correspondante
    });
});