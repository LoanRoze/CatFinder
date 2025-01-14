<?php

function importImageOnServer($image, $ftp_host, $ftp_user, $ftp_pass, $cattable)
{

    if ($image['error'] === UPLOAD_ERR_OK) {
        $local_file = $image['tmp_name'];

        if (count(getLastFoundCats(1)) == 0) {
            $post_id = 1;
        } else {
            $post_id = getLastFoundCats(1)[0]['id'] + 1;
        }
        $remote_file = '/web/nightlanclub/webfolder/' . $cattable . '/' . $post_id;
        $image_url = "http://nightcraft.fr/webfolder/" . $cattable . "/" . $post_id;

        $ftp_conn = ftp_ssl_connect($ftp_host) or die("Impossible de se connecter à $ftp_host via FTPS");

        if (ftp_login($ftp_conn, $ftp_user, $ftp_pass)) {
            ftp_pasv($ftp_conn, true);

            if (ftp_put($ftp_conn, $remote_file, $local_file, FTP_BINARY)) {
                $isImageSent = true;
            } else {
                $isImageSent = false;
            }
        } else {
            $isImageSent = false;
        }


    } else {
        $image_url = 'none';
        $isImageSent = false;
    }
    $result = [
        'image_url' => $image_url,
        'isImageSent' => $isImageSent,
    ];
    return $result;
}