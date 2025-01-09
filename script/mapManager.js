// Remplacez 'YOUR_ACCESS_TOKEN' par votre token Mapbox
mapboxgl.accessToken = 'pk.eyJ1IjoicmFwaWRvbGFmbGVjaGUiLCJhIjoiY201b2h6M2pnMGwxdDJrczllZjNmd2V4bCJ9.rJRUuXMWPDwSHiBtfBEqsw';

// Initialiser la carte avec des coordonnées par défaut
const map = new mapboxgl.Map({
    container: 'map', // ID de l'élément HTML contenant la carte
    style: 'mapbox://styles/mapbox/streets-v12', // Style de la carte
    center: [2.3522, 48.8566], // Coordonnées initiales (Paris)
    zoom: 13 // Niveau de zoom initial
});

// Ajouter un marqueur déplaçable
let marker = new mapboxgl.Marker({
    draggable: true // Permettre de déplacer le marqueur
})
.setLngLat([2.3522, 48.8566]) // Position initiale du marqueur
.addTo(map);

// Fonction pour mettre à jour les champs d'entrée
function updateFormFields(lng, lat) {
    document.getElementById('latitude').value = lat.toFixed(6); // Limiter les décimales à 6
    document.getElementById('longitude').value = lng.toFixed(6);
}

// Mettre à jour les champs lors du déplacement du marqueur
marker.on('dragend', () => {
    const { lng, lat } = marker.getLngLat(); // Récupérer les coordonnées actuelles du marqueur
    updateFormFields(lng, lat);
});

// Ajouter un marqueur cliquable sur la carte
map.on('click', (event) => {
    const { lng, lat } = event.lngLat; // Récupérer les coordonnées où l'utilisateur a cliqué

    // Déplacer le marqueur existant vers la position cliquée
    marker.setLngLat([lng, lat]);

    // Mettre à jour les champs d'entrée avec les nouvelles coordonnées
    updateFormFields(lng, lat);
});

// Fonction pour obtenir la position actuelle de l'utilisateur
function getUserLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const userLng = position.coords.longitude;
            const userLat = position.coords.latitude;

            // Centrer la carte sur la position de l'utilisateur
            map.setCenter([userLng, userLat]);

            // Déplacer le marqueur sur la position de l'utilisateur
            marker.setLngLat([userLng, userLat]);

            // Mettre à jour les champs d'entrée avec les coordonnées de l'utilisateur
            updateFormFields(userLng, userLat);
        }, (error) => {
            console.error('Erreur de géolocalisation:', error);
            // Optionnellement, afficher une position par défaut si l'utilisateur refuse l'accès à la géolocalisation
        });
    } else {
        console.error('La géolocalisation n\'est pas supportée par ce navigateur.');
    }
}

// Appeler la fonction pour obtenir la position de l'utilisateur dès que la page est chargée
getUserLocation();