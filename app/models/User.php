<?php 

    namespace App\Models;
    
    use App\Core\Database;
   
    class User {



        public static function all()
        {   
            $pdo = Database::connect(); 
            $stmt = $pdo->prepare("SELECT * FROM user_tbl");
            $stmt->execute();
            return $stmt->fetchAll();  
        }

        public static function find(string $userId){
            $pdo = Database::connect(); 
            $stmt = $pdo->prepare("SELECT * FROM user_tbl WHERE user_id = :user_id");
            $stmt->execute(['user_id' => $userId]);
            return $stmt->fetchAll();
        }

     

    }
