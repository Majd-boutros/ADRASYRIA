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

//Route::get('/', function () {
//    return view('index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin Routes
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){

    //admin authentication
    Route::group(['namespace' => 'Auth'],function (){
        Route::get('login','adminsauthenticationcontroller@login')->name('admin.login');
        Route::post('login','adminsauthenticationcontroller@postlogin')->name('admin.postLogin');
        Route::post('logout','adminsauthenticationcontroller@logout')->middleware('admin','auth:admin')->name('admin.logout');
    });

    //Admin Details
    Route::group(['middleware' =>['auth:admin'],'admin'],function (){
        Route::get('/','admincontroller@dashboard')->name('admin.dashboard');
        Route::get('settings','admincontroller@settings')->name('admin.settings');
        Route::post('check-current-password','admincontroller@checkcurrentpassword')->name('admin.check.currentpassword');
        Route::post('update-password','admincontroller@updatepassword')->name('admin.update.password');
        Route::get('update-admin-details','admincontroller@getupdateadmindetails')->name('get.updateAdminDetails');
        Route::post('update-admin-details','admincontroller@postupdateadmindetails')->name('post.updateAdminDetails');


        //Carousel
        Route::group(['namespace'=>'Carousel'],function (){
            Route::get('carousel','CarouselController@carouselImages')->name('get.carousel.images');
            Route::get('add-image-carousel','CarouselController@AddImagesCarousel')->name('get.add-images-carousel');
            Route::post('save-image-carousel','CarouselController@saveImagesCarousel')->name('post.save-images-carousel');
            Route::post('update-image-carousel-status','CarouselController@updatesCarouselImageStatus')->name('update.carousel.image.status');
            Route::get('edit-image-carousel/{id}','CarouselController@EditImagesCarousel')->name('get.edit-images-carousel');
            Route::post('update-image-carousel/{id}','CarouselController@UpdateImagesCarousel')->name('get.update-images-carousel');
            Route::get('delete-image-carousel/{id}','CarouselController@DeleteImagesCarousel')->name('get.delete-images-carousel');
        });

    });

});


//front routes
Route::group(['namespace'=>'Front'],function (){
    Route::get('/','frontController@index')->name('get.index');
    Route::get('contactUs','frontController@contactUs')->name('get.contactUs');
    Route::post('receive-email','MailController@sendEmail')->name('receive.email');
    Route::get('covid19','frontController@covid19')->name('get.covid19');

});



