<?php


namespace App\Controllers;

use App\Core\App;

class PagesController {

    public function home() {


        $users = App::get('database')->selectAll('users');

        return view('index', compact('users'));

    }
}