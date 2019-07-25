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


Route::get('/comingsoon', function () {
    return view('comingsoon');
});
Route::get('/', 'IndexController@Homeindex'); //To index or home page
Route::get('/privacy_terms', 'IndexController@privacy_terms')->name('privacy_terms'); //To terms and privacy page
//To show the index page
Route::post('index/message', 'IndexController@storeComment');  //To add comments to db
Route::post('index/subscribe', 'IndexController@storeSubscriber');  //To add subscriber to db



Route::get('/login', function () {
    return view('auth/login');
});

//Route::auth();
Auth::routes();
Route::get('auth-user','HomeController@checkRole');
Route::get('Admin/dashboard', 'HomeController@index'); //To take the logged in admin to the dashboard
Route::get('Admin/messages', 'HomeController@messages'); //To take messages page
Route::get('Admin/read_message/{id}', 'HomeController@readMessage'); //To read message
Route::get('Admin/subscribers', 'HomeController@subscribers'); //To take subscribers page
Route::get('Admin/media_gallery', 'HomeController@media_gallery'); //To take media_gallery page
Route::get('Admin/upload_photo', 'HomeController@upload_photo'); //upload photo page
Route::post('Admin/upload_photo', 'Photo\HomeController@storePhoto');  //To add photo to the db

Route::delete('Admin/messages/delete/','HomeController@destroyMessage'); //To delete message
Route::delete('Admin/subscribers/delete/','HomeController@destroySubscriber'); //To delete subscriber
Route::delete('Admin/media_gallery/delete/','HomeController@destroyPhoto'); //To delete Photo

// Password reset link request routes
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');