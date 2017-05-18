<?php
use App\User;
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
// Auth::routes();
Route::get('/login', function () {
    return view('admin/login');
});
Route::post('/login', 'authController@login');

// Route::get('/register', function () {
//     $user = new User;
//     $user->username = 'josh';
//     $user->password = Hash::make('a7x8gg3TY1!');
//     $user->save();
// });




Route::get('/', 'HomeController@index');


//admin section
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::post('/admin', 'DealController@addDeal');
});
