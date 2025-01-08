<div id="list-article">
    <h1>Found Cat</h1>
    <?php
       foreach($AllFoundPosts as $article){ ?>
       <div class="card-article">
           <img class="image-article"><?= $article["image_url"]?></img>
           <p><?= $article["description"]?></p>
           <p><?= $article["ville"]?></p>
           <p>Publié le <?= $article["published_at"]?></p>
           <div>
           </div>
       </div>
       <?php
       }
       ?>
</div>