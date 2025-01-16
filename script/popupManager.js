const openPopupButtons = document.querySelectorAll(".openPopup");
const closePopupButtons = document.querySelectorAll(".closePopup");
const popupOverlays = document.querySelectorAll(".popup-overlay");

openPopupButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        popupOverlays[index].style.display = "flex";
    });
});

closePopupButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        popupOverlays[index].style.display = "none";
    });
});
