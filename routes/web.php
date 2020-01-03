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
// use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// ของแอดมิน พอล็อกอินแล้วให้เด้งไปหน้า /แอดมินเลย
Route::group([
    'prefix' => '/admin',
    'namespace' => 'Admin',
    'name' => 'admin',
    'middleware' => 'admin'
], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('courses', 'CourseController');
    Route::resource('stages', 'StageController');
    Route::resource('trainers', 'TrainerController');
    Route::resource('bookings', 'BookingController');
});

// ของ user ปกติ
Route::resource('bookings', 'BookingController');
Route::get('/', 'HomeController@index');
Route::get('/editprofile', 'HomeController@editprofile');
Route::get('/home', 'HomeController@index');
Route::get('/course', 'HomeController@course');
Route::get('/trainer', 'HomeController@trainer');
Route::get('/trainer/{trainer}', 'HomeController@trainerDetail')->name('trainer.detail');
Route::get('/boxer', 'HomeController@boxer');
Route::get('/stage', 'HomeController@stage');
Route::get('/contact', 'HomeController@contact');
Route::get('/check', 'HomeController@check');
Route::get('/finalbooking', 'HomeController@finalbooking');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
