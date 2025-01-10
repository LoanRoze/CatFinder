<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <form action="" method="POST" class="form-Ajout" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Une photo du chat :</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <br>
            <div id="map"></div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="latitude"></label>
                <input type="hidden" id="latitude" name="latitude" readonly required>
            </div>

            <div class="form-group">
                <label for="longitude"></label>
                <input type="hidden" id="longitude" name="longitude" readonly required>
            </div>
            <input type="submit" value="Poster" class="btn">
        </form>
    </div>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
</body>

</html>