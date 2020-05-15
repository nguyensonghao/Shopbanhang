<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.layout');
});

Route::prefix('admin')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('/add', 'Admin\Category_Product_Controller@add_view');
        Route::get('/list', 'Admin\Category_Product_Controller@list_view');
        Route::get('/edit', 'Admin\Category_Product_Controller@edit_view');
        Route::post('/add', 'Admin\Category_Product_Controller@add_action');
        Route::delete('/delete/:id', 'Admin\Category_Product_Controller@delete_action');
    });
});
