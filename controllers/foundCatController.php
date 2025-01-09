<?php
require('models/articleManager.php');
$AllFoundPosts = getLastFoundCats(6);

$template = 'views/pages/foundCat.php';