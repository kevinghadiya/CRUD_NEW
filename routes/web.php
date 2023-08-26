<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('home');

route::controller(UserController::class)->group(function(){

    route::get('/userpage', 'userpage' )->name('userPage');
    route::post('/user', 'addUser' )->name('userAdd');
    
    route::get('/', 'allUSer' )->name('allUser');

    route::get('/user/{id}', 'singleUser' )->name('singleUser');

    route::get('/delete/{id}', 'deleteUser' )->name('deleteUser');

    route::get('/updetpage/{id}', 'updetpage' )->name('updetPage');
    route::post('/updetUser/{id}', 'updetUser' )->name('updetUser');

}); 
