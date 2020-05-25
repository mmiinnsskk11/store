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


Auth::routes();
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/subcategories', 'Admin\SubcategoryController');
    Route::resource('/catalog', 'Admin\CatalogController');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/marketplace', 'MarketplaceController@index')->name('marketplace');
Route::get('/marketplace/{name}', 'MarketplaceController@show')->name('marketplace.show');
Route::get('/about-as', 'HomeController@aboutAs')->name('about-as');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/subscribe', 'FeedbackController@subscribe')->name('subscribe');
