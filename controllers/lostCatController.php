<?php
require('models/articleManager.php');
$AllLostPosts = getLastLostCats(5);


$template = 'views/pages/lostCat.php';