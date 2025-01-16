mapboxgl.accessToken =
  "pk.eyJ1IjoicmFwaWRvbGFmbGVjaGUiLCJhIjoiY201b2h6M2pnMGwxdDJrczllZjNmd2V4bCJ9.rJRUuXMWPDwSHiBtfBEqsw";

const map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/mapbox/streets-v12",
  center: [2.3522, 48.8566],
  zoom: 13,
});

let marker = new mapboxgl.Marker({
  draggable: true,
})
  .setLngLat([2.3522, 48.8566])
  .addTo(map);

function updateFormFields(lng, lat) {
  document.getElementById("latitude").value = lat.toFixed(6);
  document.getElementById("longitude").value = lng.toFixed(6);
}

marker.on("dragend", () => {
  const { lng, lat } = marker.getLngLat();
  updateFormFields(lng, lat);
});

map.on("click", (event) => {
  const { lng, lat } = event.lngLat;

  marker.setLngLat([lng, lat]);

  updateFormFields(lng, lat);
});

function getUserLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      (position) => {
        const userLng = position.coords.longitude;
        const userLat = position.coords.latitude;

        map.setCenter([userLng, userLat]);

        marker.setLngLat([userLng, userLat]);

        updateFormFields(userLng, userLat);
      },
      (error) => {
        console.error("Erreur de géolocalisation:", error);
      }
    );
  } else {
    console.error("La géolocalisation n'est pas supportée par ce navigateur.");
  }
}

getUserLocation();
