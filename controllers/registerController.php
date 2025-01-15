<?php
session_start();
require_once('./models/loginManager.php');
require_once('./services/response/response.php');
require_once('./models/toastManager.php');

if (checkIfLoggedInfos()) {
    redirect('index.php');
}

if (
    !empty($_POST["nom"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["num_phone"]) &&
    !empty($_POST["password"])
) {

    $domain = substr(strrchr($_POST['email'], "@"), 1);
    
    $isMailOk = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $isMailInDB = !getUserByEmail($_POST["email"]);

    if (
        ($isMailOk) &&
        ($isMailInDB)
    ) {
        $user = [
            "nom" => $_POST["nom"],
            "email" => $_POST["email"],
            "num_phone" => $_POST["num_phone"],
            "password" => $_POST["password"],
        ];
        new_user($user);
        
        sessionInsert(getUserByEmail($_POST['email']));
        redirectTimeoutWithSuccess('index.php?page=lostCat', 3000, 'Vous êtes connecté !');
    } else {
        toastError('Un problème est survenu');
    }
}

$template = 'views/pages/register.php';