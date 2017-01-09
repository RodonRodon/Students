<?php


$router->get('', 'PagesController@home');


$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');