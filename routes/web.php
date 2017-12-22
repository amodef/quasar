<?php

use App\Project;

Route::view('/', 'index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects', 'ProjectController@index');

Route::get('/projects/create', 'ProjectController@create');

Route::post('/projects', 'ProjectController@store');

Route::get('/projects/{project}', 'ProjectController@show')->name('project');

Route::post('/projects/{project}/addMember', 'ProjectController@addMember');

Route::post('/projects/{project}/removeMember', 'ProjectController@removeMember');

Route::resources([
    'users' => 'UserController',
    'organisations' => 'OrganisationController'
]);
Auth::routes();

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/login', 'LoginController@auth');