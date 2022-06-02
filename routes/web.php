<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckUser;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LuisController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/test",function(){
    return view("test.index");
});

Route::get("posts",[PostController::class,"index"])->name("posts.index");
Route::get("posts/create",[PostController::class,"create"])->name("posts.create");
Route::post("posts",[PostController::class,"store"])->name("posts.new");

Route::middleware([checkUser::class])->group(function(){
    Route::resource('posts', PostController::class)->except(["index","create","store"]);
});

Route::resource("users",UserController::class);

Route::get ("luis",[LuisController::class,"index"])->name("luis.index");