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

        //Impacts
        Route::group(['namespace'=>'Impact'],function (){
            Route::get('impacts','ImpactsController@impacts')->name('get.impacts');
            Route::get('info-impact/{id}','ImpactsController@infoImpacts')->name('get.impact.info');
            Route::get('add-impact','ImpactsController@addImpact')->name('add.impact');
            Route::post('store-impact','ImpactsController@storeImpact')->name('store.impact');
            Route::get('edit-impact/{id}','ImpactsController@editImpact')->name('edit.impact');
            Route::post('update-impact/{id}','ImpactsController@updateImpact')->name('update.impact');
            Route::post('update-impact-status','ImpactsController@updatesImpactStatus')->name('update.impact.status');
            Route::get('delete-impact/{id}','ImpactsController@deleteImpact')->name('delete.impact'); //delete impact
        });

        //Categories
        Route::group(['namespace'=>'Category'],function (){
            Route::get('categories','CategoriesController@categories')->name('get.categories');
            Route::get('add-category','CategoriesController@addCategory')->name('add.category');
            Route::post('store-category','CategoriesController@storeCategory')->name('store.category');
            Route::get('edit-category/{id}','CategoriesController@editCategory')->name('edit.category');
            Route::post('update-category/{id}','CategoriesController@updateCategory')->name('update.category');
            Route::post('update-category-status','CategoriesController@updatesCategoryStatus')->name('update.category.status');
            Route::get('delete-category/{id}','CategoriesController@deleteCategory')->name('delete.category'); //delete category
        });

        //Donors
        Route::group(['namespace'=>'Donor'],function (){
            Route::get('donors','DonorsController@donors')->name('get.donors');
            Route::get('add-donor','DonorsController@addDonor')->name('add.donor');
            Route::post('store-donor','DonorsController@storeDonor')->name('store.donor');
            Route::get('edit-donor/{id}','DonorsController@editDonor')->name('edit.donor');
            Route::post('update-donor/{id}','DonorsController@updateDonor')->name('update.donor');
            Route::post('update-donor-status','DonorsController@updatesDonorStatus')->name('update.donor.status');
            Route::get('delete-donor/{id}','DonorsController@deleteDonor')->name('delete.donor'); //delete donor
        });

        //Projects
        Route::group(['namespace'=>'Project'],function (){
            Route::get('projects','ProjectsController@projects')->name('get.projects');
            Route::get('add-project','ProjectsController@addProject')->name('add.project');
            Route::post('store-project','ProjectsController@storeProject')->name('store.project');
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



