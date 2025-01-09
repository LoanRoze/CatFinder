<div class="container">
    <h1>Formulaire</h1>
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

    <?php if (isset($feedback)) { ?>
    <span class="alert-alert <?= $feedback['type'] ?>"><?= $feedback['message'] ?></span>
    <?php } ?>
</div>