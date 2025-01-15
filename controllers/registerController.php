<?php
session_start();
require_once('./models/loginManager.php');
require_once('./services/response/response.php');
require_once('./models/toastManager.php');


if (
    !empty($_POST["nom"]) &&
    !empty($_POST["password"]) 
) {
    $userID = checkUser($_POST["nom"], $_POST["password"]);

    if (
        $userID != false
    ) {
        sessionInsert(getUser($userID));
        toastSuccess('Vous êtes connecté !');
    } else {
        toastError('Informations Incorrectes');
    }
}

$template = 'views/pages/register.php';