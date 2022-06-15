<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LaravelController;

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
    return view('welcome');
});

//Route::get('/hello', function () {
//    return view('hello', [
//        'name' => 'Sasha',
//        'my_skills' => [
//            'html', 'css', 'vue'
//        ]
//    ]);
//});
Route::get('/hello', [PagesController::class, 'helloPage']);

Route::get('/test', [PagesController::class, 'testPage']);

Route::get('/laravel', [LaravelController::class, 'Laravel']);

