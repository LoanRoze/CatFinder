<section class="about">
  <div class="lost-cats">
    <?php
    foreach ($AllFoundPosts as $article) { ?>
      <div class="card">
        <img class="image-article"><?= $article["image_url"] ?></img>
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