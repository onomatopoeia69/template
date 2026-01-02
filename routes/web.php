<?php 


/** 
      i use fastRoute for routing so make sure that the variable of the object are
      ($r) for accessibility of the other methods. 

      For documentation see: https://github.com/nikic/FastRoute?tab=readme-ov-file

**/

use App\Controllers\UserController;
use FastRoute\RouteCollector;


    // closure calling

    $r->addRoute('GET','/test',[UserController::class,'index']);

    
    // method calling

    $r->addGroup('/admin', function (RouteCollector $r) {
    $r->addRoute('GET','/index',[UserController::class,'index']);
    $r->addRoute('GET','/show/{id:\d+}',[UserController::class,'show']);
});

    

