<?php

require_once('./models/articleManager.php');

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

    if ($image_upload['error'] === UPLOAD_ERR_OK) {
        $local_file = $image_upload['tmp_name'];

        $post_id = getLastLostCats(1)[0]['id'] + 1;
        $remote_file = '/web/nightlanclub/webfolder/uploads/' . $post_id;
        $image_url = "http://nightcraft.fr/webfolder/uploads/" . $post_id;

        $ftp_conn = ftp_ssl_connect($ftp_host) or die("Impossible de se connecter à $ftp_host via FTPS");
    
        if (ftp_login($ftp_conn, $ftp_user, $ftp_pass)) {
            $result = "Connexion réussie via FTPS";
            ftp_pasv($ftp_conn, true);
    
            if (ftp_put($ftp_conn, $remote_file, $local_file, FTP_BINARY)) {
                $result = "Fichier envoyé avec succès à $remote_file";
            } else {
                $result = "Erreur lors de l'envoi du fichier";
            }
        } else {
            $result = "Échec de la connexion FTPS";
        }

        $post = [
            'nom' => $_POST['nom'],
            'image_url' => $image_url,
            'description' => $_POST['description'],
            'ville' => $_POST['ville'],
            'id_utilisateur' => null
        ];

    } else {
        $result = "Erreur lors du téléchargement du fichier : " . $image_upload['error'];
    }

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
}

$template = 'views/pages/postLostCat.php';