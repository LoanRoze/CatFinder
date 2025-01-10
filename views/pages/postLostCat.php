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
        <h3>J'ai perdu mon chat</h3>
        <div class="form-group">
            <label id="imagelabel" for="image">Une photo du chat</label>
            <input id="fileuploader" type="file" id="image" name="image" class="form-control">
            <div id="fileuploaderinput"></div>
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input id="description" name="description" class="form-control" required></input>
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville" class="form-control" required>
        </div>
        <input type="hidden" name="id_utilisateur" value="<?= $_SESSION['id_utilisateur'] ?? '' ?>">
        <input type="submit" value="Poster" class="btn">
    </form>
</body>

</html>