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
//login
Route::get('admin/login', 'UserController@loginView');
Route::post('admin/login', 'UserController@login');
Route::get('admin/logout', 'UserController@logout');
//back end
Route::group(['prefix' => 'admin', 'middleware' => 'admin.login'], function () {
    Route::get('/', "ContactController@index");

    Route::get('/dasboard', "DashBoardController@index")->name("dashboard");


    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'UserController@index')->name('user');
        Route::get('/edit/{id}', 'UserController@editView')->name('user.view_edit');
        Route::get('/add', 'UserController@addView')->name('user.view_add');
        Route::post('/save', 'UserController@save')->name('user.save');
        Route::get('/set/{action}/{id}', 'UserController@setActiveOrHighlights');
        Route::get('/delete/{id}', 'UserController@delete')->name('user.delete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('product');
        Route::get('/edit', 'ProductController@viewForm')->name('product.edit');
        Route::post('/save', 'ProductController@save')->name('product.save');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', 'ContactController@index')->name('contact');
        Route::get('/view', 'ContactController@view')->name('contact.view');
        Route::get('/delete/{id}', 'ContactController@delete')->name('contact.delete');
    });

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', 'SettingController@index')->name('setting');
        Route::post('/', 'SettingController@index')->name('setting.edit');
    });
});

//front end
Route::get('/', "TourController@index");
Route::get('/get-data-product', "TourController@getData")->name('getData');
Route::get('/get-list-product', "TourController@getList")->name('getList');
Route::post('/process-contact', "ContactController@processContact")->name('contact.send');
Route::get('/change-language/{language}', "TourController@changLanguage")->name("changeLanguage");
