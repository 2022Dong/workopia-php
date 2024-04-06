<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();
require '../helpers.php';
//inspectAndDie(session_status());

//require '../views/home.view.php';
//require basePath('views/home.view.php');

//require loadView('home');

/*  Error Code
$routes =
    [
        '/' => 'controllers/home.php',
        'listings' => 'controllers/listings/index.php',
        'listings/create' => 'controllers/listings/create.php',
        '404' => 'controllers/error/404.php'
    ];
*/



//inspectAndDie($uri);  // need to change the root folder in Laragon.

//inspect($uri);
//inspect($method);

//require basePath('Framework/Router.php');
//require basePath('Framework/Database.php');



$router = new Router(); // Instatiate the router

$routes = require basePath('routes.php'); // Get routes

// Get current URI and HTTP method
//$uri = $_SERVER['REQUEST_URI'];
//inspectAndDie($uri);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//inspectAndDie($uri);

// Route the request
$router->route($uri);
