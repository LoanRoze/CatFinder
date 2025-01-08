<?php

require_once('config/routes.php');

$availableRoutesName = array_keys(AVAILABLE_ROUTES);

if (isset($_GET['page']) && in_array($_GET['page'], $availableRoutesName, true)) {
    $controller = AVAILABLE_ROUTES[$_GET['page']]['template'];
    $seo = AVAILABLE_ROUTES[$_GET['page']]['seo'];
    $styles = AVAILABLE_ROUTES[$_GET['page']]['style'];
    $scripts = AVAILABLE_ROUTES[$_GET['page']]['scripts'];
} else {
    $controller = DEFAULT_ROUTE['template'];
    $seo = DEFAULT_ROUTE['seo'];
    $styles = DEFAULT_ROUTE['style'];
    $scripts = DEFAULT_ROUTE['scripts'];
}

require('controllers/' . $controller);
