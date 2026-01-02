<?php

// Folder Path

define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH',BASE_PATH.'/public');
define('APP_PATH', BASE_PATH . '/app');
define('CORE_PATH', APP_PATH . '/core');
define('CONFIG_PATH', APP_PATH . '/config');
define('VIEW_PATH', APP_PATH . '/views');

// autoloading 
require_once BASE_PATH . '/vendor/autoload.php'; 


// Environment Config
App\Core\Env::load('/../../.env');




