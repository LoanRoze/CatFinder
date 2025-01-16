<section class="postFoundCat">
    <div class="container">
        <form action="" method="POST" class="form-Ajout" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Une photo du chat :</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <br>
            <div id="map"></div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="latitude"></label>
                <input type="hidden" id="latitude" name="latitude" readonly required>
            </div>

            <div class="form-group">
                <label for="longitude"></label>
                <input type="hidden" id="longitude" name="longitude" readonly required>
            </div>
            <input type="submit" value="Poster" class="btn">
        </form>
    </div>
</section>

