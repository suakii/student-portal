<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function(){
    return "Hello Laravel 11";
});

Route::get('/hello-view', function(){
    return view('hello');
});


Route::get('/hello-data', function(){
    return view('hello', [
        'school' => '경기과학고',
        'year' => 2025,
    ]);
});

Route::get('/students/{id}', function ($id) {
    return "학생 ID: {$id}";
})->whereNumber('id');