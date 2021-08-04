<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
Route::get('/stores/create',[PostsController::class,'storesCreate']);
Route::post('/storesCreate',[PostsController::class,'createStore']);
Route::get('/stores/update',[PostsController::class,'storesUpdate']);
Route::put('/storesUpdate',[PostsController::class,'updateStore']);
Route::get('/stores/delete',[PostsController::class,'storesDelete']);
Route::delete('/storesDelete',[PostsController::class,'deleteStore']);
Route::get('/storesRead',[PostsController::class,'readStore']);
Route::get('/stores/read',[PostsController::class,'storesRead']);
Route::get('/product/create',[PostsController::class,'productCreate']);
Route::post('/productCreate',[PostsController::class,'createProduct']);
Route::get('/product/read',[PostsController::class,'productRead']);
Route::get('/readProducts',[PostsController::class,'readProduct']);
Route::get('product/update',[PostsController::class,'productUpdate']);
Route::put('/productUpdate',[PostsController::class,'updateProduct']);
Route::get('/product/delete',[PostsController::class,'deleteProduct']);
Route::post('/productDelete',[PostsController::class,'productDelete']);






