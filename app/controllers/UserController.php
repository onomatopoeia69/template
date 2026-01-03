<?php 
    
    namespace App\Controllers;

    use App\Models\User;
    use App\Core\View;

    class UserController {

        public function index()
        {  
            //show the homepage
            View::render('home',[
                'title_name' => $_ENV['APP_NAME'],
            ]);
        }


        public function show($id)
        {
            $user = User::find($id);

            View::render('test',[
                'users' => $user,
            ]);
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