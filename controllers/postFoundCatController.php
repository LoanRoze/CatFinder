<?php

require_once('./models/articleManager.php');

if (
    !empty($_POST['description']) &&
    !empty($_POST['latitude']) &&
    !empty($_POST['longitude']) &&
    !empty($_FILES['image'])
) {

    $ftp_host = '192.168.1.118'; 
    $ftp_user = 'rapido'; 
    $ftp_pass = '(Ek.9KO}';

    $image_upload = $_FILES['image'];

    if ($image_upload['error'] === UPLOAD_ERR_OK) {
        $local_file = $image_upload['tmp_name'];

        if (count(getLastFoundCats(1)) == 0) {
            $post_id = 1;
        } else {
            $post_id = getLastFoundCats(1)[0]['id'] + 1;
        }

        $remote_file = '/web/nightlanclub/webfolder/foundCat/' . $post_id;
        $image_url = "http://nightcraft.fr/webfolder/foundCat/" . $post_id;

        $ftp_conn = ftp_ssl_connect($ftp_host) or die("Impossible de se connecter à $ftp_host via FTPS");
    
        if (ftp_login($ftp_conn, $ftp_user, $ftp_pass)) {
            ftp_pasv($ftp_conn, true);
    
            if (ftp_put($ftp_conn, $remote_file, $local_file, FTP_BINARY)) {
                $result = "Fichier envoyé avec succès";
                $isImageSent = true;
            } else {
                $result = "Erreur lors de l'envoi du fichier";
                $isImageSent = false;
            }
        } else {
            $result = "Échec de la connexion au serveur";
            $isImageSent = false;
        }

        
    } else {
        $result = "Erreur lors du téléchargement du fichier : " . $image_upload['error'];
        $image_url = 'none';
        $isImageSent = false;
    }
    
    if ($isImageSent) {
        $post = [
            'image_url' => $image_url,
            'description' => $_POST['description'],
            'longitude' => $_POST['longitude'],
            'latitude' => $_POST['latitude'],
            'id_utilisateur' => null
        ];
        $result = new_found_cat($post);
    }

    if ($result) {
        echo"<script defer>
                setTimeout( ()=>{
                    showToastSuccess('Annonce publiée !')
                }, 100)
            </script>";
    } else {
        echo"<script defer>
                setTimeout( ()=>{
                    showToastError(' Oups, il y a eu un problème ... ')
                }, 100)
            </script>";
    }
}

$template = 'views/pages/postFoundCat.php';

