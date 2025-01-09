<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Interactive</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
</head>

<body>
    
    <div class="container">
        <h1>Localiser un point avec Mapbox</h1>
        <div id="map"></div>
        <form id="locationForm" action="/submit-location" method="POST">
            <label for="latitude"></label>
            <input type="hidden" id="latitude" name="latitude" readonly required>
            <label for="longitude"></label>
            <input type="hidden" id="longitude" name="longitude" readonly required>
            <center><button type="submit">Envoyer</button></center>
        </form>
    </div>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
    <script src="script.js"></script>
</body>

</html>