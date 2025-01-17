<section class="foundCats">
    <div class="found-cats">
        <?php foreach ($AllFoundPosts as $article) { ?>
            <?php createMap('card-' . $article["id"],$article["longitude"], $article["latitude"]) ?>
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
                            <div id="<?= 'card-' . $article["id"]?>" class="card-map"></div>
                            <button class="goMaps">Itinéraire 📍</button>
                            <br>
                            <button class="closePopup">Fermer ❌</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>