<?php
require('./models/articleManager.php');
require('./models/loginManager.php');

$AllLostPosts = getLastLostCats(6);

$template = 'views/pages/lostCat.php';