<?php
require('./models/articleManager.php');
require('./models/loginManager.php');

$AllLostPosts = getLostCats();

$template = 'views/pages/lostCat.php';