<?php

require_once("controllers/ProductController.php");

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
// define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$productController = new ProductController();

switch ($params[0]) {
    case 'home':
        $productController->showHome();
        break;

    default:
        echo "Error 404 - Page not fund";
        break;
}
