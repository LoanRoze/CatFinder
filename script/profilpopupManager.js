document.addEventListener("DOMContentLoaded", function () {
  const popup = document.querySelector(".Popup");
  const closeButton = document.querySelector("#closeButton");
  const profilButton = document.querySelector(".profilButton");

  profilButton.addEventListener("click", function () {
    popup.style.display = "block";
  });

  closeButton.addEventListener("click", function () {
    popup.style.display = "none";
  });
});
