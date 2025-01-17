document
  .getElementById("fileuploaderinput")
  .addEventListener("click", () => {
    document.getElementById("fileuploader").click();
  });


document.getElementById('fileuploader').addEventListener('change', function (event) {
  const file = event.target.files[0];
  console.log(file)
  if (file && !file.type.startsWith('image/')) {
    alert('Veuillez sélectionner un fichier image.');
    event.target.value = ''; // Réinitialise l'input
    document.getElementById("fileuploaderinput").style.backgroundImage = "url('https://icon-library.com/images/white-plus-icon/white-plus-icon-3.jpg')";
    // "
  } else {
    console.log(document.getElementById("fileuploaderinput").style.backgroundImage)
    document.getElementById("fileuploaderinput").style.backgroundImage = "url('https://i.pinimg.com/564x/ed/cf/e6/edcfe63298eac1d953affb9fd98d354d.jpg')";
  }
});