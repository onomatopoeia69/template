<?php 

use App\Controllers\UserController;
use FastRoute\RouteCollector;



$r->get('/',[UserController::class,'index']);

$r->get('/test/{id:\d+}',[UserController::class,'show']);
    



    

