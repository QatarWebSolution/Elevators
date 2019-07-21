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
	
	Route::get('news','MediaController@news')->name('admin.news');
    Route::post('news/save','MediaController@newsSave')->name('admin.newsSave');
    Route::get('news/delete/{id}','MediaController@newsDelete')->name('admin.newsDelete');

    Route::view('addTestimonials', 'backend.addTestimonials')->name('addTestimonials');
    Route::get('editTestimonials/{id}', 'TestimonialController@edit')->name('editTestimonials');
    Route::get('deleteTestimonials/{id}', 'TestimonialController@delete')->name('deleteTestimonials');
    Route::post('testimonials/save', 'TestimonialController@store')->name('saveTestimonials');
    Route::get('listTestimonials', 'TestimonialController@index')->name('listTestimonials');

    Route::get('imageGallery', 'GalleryController@imageGallery')->name('imageGallery');
    Route::post('addImage', 'GalleryController@addImage')->name('addImage');
    Route::get('deleteImage/{id}', 'GalleryController@deleteImage')->name('deleteImage');

    Route::get('videoGallery', 'GalleryController@videoGallery')->name('videoGallery');
    Route::post('addVideo', 'GalleryController@addVideo')->name('addVideo');
    Route::get('deleteVideo/{id}', 'GalleryController@deleteVideo')->name('deleteVideo');


    Route::get('/addSlider', 'TestimonialController@addSlider')->name('addSlider');
    Route::post('/saveSlider', 'TestimonialController@saveSlider')->name('saveSlider');
    Route::get('/listSlider', 'TestimonialController@listSlider')->name('listSlider');
    Route::get('/deleteSlider/{id}', 'TestimonialController@deleteSlider')->name('deleteSlider');

    Route::get('/addAbout', 'TestimonialController@addAbout')->name('addAbout');
    Route::post('/saveAbout', 'TestimonialController@saveAbout')->name('saveAbout');

});

Auth::routes();

Route::get('/', 'SiteController@index')->name('home1');
Route::get('/home', 'SiteController@index')->name('home');
Route::get('about', 'SiteController@about')->name('about');
Route::get('services', 'SiteController@services')->name('services');
Route::get('image_gallery', 'SiteController@image_gallery')->name('image_gallery');
Route::get('video_gallery', 'SiteController@video_gallery')->name('video_gallery');
Route::get('contact', 'SiteController@contact')->name('contact');
Route::get('enquiry', 'SiteController@enquiry')->name('enquiry');
Route::post('enquirySave', 'SiteController@enquirySave')->name('enquirySave');


Route::get('/projects', 'SiteController@projects')->name('projects');
Route::get('/products/{id}', 'SiteController@products')->name('products');
Route::get('/project_details/{id}', 'SiteController@project_details')->name('project_details');
Route::get('/project_details/{id}', 'SiteController@project_details')->name('project_details');
Route::get('/product_details/{id}', 'SiteController@product_details')->name('product_details');



Route::get('language/{locale}', function ($locale)
{
    \Illuminate\Support\Facades\App::setLocale($locale);
    return redirect()->route('home1');
})->name('locale');
