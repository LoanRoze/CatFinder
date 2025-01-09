<?php
require('models/articleManager.php');
$AllFoundPosts = getLastFoundCats(100);

$template = 'views/pages/foundCat.php';