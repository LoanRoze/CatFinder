<?php
require_once('./models/articleManager.php');
require_once('./models/loginManager.php');

if(!checkIfLoggedInfos()) {
    redirect('');
}

$AllLostPosts = getLostCatOfUser($_SESSION['id']);
$AllFoundPosts = getFoundCatOfUser($_SESSION['id']);

$template = 'views/pages/yourposts.php';