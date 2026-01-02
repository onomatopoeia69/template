<?php 


/** 
      i use fastRoute for routing so make sure that the variable of the object are
      ($r) for accessibility of the other methods. 

      For documentation see: https://github.com/nikic/FastRoute?tab=readme-ov-file

**/

use App\Controllers\UserController;
use FastRoute\RouteCollector;


    $r->get('/',[UserController::class,'index']);
    



    

