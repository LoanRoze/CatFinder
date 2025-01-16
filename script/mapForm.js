import { placeUserOnMap } from "./mapManager.js"
import { createMap } from './mapManager.js'
import { updateFormFields } from './mapManager.js'

let {map, marker} = createMap('map', 0, 0, true)
placeUserOnMap(map, marker)


marker.on('dragend', () => {
    const { lng, lat } = marker.getLngLat();
    updateFormFields(lng, lat);
});

map.on('click', (event) => {
    const { lng, lat } = event.lngLat;

    marker.setLngLat([lng, lat]);

    updateFormFields(lng, lat);
});