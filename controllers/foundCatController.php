<?php
require('models/articleManager.php');
$AllFoundPosts = getLastFoundCats(5);

$template = 'views/pages/foundCat.php';