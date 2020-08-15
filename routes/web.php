<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Category;
use App\Tag;
use App\Profile;
use App\Mail\NewPostMail;

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


Route::get('test',function(){
 
 return view('blog.pages.about');

});
Route::get('sider',function(){
 
   return view('blog.layouts.slider');

});

// Route::resource('blog','BlogController');
Route::get('/','BlogController@index')->name('blog.index');
Route::get('post/{id}-{slug}','BlogController@show')->name('blog.post.show');
Route::get('category/{id}-{slug}','BlogController@category')->name('blog.category');
Route::get('tag/{id}-{slug}','BlogController@tag')->name('blog.tag');
Route::post('search','BlogController@search')->name('blog.search');
Route::get('about-us','BlogController@about')->name('blog.about');
Route::get('contact-us','BlogController@contact')->name('blog.contact');
Route::post('subscribe','BlogController@subscriber')->name('subscribe.store');
Route::get('subscribe/delete/{email}','BlogController@subscriberDestroy')->name('subscribe.destroy');








// Route::get('blog/tag/{id}','BlogController@tag')->name('blog.tag');
// Route::any('/search','BlogCOntroller@search')->name('blog.search'); 

// Route::get('blog/category/{category}-{slug}','BlogController@category')->name('blog.category');

Route::prefix('admin')->namespace('admin')->group(function(){

		Route::resource('category','CategoryController');
		Route::resource('meta','MetaController');
		Route::resource('tag','TagController');
		Route::resource('post','PostController');
		Route::resource('paragraph','ParagraphController');
		Route::get('paragraph/make/{post_id}','ParagraphController@create')->name('paragraph.make');
		Route::post('upload','ParagraphController@upload')->name('para.upload');
		Route::get('profile/edit','ProfileController@edit')->name('main.profile.edit');
		Route::patch('profile/edit/{id}','ProfileController@update')->name('main.profile.update');
		Route::get('slider','ProfileController@sliderIndex')->name('slider.index');  
		Route::delete('slider/{id}','ProfileController@sliderDelete')->name('slider.delete');
		Route::post('slider','ProfileController@sliderStore')->name('slider.store');

});

Route::prefix('admin')->namespace('Auth\Admin')->group(function(){


	Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'LoginController@login')->name('admin.login');
	Route::get('logout', 'LoginController@logout')->name('admin.logout');
	Route::get('logout', 'LoginController@logout')->name('admin.logout');

	//Admin Registration Routes...
	Route::get('register', 'RegisterController@showRegistrationForm')->name('admin.register')->middleware('auth:admin');
	Route::post('register', 'RegisterController@register')->name('admin.register')->middleware('auth:admin');

	//Admin Password Reset Routes...
	Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('password/reset', 'ResetPasswordController@reset')->name('admin.password.update');

});


Route::prefix('user')->namespace('Auth\User')->group(function(){

	Route::get('login', 'LoginController@showLoginForm')->name('user.login');
	Route::post('login', 'LoginController@login')->name('user.store');
	Route::get('logout', 'LoginController@logout')->name('user.logout');

	//User Registration Routes...
	Route::get('register', 'RegisterController@showRegistrationForm')->name('user.register');
	Route::post('register', 'RegisterController@register')->name('user.register');

	//User Password Reset Routes...
	Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
	Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
	Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'ResetPasswordController@reset')->name('user.password.update');

	Route::resource('profile', 'UserProfileController');

});

  
 