<?php

require_once __DIR__ . '/../app/bootstrap.php';

use App\Core\Router;
use App\Core\View;


// for the view templating
View::init();

// for the routing
$router = new Router();
$router->dispatch();



