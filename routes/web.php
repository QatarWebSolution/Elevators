<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth','prefix'=>'admin'], function () {

    Route::view('/', 'backend.addProjects')->name('addProjects');
    Route::view('addProjects', 'backend.addProjects')->name('addProjects');
    Route::get('editProjects/{id}', 'ProjectController@edit')->name('editProjects');
    Route::get('deleteProjects/{id}', 'ProjectController@delete')->name('deleteProjects');
    Route::post('addProjects/save', 'ProjectController@store')->name('addProjectsSave');
    Route::get('listProjects', 'ProjectController@index')->name('listProjects');

    Route::view('addProducts', 'backend.addProducts')->name('addProducts');
    Route::get('editProducts/{id}', 'ProductController@edit')->name('editProducts');
    Route::get('deleteProducts/{id}', 'ProductController@delete')->name('deleteProducts');
    Route::post('addProducts/save', 'ProductController@store')->name('addProductsSave');
    Route::get('listProducts', 'ProductController@index')->name('listProducts');

});

Auth::routes();
Route::get('/', 'SiteController@index')->name('home1');
Route::get('/home', 'SiteController@index')->name('home');
Route::get('/projects', 'SiteController@projects')->name('projects');
Route::get('/products/{id}', 'SiteController@products')->name('products');
Route::get('/project_details/{id}', 'SiteController@project_details')->name('project_details');
Route::get('/project_details/{id}', 'SiteController@project_details')->name('project_details');
Route::get('/product_details/{id}', 'SiteController@product_details')->name('product_details');
