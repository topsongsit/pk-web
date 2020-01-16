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

    Route::resource('bookingUsers', 'BookingUserController');
    Route::resource('timetables', 'TimetableController');
});

// ของ user ปกติ
Route::get('/', 'HomeController@index');
Route::get('/editprofile', 'HomeController@editprofile');
Route::get('/transfer', 'HomeController@transfer');
Route::get('/mytabletime', 'HomeController@mytabletime');
Route::get('/home', 'HomeController@index');
Route::get('/course', 'HomeController@course');
Route::get('/trainer', 'HomeController@trainer');
Route::get('/trainer/{trainer}', 'HomeController@trainerDetail')->name('trainer.detail');
Route::get('/boxer', 'HomeController@boxer');
Route::get('/stage', 'HomeController@stage');
Route::get('/contact', 'HomeController@contact');
Route::get('/check', 'HomeController@check');


Route::post('/booking/store', 'HomeController@saveBooking');
Route::get('/booking/show/{id}', 'HomeController@booking')->name('booking.show');
Route::post('/booking/upload', 'HomeController@uploadBooking')->name('booking.upload');
Route::get('/booking/timetable/{id}', 'HomeController@timetable')->name('booking.timetable');
Route::get('/booking/reserve/{id}/booking/{bookingId}', 'HomeController@reserve')->name('booking.reserve');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/cancel', 'HomeController@cancel');
