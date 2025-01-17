<section class="user-posts">

    <div class="title">Vos chats perdus</div>
    <div class="lost-cats">
        <?php foreach ($AllLostPosts as $article) { ?>
        <div class="card">
            <img class="image-article" src="<?= $article["image_url"] ?>" alt="Image de l'article">
            <div class="card-content">
                <h2><?= $article["nom"] ?></h2>
                <h3><?= $article["description"] ?></h2>
                    <p class="location"><?= $article["ville"] ?></p>
                    <p>Publié le <?= $article["published_at"] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="title">Vos chats trouvés</div>
    <div class="found-cats">
        <?php foreach ($AllFoundPosts as $article) { ?>
        <div class="card">
            <img class="image-article" src="<?= $article["image_url"] ?>" alt="Image de l'article">
            <div class="card-content">
                <h3><?= $article["description"] ?></h3>
                <p class="location"><?= $article["longitude"] ?></p>
                <p class="location"><?= $article["latitude"] ?></p>
                <p>Publié le <?= $article["published_at"] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>