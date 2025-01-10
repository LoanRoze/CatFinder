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
    <form>
        <h3>J'ai perdu mon chat</h3>

        <label for="image">Ajouter une photo de votre chat</label>
        <input id="fileuploader" type="file" id="image" name="image" class="form-control">
        <div id="fileuploaderinput"></div>

        <label for="name">Nom de votre chat :</label>
        <input type="text" placeholder="Nom de votre chat" id="name">

        <label for="description">Description</label>
        <input type="text" placeholder="Description" id="description">

        <label for="ville">Ville</label>
        <input type="text" placeholder="Votre ville" id="ville">

        <input type="hidden" name="id_utilisateur" value="<?= $_SESSION['id_utilisateur'] ?? '' ?>">

        <input type="submit" value="Poster" class="btn">
    </form>

    <?php if (isset($feedback)) { ?>
    <span class="alert-alert <?= $feedback['type'] ?>"><?= $feedback['message'] ?></span>
    <?php } ?>
    </form>
</body>

</html>