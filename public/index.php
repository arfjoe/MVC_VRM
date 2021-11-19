<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Application;
use App\Controller\SiteController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'handleView']);
$app->router->get('/contact', [SiteController::class, 'handleView']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->run();
