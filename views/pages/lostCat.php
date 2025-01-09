<section class="about">
  <div class="lost-cats">
    <?php
    foreach ($AllLostPosts as $article) { ?>
      <div class="card">
        <img src="<?= $article["image_url"] ?>" class="image-article"></img>
        <p><?= $article["description"] ?></p>
        <p class="location"><?= $article["ville"] ?></p>
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