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
    // creo 2 variabili
    $page_title = 'Welcome to Laravel';
    $subtitle = 'php framework';
    return view('welcome', compact('page_title', 'subtitle',));
    
});

Route::get('/home', function () {
    $data =[
        'page_title' =>'Home Page',
        'subtitle' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quam fuga, adipisci beatae excepturi ab sit quia ratione laboriosam corporis
        expedita fugiat velit dolore libero nemo accusamus? Dolorum temporibus
        corporis aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quam fuga, adipisci beatae excepturi ab sit quia ratione laboriosam corporis
        expedita fugiat velit dolore libero nemo accusamus? Dolorum temporibus
        corporis aut.',
        'services' => [
            'payments',
            'banking support',
            'mortage',
            'car loan',
        ],
        'Call directly' => []
    ];
    return view('home',$data);
})->name('home');

Route::get('/about', function () {
    $data =[
        'page_title' =>'About Page',
        'subtitle' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quam fuga, adipisci beatae excepturi ab sit quia ratione laboriosam corporis
        expedita fugiat velit dolore libero nemo accusamus? Dolorum temporibus
        corporis aut.',
        'services' => [
            'payments',
            'banking support',
            'mortage',
            'car loan',
        ],
        'Call directly' => []
    ];
    return view('about',$data);
})->name('about');

Route::get('/info', function () {
    $data =[
        'page_title' =>'Info Page',
        'subtitle' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quam fuga, adipisci beatae excepturi ab sit quia ratione laboriosam corporis
        expedita fugiat velit dolore libero nemo accusamus? Dolorum temporibus
        corporis aut.',
        'services' => [
            'payments',
            'banking support',
            'mortage',
            'car loan',
        ],
        'Call directly' => []
    ];
    return view('info',$data);
})->name('info');

Route::get('/courses', function () {
    $data =[
        'page_title' =>'Courses Page',
        'subtitle' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quam fuga, adipisci beatae excepturi ab sit quia ratione laboriosam corporis
        expedita fugiat velit dolore libero nemo accusamus? Dolorum temporibus
        corporis aut.',
        'services' => [
            'payments',
            'banking support',
            'mortage',
            'car loan',
        ],
        'Call directly' => []
    ];
    return view('courses',$data);
})->name('courses');