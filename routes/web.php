<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/our-story', 'ContentController@about')->name('our-story');
Route::get('/contact', 'ContentController@contact')->name('contact');
Route::get('/blog', 'ContentController@blog')->name('blog');
Route::get('/blog/{slug}', 'ContentController@showBlog')->name('showBlog');
Route::get('/service', 'ContentController@service')->name('service');
Route::get('/product', 'ContentController@product')->name('product');
Route::get('/addCart', 'ContentController@addCart')->name('addCart');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/admin/dashboard', 'Admin\DashboardController@index');

    Route::get('/profile', 'ProfileController@index')->name('profile');
});



Route::get('/test-mail', function () {

    Mail::raw('Test Mail From Chokho Swaad Website', function ($message) {

        $message->to('deerdeep120@gmail.com')
            ->subject('Laravel Gmail Test');
    });

    return 'Mail Sent Successfully';
});
