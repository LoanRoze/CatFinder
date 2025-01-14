<?php

require_once('./models/loginManager.php');
require_once('./models/articleManager.php');
require_once('./models/imageImportManager.php');
require_once('./models/toastManager.php');
require_once('./services/response/response.php');


session_start();

if (!checkIfLoggedInfos()) {
    redirect('login');
}

if (
    !empty($_POST['nom']) &&
    !empty($_POST['description']) &&
    !empty($_POST['ville']) &&
    !empty($_FILES['image'])
) {

    $ftp_host = '192.168.1.118';
    $ftp_user = 'rapido';
    $ftp_pass = '(Ek.9KO}';

    $image_upload = $_FILES['image'];

    $imageInfo = importImageOnServer(
        $image_upload,
        $ftp_host,
        $ftp_user,
        $ftp_pass,
        "lostCat"
    );
    $image_url = $imageInfo['image_url'];
    $isImageSent = $imageInfo['isImageSent'];

    if ($isImageSent) {
        $post = [
            'nom' => $_POST['nom'],
            'image_url' => $image_url,
            'description' => $_POST['description'],
            'ville' => $_POST['ville'],
            'id_utilisateur' => $_SESSION['id']
        ];
        $result = new_lost_cat($post);
    }

    if ($result) {
        toastSuccess('Annonce publiée !');
    } else {
        toastSuccess('Oups, il y a eu un problème');
    }
}


$template = 'views/pages/postLostCat.php';