<?php
# @Author: tomfarrelly
# @Date:   2020-10-30T15:07:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-05T20:39:34+00:00




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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/dj/home', [App\Http\Controllers\Dj\HomeController::class, 'index'])->name('dj.home');
Route::get('/eventmanager/home', [App\Http\Controllers\EventManager\HomeController::class, 'index'])->name('eventmanager.home');
