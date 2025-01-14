<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
</head>

<section class="about">
    <div class="lost-cats">
        <?php
        foreach ($AllFoundPosts as $article) { ?>
        <div class="card">
            <img class="image-article" src="<?= $article["image_url"] ?>" alt="Image de l'article">
            <div class="card-content">
                <h3><?= $article["description"] ?></h3>
                <p class="location"><?= $article["longitude"] ?></p>
                <p class="location"><?= $article["latitude"] ?></p>
                <p>Publié le <?= $article["published_at"] ?></p>
                <button class="openPopup">Localisation 🌍</button>
                <div class="popup-overlay">
                    <div class="popup">
                        <div id="map"></div>
                        <button class="goMaps">Itinéraire 📍</button>
                        <br>
                        <button class="closePopup">Fermer ❌</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
</section>