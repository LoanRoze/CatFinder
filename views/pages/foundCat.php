<section class="about">
  <div class="lost-cats">
    <?php
    foreach ($AllFoundPosts as $article) { ?>
      <div class="card">
        <img class="image-article" src="<?= $article["image_url"] ?>" alt="catimg">
        <p><?= $article["description"] ?></p>
        <p class="location"><?= $article["localisation"] ?></p>
        <p>Publié le <?= $article["published_at"] ?></p>
        <button>Contacter</button>
        <div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</section>