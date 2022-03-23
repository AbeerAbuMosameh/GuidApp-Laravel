<?php
use App\Http\Controllers\Back\StoreController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\RateController;
use App\Http\Controllers\Front\FrontController;
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
Route::get('/', [FrontController::class,'welcome'])->name('Home');

Route::get('/welcome', function () {
    return view('Back.Welcome');
})->name('welcome');;

// Route::post('stores/create', 'App\Http\Controllers\Back\CategoryController@create');
// Route::post('stores/store', 'App\Http\Controllers\Back\CategoryController@store');
// Route::get('stores', 'App\Http\Controllers\Back\CategoryController@index');
// Route::get('stores/edit/{id}/', 'App\Http\Controllers\Back\CategoryController@edit');
// Route::post('stores/update/{id}', 'App\Http\Controllers\Back\CategoryController@update');
// Route::post('stores/delete/{id}', 'App\Http\Controllers\Back\CategoryController@destroy');
//artisan route:list
Route::resource('stores', StoreController::class);
Route::get('stores_rate', [StoreController::class,'storesRate'])->name('stores_rate');

// Route::post('categories/create', 'App\Http\Controllers\CategoryController@create');
// Route::post('categories/store', 'App\Http\Controllers\CategoryController@store');
// Route::get('categories', 'App\Http\Controllers\CategoryController@index');
// Route::get('categories/edit/{id}/', 'App\Http\Controllers\CategoryController@edit');
// Route::post('categories/update/{id}', 'App\Http\Controllers\CategoryController@update');
// Route::post('categories/delete/{id}', 'App\Http\Controllers\CategoryController@destroy');
//artisan route:list
Route::resource('categories', CategoryController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/add-rate','App\Http\Controllers\Back\RateController@addRating')->name('addRating');
Route::get('/search', 'App\Http\Controllers\Back\CategoryController@search')->name('search');
Route::get('allStores/{id}/{name}', 'App\Http\Controllers\Front\FrontController@result')->name('allstores');
