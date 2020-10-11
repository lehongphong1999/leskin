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

//Frontend 
    Route::post('postlogin','Auth\LoginController@postlogin')->name('postlogin');
    Route::get('logout','Auth\LoginController@logout')->name('logout');
    Route::post('postregister','Auth\LoginController@register')->name('postregister');
    Route::post('postforgetpass','Auth\LoginController@postforgetpass')->name('postforgetpass');

    Route::get('index','FrontendController@index' )->name('index');

    Route::get('about','FrontendController@about' )->name('about');

    Route::get('sale','FrontendController@sale' )->name('sale');

    Route::get('service','FrontendController@service' )->name('service');

    Route::get('product','FrontendController@product' )->name('product');
    Route::post('search','FrontendController@search' )->name('search');

    Route::get('contact','FrontendController@contact' )->name('contact');
    Route::post('postcontact','FrontendController@postcontact' )->name('postcontact');


    Route::get('news','FrontendController@news' )->name('news');

    Route::get('userinfo','FrontendController@userinfo' )->name('userinfo');
    Route::post('postedituserinfo', 'FrontendController@postedituserinfo')->name('postedituserinfo');
    Route::post('postavataruserinfo', 'FrontendController@postavataruserinfo')->name('postavataruserinfo');

    Route::get('usersecurity','FrontendController@usersecurity' )->name('usersecurity');
    Route::post('usersecurity','FrontendController@postusersecurity' )->name('postusersecurity');

    Route::get('userhistory','FrontendController@userhistory' )->name('userhistory');

    Route::get('/', function () {
        return view('Admin.dashboard.index');
    });
       
Route::group(['prefix'=>'admin'],function(){

    // Admin Dashboard

    Route::get('/', 'AdminController@indexdashboard')->name('indexdashboard');

     // Admin Category

    Route::get('category', 'AdminController@indexcategory')->name('indexcategory');

    Route::get('addcategory', 'AdminController@addcategory')->name('addcategory');

    Route::post('postaddcategory', 'AdminController@postaddcategory')->name('postaddcategory');

    Route::get('editcategory','AdminController@editcategory')->name('editcategory');
    
    Route::post('posteditcategory','AdminController@posteditcategory')->name('posteditcategory');
    
    Route::get('deletecategory', 'AdminController@deletecatergory')->name('deletecategory');

     // Admin Product

     Route::get('product', 'AdminController@indexproduct')->name('indexproduct');

     Route::get('addproduct', 'AdminController@addproduct')->name('addproduct');

     Route::post('postaddproduct', 'AdminController@postaddproduct')->name('postaddproduct');

     Route::get('editproduct','AdminController@editproduct')->name('editproduct');
    
     Route::post('posteditproduct','AdminController@posteditproduct')->name('posteditproduct');
    
     Route::get('deleteproduct', 'AdminController@deleteproduct')->name('deleteproduct');


     //Admin Banner

     Route::get('banner', 'AdminController@indexbanner')->name('indexbanner');

     Route::get('addbanner', 'AdminController@addbanner')->name('addbanner');

     Route::post('postaddbanner', 'AdminController@postaddbanner')->name('postaddbanner');

     Route::get('editbanner','AdminController@editbanner')->name('editbanner');
    
     Route::post('posteditbanner','AdminController@posteditbanner')->name('posteditbanner');

     Route::get('deletebanner', 'AdminController@deletebanner')->name('deletebanner');


     //Admin Contact

     Route::get('contact', 'AdminController@indexcontact')->name('indexcontact');
     Route::get('send', 'AdminController@sendcontact')->name('sendcontact');
     Route::get('readmail', 'AdminController@readmailcontact')->name('readmailcontact');
     Route::get('deletemail', 'AdminController@deletemail')->name('deletemail');


     // Admin News

    Route::get('news', 'AdminController@indexnews')->name('indexnews');

    Route::get('addnews', 'AdminController@addnews')->name('addnews');

    Route::post('postaddnews', 'AdminController@postaddnews')->name('postaddnews');

    Route::get('editnews','AdminController@editnews')->name('editnews');
    
    Route::post('posteditnews','AdminController@posteditnews')->name('posteditnews');
    
    Route::get('deletenews', 'AdminController@deletenews')->name('deletenews');


    // Admin Intro

    Route::get('intro', 'AdminController@indexintro')->name('indexintro');

    Route::get('addintro', 'AdminController@addintro')->name('addintro');

    Route::post('postaddintro', 'AdminController@postaddintro')->name('postaddintro');

    Route::get('editintro','AdminController@editintro')->name('editintro');
    
    Route::post('posteditintro','AdminController@posteditintro')->name('posteditintro');
    
    Route::get('deleteintro', 'AdminController@deleteintro')->name('deleteintro');

    // Admin Coupon

    Route::get('coupon', 'AdminController@indexcoupon')->name('indexcoupon');

    Route::get('addcoupon', 'AdminController@addcoupon')->name('addcoupon');

    Route::post('postaddcoupon', 'AdminController@postaddcoupon')->name('postaddcoupon');

    Route::get('editcoupon','AdminController@editcoupon')->name('editcoupon');
    
    Route::post('posteditcoupon','AdminController@posteditcoupon')->name('posteditcoupon');
    
    Route::get('deletecoupon', 'AdminController@deletecoupon')->name('deletecoupon');

    // Admin News

    Route::get('newssale', 'AdminController@indexnewssale')->name('indexnewssale');

    Route::get('addnewssale', 'AdminController@addnewssale')->name('addnewssale');

    Route::post('postaddnewssale', 'AdminController@postaddnewssale')->name('postaddnewssale');

    Route::get('editnewssale','AdminController@editnewssale')->name('editnewssale');
    
    Route::post('posteditnewssale','AdminController@posteditnewssale')->name('posteditnewssale');
    
    Route::get('deletenewssale', 'AdminController@deletenewssale')->name('deletenewssale');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
