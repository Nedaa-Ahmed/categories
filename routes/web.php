<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ContactController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;





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

Route::get('/contact', function () {
    return view('contact');
});

//Category route
Route::get('/category/all', 'App\Http\Controllers\CategoryController@AllCat')->name('AllCat');
Route::POST('/category/add', 'App\Http\Controllers\CategoryController@AddCat')->name('AddCat');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //getting all users are login
  $users =User::all();
  //$users= DB::table('users')->get();
    return view('dashboard',compact('users'));
})->name('dashboard');