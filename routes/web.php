<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

// Route::get('/thong-tin-sv', [SVController::class, 'thongTinSv']);

Route::get('/add-user', [UserController::class, 'addUser'] );

Route::group(['prefix'=>'product', 'as' => 'product.'],function(){
    Route::get('/list-product', [ProductController::class, 'listProduct'] )->name('list');

    Route::get('/add-product', [ProductController::class, 'addProduct'] );
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'] );

    Route::post('/add-product', [ProductController::class, 'add_Product'] )->name('add_Product');
    Route::post('/update-product/{id}', [ProductController::class, 'update_Product'] )->name('update_Product');
    Route::get('/del-product/{id}', [ProductController::class, 'del_Product'] );

    Route::post('/find-product', [ProductController::class, 'find_Product'] )->name('find_Product');
});


Route::group(['prefix'=>'users', 'as' => 'users.'],function(){
    Route::get('/list-user', [UserController::class, 'listUser'] )->name('list');
    Route::get('/add-user', [UserController::class, 'addUser'] );
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'] );

    Route::post('/add-user', [UserController::class, 'add_User'] )->name('add_User');
    Route::post('/update-user/{id}', [UserController::class, 'update_User'] )->name('update_User');
    Route::get('/del-user/{id}', [UserController::class, 'del_User'] );
});