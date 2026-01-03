<?php 
    
    namespace App\Controllers;

    use App\Models\User;
    use App\Core\View;

    class UserController {

        public function index()
        {  

            //show the homepage

            View::render('/home');
        }


        public function show()
        {

            // show one item 
        }


        public function create()
        {

            // show create form

        }

        public function store()
        {

            // save new data

        }

        public function edit()
        {

            // show the edit form

        }

        public function update()
        {

            // update data

        }

        public function destroy()
        {

            // delete data

        }

        

    }