const popup = document.querySelector(".popup-profil");
const closeButton = document.querySelector("#closeButton");
const profilButton = document.querySelector(".profilButton");

profilButton.addEventListener("click", function () {
  popup.style.display = "block";
});

closeButton.addEventListener("click", function () {
  popup.style.display = "none";
});
