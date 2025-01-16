mapboxgl.accessToken = 'pk.eyJ1IjoicmFwaWRvbGFmbGVjaGUiLCJhIjoiY201b2h6M2pnMGwxdDJrczllZjNmd2V4bCJ9.rJRUuXMWPDwSHiBtfBEqsw';

export function createMap(containerID, longitude, latitude, draggableMarker) {
    const map = new mapboxgl.Map({
        container: containerID,
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [longitude, latitude],
        zoom: 13
    });
    let marker = new mapboxgl.Marker({
        draggable: draggableMarker
    }).setLngLat([2.3522, 48.8566]).addTo(map);
    return {map, marker}
}

function testmap() {
    console.log("message de test")
}
testmap()


export function updateFormFields(lng, lat) {
    document.getElementById('longitude').value = lng.toFixed(6);
    document.getElementById('latitude').value = lat.toFixed(6);
}

export function placeUserOnMap(map, marker) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const userLng = position.coords.longitude;
            const userLat = position.coords.latitude;

            map.setCenter([userLng, userLat]);

            marker.setLngLat([userLng, userLat]);

            updateFormFields(userLng, userLat);
        }, (error) => {
            return false
        });
    } else {
        return false
    }
}

