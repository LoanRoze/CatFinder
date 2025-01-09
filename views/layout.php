<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $seo['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" type="module"></script>
    <link rel="stylesheet" href="style/common_style.css">
    <?php foreach ($styles as $style) { ?>
        <link rel="stylesheet" href="style/<?=$style?>">
    <?php } ?>
    <?php foreach ($scripts as $script) { ?>
        <script src="script/<?=$script?>" defer></script>
    <?php } ?>
</head>
<body>
    <?php require('views/partials/_header.html') ?>
    <main>
        <?php require($template)?>
    </main>
    <?php require('views/partials/_footer.html') ?>
</body>
</html>
