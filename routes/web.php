<?php
# @Author: tomfarrelly
# @Date:   2020-10-30T15:07:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-05T20:39:34+00:00




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Dj\EventController as DjEventController;
use App\Http\Controllers\EventManager\EventController as EventManagerEventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

use App\Http\Controllers\Dj\HomeController as DjHomeController;
use App\Http\Controllers\EventManager\HomeController as EventManagerHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

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



Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
Route::get('/dj/home', [DjHomeController::class, 'index'])->name('dj.home');
Route::get('/eventmanager/home', [EventManagerHomeController::class, 'index'])->name('eventmanager.home');


// Route::get('/user/books', [UserBookController::class, 'index'])->name('user.books.index');
// Route::get('/user/books/{id}', [UserBookController::class, 'show'])->name('user.books.show');
//
// Route::get('/admin/books', [AdminBookController::class, 'index'])->name('admin.books.index');
// Route::get('/admin/books/create', [AdminBookController::class, 'create'])->name('admin.books.create');
// Route::get('/admin/books/{id}', [AdminBookController::class, 'show'])->name('admin.books.show');
// Route::post('/admin/books/store', [AdminBookController::class, 'store'])->name('admin.books.store');
// Route::get('/admin/books/{id}/edit', [AdminBookController::class, 'edit'])->name('admin.books.edit');
// Route::put('/admin/books/{id}', [AdminBookController::class, 'update'])->name('admin.books.update');
// Route::delete('/admin/books/{id}', [AdminBookController::class, 'destroy'])->name('admin.books.destroy');
