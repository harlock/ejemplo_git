<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckUser;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LuisController;
use App\Http\Controllers\AdrianController;
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

Route::get('estrella', function () {
    return view('estrella/index');
});

Route::resource("users",UserController::class);

Route::get('/JDaniel', function () {
    return view('JDaniel.index');
});
Route::get("anabel",function(){
    return view("anabel.index");
});
    Route::middleware([checkUser::class])->group(function(){
    Route::resource('posts', PostController::class)->except(["index","create","store"]);


});


Route::get("adrian",[AdrianController::class,"index"])->name("adrian.index");


Route::get ("luis",[LuisController::class,"index"])->name("luis.index");

Route::get("/luis_kike",function(){
    return view("luis_kike.kike");
});;

Route::get( "/chavez", function() {
    return view("chavez.index");
});
Route::get("/mike",function(){
    return view("mike.inicio");
});
Route::get('/Efrain', function () {
    return view('Efrain.index');
});


Route::resource("users",UserController::class);

Route::get('JD', function (){
   return view('JD/index');
});

Route::get("/marco",function (){
    return view("marco.index");
});

Route::resource("users",UserController::class);


Route::get("/ale",function(){
    return view("ale.index");
});

Route::get('/pedro', function () {
    return view('pedro.index');
});

Route::get('evodio', function () {
    return view('JesusEvodio.index');
});
Route::get("/example_legna",function(){
    return view("example_legna.index");
});

Route::resource("users",UserController::class);
