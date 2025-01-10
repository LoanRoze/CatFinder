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
    <form action="" method="POST" class="form-Ajout" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Une photo du chat :</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="nom">Nom de votre chat :</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="ville">Votre ville :</label>
            <input type="text" id="ville" name="ville" class="form-control" required>
        </div>

        <input type="hidden" name="id_utilisateur" value="<?= $_SESSION['id_utilisateur'] ?? '' ?>">

        <input type="submit" value="Poster" class="btn">
    </form>
</body>

</html>