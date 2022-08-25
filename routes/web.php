<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');

    $data = [
        'comics' => $comics
    ];

    return view('home', $data);
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');
    $current_comic = [];
    foreach($comics as $comic) {
        if($comic['id'] == $id) {
            $current_comic = $comic;
        }
    }
    $data = [
        'current_comic' => $current_comic,
    ];
    return view('comic', $data);
})->name('comic');


