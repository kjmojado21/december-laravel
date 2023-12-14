<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello-world',function (){
    return "IM THE LARAVEL MASTER";
});

Route::get('/hello/user/{id}/{username}',function ($id, $username) {
    return "hello user $id <br> username: $username";
});

// using methods from postController
Route::get('/index',[PostController::class,'index']);
Route::get('/post/{id}/{username}',[PostController::class,'viewPost']);

// methods using controller with views
Route::get('/viewAllPosts',[PostController::class,'viewAllPosts']);
Route::get('/viewUserPost/{id}/{username}',[PostController::class,'viewUserPost']);

