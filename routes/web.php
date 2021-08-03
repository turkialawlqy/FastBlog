<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Auth::routes();

Route::get('/', function () {
    return class_basename(get_class(User::find(1)));
})->name('home');

Route::get('/checkOnline', function (App\Repositories\AttendanceRepository $attendanceRepo) {
    if (Auth::check()) {
    }
    return $attendanceRepo->CountUserOnline();
})->name('checkOnline');
