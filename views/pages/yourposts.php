<section class="user-posts">
    Chats perdus
    <div class="lost-cats">
        <?php
        foreach ($AllLostPosts as $article) { ?>
        <div class="card">
            <img class="image-article" src="<?= $article["image_url"] ?>" alt="Image de l'article">
            <div class="card-content">
                <h2><?= $article["nom"] ?></h2>
                <h3><?= $article["description"] ?></h2>
                <p class="location"><?= $article["ville"] ?></p>
                <p>Publié le <?= $article["published_at"] ?></p>
                <button id="contacter">Contacter 📞</button>
                <div class="popup-overlay">
                <div class="popup">
                    <div>Email :</div>
                    <div>Telephone :</div>
                    <button class="closePopup">Fermer ❌</button>
                </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="found-cats">
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
</section>