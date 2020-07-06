<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
})->name('index');
Route::group(['prefix'=>'pages'], function(){
	Route::get('tourlist', function(){
		return view('pages.tourlist');
	})->name('tourlist');
	Route::get('tourlist-detail',function(){
		return view('pages.tourdetail');
	})->name('tour-detail');
	Route::get('about',function(){
		return view('pages.about');
	})->name('about');
	Route::get('blog',function(){
		return view('pages.blog');
	})->name('blog');
	Route::get('blog-detail',function(){
		return view('pages.blogdetail');
	})->name('blog-detail');
	Route::get('contact',function(){
		return view('pages.contact');
	})->name('contact');
	Route::get('faq',function(){
		return view('pages.faq');
	})->name('faq');
	Route::get('gallery',function(){
		return view('pages.gallery');
	})->name('gallery');
	Route::get('service', function(){
		return view('pages.service');
	})->name('service');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin'], 'prefix'=> 'admin'], function(){
	Route::get('/',function(){
		return view('admin.dashboard');
	})->name('admin.dashboard');
	Route::get('/role-register', 'Admin\DashboardController@registered')->name('admin.role-register');
	Route::get('/role-edit/{id}', 'Admin\DashboardController@edit')->name('admin.edit');
	Route::put('/role-update/{id}', 'Admin\DashboardController@update')->name('admin.update');
	Route::delete('/role-delete/{id}', 'Admin\DashboardController@delete')->name('admin.delete');

	Route::resource('destination','Admin\DestinationController');
	Route::resource('package','Admin\PackageController');
	Route::resource('tour','Admin\TourController');
});
