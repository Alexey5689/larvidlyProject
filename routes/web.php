<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestControl;
//путь к контроллеру (обязательно)
//use App\Http\Controllers\TestLaraBook;
use App\Http\Controllers\TopicController;

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
Route::get('index', [TestControl::class, 'index']);

//Route::get('/book/', [TestLaraBook::class, 'master']);
Route::resource('topic', TopicController::class);



