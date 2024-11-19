<?php
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../app/models/UserModel.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

$router = new Router();
$router->handleRequest();
?>
