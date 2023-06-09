<?php

use App\Http\Controllers\ArtCraftController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/form-create',function(){return view('form.create');});
Route::get('edit/{id}',[ArtCraftController::class,'edit']);
Route::patch('update/{id}',[ArtCraftController::class,'update']);
Route::post('form-create',[ArtCraftController::class, 'create']);
Route::delete('form-delete/{id}',[ArtCraftController::class, 'destroy']);
Route::get('/form',[ArtCraftController::class,'index']);



