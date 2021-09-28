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

Route::get('/', 'MainController@index');
Route::get('/slider',  'MainController@index');
Route::get('/about-us',  'MainController@index');
Route::get('/services',  'MainController@index');
Route::get('/team',  'MainController@index');
Route::get('/portofolio',  'MainController@index');
Route::get('/client',  'MainController@index');
Route::get('/testimonial',  'MainController@index');
    

Route::group(["middleware" => ["auth"]], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    // slider
    Route::get('/slider',           'SliderController@index')->name("admin.slider");
    Route::post('/slider',          'SliderController@store')->name("admin.slider-post");
    Route::get('/slider/create',    'SliderController@create')->name("admin.slider-create");
    Route::put('/slider/{id}',      'SliderController@update')->name("admin.slider-update");
    Route::get('/slider/edit/{id}', 'SliderController@edit')->name("admin.slider-edit");
    Route::delete('/slider/{id}',   'SliderController@destroy')->name("admin.slider-delete");

    // services
    Route::get('/services',           'ServicesController@index')->name("admin.services");
    Route::post('/services',          'ServicesController@store')->name("admin.services-post");
    Route::get('/services/create',    'ServicesController@create')->name("admin.services-create");
    Route::put('/services/{id}',      'ServicesController@update')->name("admin.services-update");
    Route::get('/services/edit/{id}', 'ServicesController@edit')->name("admin.services-edit");
    Route::delete('/services/{id}',   'ServicesController@destroy')->name("admin.services-delete");

    // portofolio
    Route::get('/portofolio',           'PortofolioController@index')->name("admin.portofolio");
    Route::post('/portofolio',          'PortofolioController@store')->name("admin.portofolio-post");
    Route::get('/portofolio/create',    'PortofolioController@create')->name("admin.portofolio-create");
    Route::put('/portofolio/{id}',      'PortofolioController@update')->name("admin.portofolio-update");
    Route::get('/portofolio/edit/{id}', 'PortofolioController@edit')->name("admin.portofolio-edit");
    Route::delete('/portofolio/{id}',   'PortofolioController@destroy')->name("admin.portofolio-delete");


    // portofolio
    Route::get('/product',           'ProductController@index')->name("admin.product");
    Route::post('/product',          'ProductController@store')->name("admin.product-post");
    Route::get('/product/create',    'ProductController@create')->name("admin.product-create");
    Route::put('/product/{id}',      'ProductController@update')->name("admin.product-update");
    Route::get('/product/edit/{id}', 'ProductController@edit')->name("admin.product-edit");
    Route::delete('/product/{id}',   'ProductController@destroy')->name("admin.product-delete");


    // contact us
    // Route::get('/contact-us', 'ContactUsController@index')->name("admin.contact-us");


    // about us
    Route::get('/about-us',         'AboutUsController@index')->name("admin.about-us");
    Route::get('/about-us/create',  'AboutUsController@create')->name("admin.about-us.create");
    Route::post('/about-us',        'AboutUsController@store')->name("admin.about-us.post");


    // team
    Route::get('/team',           'TeamController@index')->name("admin.team");
    Route::post('/team',          'TeamController@store')->name("admin.team-post");
    Route::get('/team/create',    'TeamController@create')->name("admin.team-create");
    Route::put('/team/{id}',      'TeamController@update')->name("admin.team-update");
    Route::get('/team/edit/{id}', 'TeamController@edit')->name("admin.team-edit");
    Route::delete('/team/{id}',   'TeamController@destroy')->name("admin.team-delete");

    //tetimonial
    Route::get('/testimonial',           'TestimonialController@index')->name("admin.testimonial");
    Route::post('/testimonial',          'TestimonialController@store')->name("admin.testimonial-post");
    Route::get('/testimonial/create',    'TestimonialController@create')->name("admin.testimonial-create");
    Route::put('/testimonial/{id}',      'TestimonialController@update')->name("admin.testimonial-update");
    Route::get('/testimonial/edit/{id}', 'TestimonialController@edit')->name("admin.testimonial-edit");
    Route::delete('/testimonial/{id}',   'TestimonialController@destroy')->name("admin.testimonial-delete");

    // application
    Route::get('/application',           'ApplicationController@index')->name("admin.application");
    Route::put('/application/{id}',      'ApplicationController@update')->name("admin.application-update");
    Route::get('/application/edit/{id}', 'ApplicationController@edit')->name("admin.application-edit");
    Route::delete('/application/{id}',   'ApplicationController@destroy')->name("admin.application-delete");

    
    // client
    Route::get('/client',           'ClientController@index')->name("admin.client");
    Route::post('/client',          'ClientController@store')->name("admin.client-post");
    Route::get('/client/create',    'ClientController@create')->name("admin.client-create");
    Route::put('/client/{id}',      'ClientController@update')->name("admin.client-update");
    Route::get('/client/edit/{id}', 'ClientController@edit')->name("admin.client-edit");
    Route::delete('/client/{id}',   'ClientController@destroy')->name("admin.client-delete");

});

Auth::routes();

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});