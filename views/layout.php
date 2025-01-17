<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $seo['title'] ?></title>
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <?php foreach ($styles as $style) { ?>
    <link rel="stylesheet" href="style/<?=$style?>">
    <?php } ?>

    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js" defer></script>

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