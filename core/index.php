<?php

namespace App;

use App\Router;

define('WEBROOT', dirname(__DIR__));

define('TARGET_PATH', WEBROOT.'/contents');

/**
 * Mise en place de notre routeur.
 */
require '../vendor/autoload.php';

$router = new Router(TARGET_PATH);
$router
    ->get('/', 'home', 'home')
    ->get('/contact', 'contact', 'contact')
    ->run();
