<?php

require_once('./models/articleManager.php');

if (
    !empty($_POST['nom']) &&
    !empty($_POST['description']) &&
    !empty($_POST['ville']) &&
    !empty($_FILES['image']['name'])
) {
    var_dump($_POST);
    var_dump($_FILES);

    $uploadDir = './uploads/'; // Répertoire de stockage des images
    $fileName = trim(basename(trim($_FILES['image']['name'])));
    $uploadFilePath = $uploadDir . uniqid() . '_' . $fileName; // Chemin complet avec nom unique
    var_dump(trim($uploadFilePath));


    $post = [
        'nom' => $_POST['nom'],
        'image_url' => $uploadFilePath,
        'description' => $_POST['description'],
        'ville' => $_POST['ville'],
        'id_utilisateur' => null
    ];

    $result = new_lost_cat($post);
    if ($result) {
        $feedback = [
            'type' => 'success',
            'message' => "Annonce publiée !",
        ];
    } else {
        $feedback = [
            'type' => 'error',
            'message' => "Oups, il y a eu un problème ...",
        ];
    }
} else {
    var_dump($_POST);
}

$template = 'views/pages/postLostCat.php';