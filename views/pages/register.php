<section class="register">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form id="registerform" action="" method="POST" class="form-Ajout" enctype="multipart/form-data">
        <h3 id="registerh3">Créer un compte</h3>

        <div class="form-group">
            <label for="nom">Nom d'utilisateur</label>
            <input type="text" placeholder="Nom d'utilisateur" name="nom" id="nom">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="num_phone">Numéro de Téléphone</label>
            <input type="tel" placeholder="Numéro de Téléphone" name="num_phone" id="num_phone" pattern="0[6-7][0-9]{8}">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" name="password" id="password">
        </div>

        <input class="button" type="submit" value="Créer un compte" class="btn">
    </form>
</section>

