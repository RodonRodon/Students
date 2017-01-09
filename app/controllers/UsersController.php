<?php


namespace App\Controllers;

use App\Core\App;

class UsersController {

    public function index() {

        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function store() {

        App::get('database')->insert('users', [

            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'gender' => $_POST['gender'],
            'groups' => $_POST['group'],
            'email' => $_POST['email'],
            'birthdate' => $_POST['birthdate'],
            'exam' => $_POST['exam'],
            'local' => $_POST['local']


        ]);

        cookieSet("name", $_POST['name'], time() + 99999);

        return redirect('users');
    }
}