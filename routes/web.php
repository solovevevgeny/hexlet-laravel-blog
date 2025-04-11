<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function ()  {

    $team = [
        ['name' => 'Hodor', 'position' => 'programmer'],
        ['name' => 'Joker', 'position' => 'CEO'],
        ['name' => 'Elvis', 'position' => 'CTO'],
    ];

    // BEGIN (write your solution here)
    return view("about",['team' => $team]);
    // END
});
