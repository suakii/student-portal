<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Hello Routes
|--------------------------------------------------------------------------
*/
Route::get('/hello', [HelloController::class, 'hello']);
Route::get('/hello-view', [HelloController::class, 'view']);
Route::get('/hello-data', [HelloController::class, 'data']);


/*
Student Routes
*/
// 목록
Route::get('/students', [StudentController::class, 'index']);

//create는 {id}보다 위에!
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);

// 상세 (가장 아래)
Route::get('/students/{id}', [StudentController::class, 'show']);