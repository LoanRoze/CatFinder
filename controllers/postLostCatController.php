<?php

require_once('./models/articleManager.php');

if (
    !empty($_POST['nom']) &&
    !empty($_POST['description']) &&
    !empty($_POST['ville']) &&
    !empty($_FILES['image'])
) {
    var_dump($_POST);
    var_dump($_FILES);

    $ftp_host = '192.168.1.118'; // Adresse IP ou nom d'hôte du serveur FTP
    $ftp_user = 'rapido'; // Nom d'utilisateur FTP
    $ftp_pass = '(Ek.9KO}';    // Mot de passe FTP

    $image_upload = $_FILES['image'];


    // Chemin local et distant du fichier
    if ($image_upload['error'] === UPLOAD_ERR_OK) {
        $post_id = getLastLostCats(1)[0]['id'] + 1;
        var_dump($post_id);
        $local_file = $image_upload['tmp_name']; // Chemin temporaire du fichier sur le serveur
        $remote_file = '/web/nightlanclub/webfolder/uploads/' . $post_id;
        $image_url = "http://nightcraft.fr/webfolder/uploads/" . $post_id;
        // Connexion sécurisée au serveur FTP
        $ftp_conn = ftp_ssl_connect($ftp_host) or die("Impossible de se connecter à $ftp_host via FTPS");
    
        // Authentification avec les identifiants
        if (ftp_login($ftp_conn, $ftp_user, $ftp_pass)) {
            echo "Connexion réussie via FTPS.<br>";
            ftp_pasv($ftp_conn, true); // Activer le mode passif (recommandé pour FTPS)
    
            // Envoyer le fichier
            if (ftp_put($ftp_conn, $remote_file, $local_file, FTP_BINARY)) {
                echo "Fichier envoyé avec succès à $remote_file.<br>";
            } else {
                echo "Erreur lors de l'envoi du fichier.<br>";
            }
        } else {
            echo "Échec de la connexion FTPS.<br>";
        }
    
    } else {
        echo "Erreur lors du téléchargement du fichier : " . $image_upload['error'] . "<br>";
    }
    var_dump($image_url);


    $post = [
        'nom' => $_POST['nom'],
        'image_url' => $image_url,
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