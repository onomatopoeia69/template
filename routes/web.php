<?php 

use App\Controllers\UserController;
use FastRoute\RouteCollector;

$r->get('/',[UserController::class,'index']);



    

