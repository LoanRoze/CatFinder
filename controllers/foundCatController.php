<?php
require('models/articleManager.php');
$AllFoundPosts = getArticles("POSTFoundCat");


$template = 'views/pages/foundCat.php';