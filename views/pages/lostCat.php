<section class="lostCats">
    <div class="lost-cats">
        <?php foreach ($AllLostPosts as $article) { ?>
        <?php $userInfo = getUser($article['id_utilisateur']) ?>
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
                            <div>Email : <?= $userInfo['email']?></div>
                            <div>Telephone : <?= $userInfo['num_phone']?></div>
                            <button class="closePopup">Fermer ❌</button>
                        </div>
                    </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>