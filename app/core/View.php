<?php 

    namespace App\Core;

    class View {

        public static function render(string $uri,array $data = [])
        {

            extract($data);
            require __DIR__ . '/../Views/' . $uri . '.php';
        }


    }
