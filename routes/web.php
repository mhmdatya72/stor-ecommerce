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

// Route::get('/mo', function () {
    Route::get('/', function () {
        return view('pages/welcome');
    })->name('home');

//     return view('mo');
// });
Route::get('/mo/{id}', function ($id) {
    $m=[
'1'=>"Mohamed",
'2'=>"Ahmed",
'3'=>"Amer",
'4'=>"Alaa"
    ];
    return view("pages/mo",[
       'the_id'=>$m[$id]
    ]);
});

Route::view('about-me',"pages/about",[
    'name' => "about-me"

])->name('about');
Route::view('contant-me',"pages/contant",[
    'name' => "contant-me"

])->name('con');

