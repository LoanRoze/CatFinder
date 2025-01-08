<?php
require('models/articleManager.php');
$AllLostPosts = getArticles("POSTLostCat");


$template = 'views/pages/lostCat.php';