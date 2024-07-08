<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SVController;
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

Route::get('/test', function () {
    echo 'xin chao';
});

Route::get('/list-user', [UserController::class, 'showUser']);

Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);

Route::get('/update-user', [UserController::class, 'updateUser']);

Route::get('/thong-tin-sv', [SVController::class, 'thongTinSv']);

Route::get('/add-user', [UserController::class, 'addUser'] );

Route::group(['prefix'=>'user', 'as' => 'user.'],function(){
    Route::get('/list-user', [UserController::class, 'listUser'] )->name('list');
    Route::get('/add-user', [UserController::class, 'addUser'] );
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'] );

    Route::post('/add-user', [UserController::class, 'add_User'] )->name('add_User');
    Route::post('/update-user/{id}', [UserController::class, 'update_User'] )->name('update_User');
    Route::get('/del-user/{id}', [UserController::class, 'del_User'] );
});