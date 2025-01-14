<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $seo['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" type="module"></script>

    <?php foreach ($styles as $style) { ?>
        <link rel="stylesheet" href="style/<?=$style?>">
    <?php } ?>
    <?php foreach ($scripts as $script) { ?>
        <script src="script/<?=$script?>" defer></script>
    <?php } ?>
</head>
<body>
    <?php require('views/partials/_header.php') ?>
    <main>
        <?php require($template)?>
    </main>
    <?php require('views/partials/_footer.html') ?>
    <?php require('views/partials/_successalert.html') ?>
</body>
</html>
