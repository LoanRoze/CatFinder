<?php
    require_once('./models/loginManager.php');
?>
<script src="../script/profilpopupManager.js" defer></script>
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
    <div class="Popup">
        <p>
            <?php echo($_SESSION["nom"]) ?>
        </p>
        <p>
            <?php echo($_SESSION["email"]) ?>
        </p>
        <p>
            <?php echo($_SESSION["num_phone"]) ?>
        </p>
        <button id="closeButton">Fermer</button>
        <br>
        <br>
        <button id="">Déconnexion</button>
    </div>
</header>