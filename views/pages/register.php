<!DOCTYPE html>
<html lang="en">

<head>
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>
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

        <input class="button" type="submit" value="Poster" class="btn">
    </form>
</body>

</html>