<section class="about">
    <div class="lost-cats">
        <?php
        foreach ($AllFoundPosts as $article) { ?>
        <div class="card">
            <img class="image-article" src="<?= $article["image_url"] ?>" alt="Image de l'article">
            <div class="card-content">
                <h2><?= $article["description"] ?></h2>
                <p class="location"><?= $article["longitude"] ?></p>
                <p class="location"><?= $article["latitude"] ?></p>
                <p>Publié le <?= $article["published_at"] ?></p>
                <button>Contacter</button>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</section>