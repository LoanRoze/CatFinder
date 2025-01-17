<?php
    require_once('./models/loginManager.php');
?>
<header>
    <nav class="navbar">
        <div class="nav-left">
            <a href="index.php?page=postAnnoncement" class="nav-link" id="">➕</a>
            <a href="index.php?page=lostCat" class="nav-link">🔎</a>
            <a href="index.php?page=foundCat" class="nav-link">😻</a>
        </div>
        <div class="nav-right">
            <?php if(checkIfLoggedInfos()) { ?>

            <div class="nav-link profilButton">👤</div>

            <?php } else { ?>
            <a href="index.php?page=login" class="nav-link">Connexion</a>

            <?php } ?>
        </div>
    </nav>
    <?php if(checkIfLoggedInfos()) { ?>
    <div class="popup-profil">
        <div id="closeButton">❌</div>
        <p>
            <?php echo($_SESSION["nom"]) ?>
        </p>
        <p class="email-container"><?php echo($_SESSION["email"]) ?></p>
        <p>
            <?php echo($_SESSION["num_phone"]) ?>
        </p>
        <a href="index.php?page=yourposts">
            <button id="">Vos posts</button>
        </a>
        <button id="decobutton">Déconnexion</button>
    </div>
    <?php } ?>
</header>