<?php   
    
    namespace App\Core;
    
    use PDO;

    class Database {

        private static ?PDO $connection = null; 

        public static function connect()
        {

            if(self::$connection == null){

                $config = include __DIR__.'/../config/database.php';

             self::$connection = new PDO("{$config['driver']}:host={$config['host']};dbname={$config['db']};charset=utf8mb4",
                        $config['user'],
                        $config['pass'],
                [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        ]);              
            }
            
            return self::$connection;
        }


    }