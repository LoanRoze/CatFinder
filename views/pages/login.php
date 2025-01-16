<section class="login">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form action="" method="POST" class="form-Ajout" enctype="multipart/form-data">
        <h3>Vous connecter</h3>

        <div class="form-group">
            <label for="nom">Nom d'utilisateur</label>
            <input type="text" placeholder="Nom d'utilisateur" name="nom" id="nom">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" name="password" id="password">
        </div>

        <input class="button" type="submit" value="Poster" class="btn">

        <div id="create-account-infos">Vous n'avez pas de compte <a href="index.php?page=register">Créer un compte</a></div>
    </form>
</section>

</html>