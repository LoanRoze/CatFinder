<?php
require('models/articleManager.php');
require_once('./models/mapPostsManager.php');

$AllFoundPosts = getFoundCats();

$template = 'views/pages/foundCat.php';