<?php
require('models/articleManager.php');
$AllLostPosts = getLastLostCats(6);

$template = 'views/pages/lostCat.php';