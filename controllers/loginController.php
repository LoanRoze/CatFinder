<?php
session_start();
require_once('./models/loginManager.php');
require_once('./services/response/response.php');

if (
    !empty($_POST["nom"]) &&
    !empty($_POST["password"]) 
) {
    $userID = checkUser($_POST["nom"], $_POST["password"]);

    if (
        $userID != false
    ) {
        sessionInsert(getUser($userID));
        echo "<script defer>
        setTimeout( ()=>{
            showToastSuccess('Vous êtes connecté !')
        }, 100)
        </script>";
        redirect('index.php');
    } else {
        echo "<script defer>
                setTimeout( ()=>{
                    showToastError('Informations Incorrectes')
                }, 100)
            </script>";
    }
}

$template = 'views/pages/login.php';