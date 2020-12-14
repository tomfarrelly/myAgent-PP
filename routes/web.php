<?php
# @Author: tomfarrelly
# @Date:   2020-10-30T15:07:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-14T00:11:53+00:00






use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventManager\EventController as EventManagerEventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;



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

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/dj/home', [App\Http\Controllers\Dj\HomeController::class, 'index'])->name('dj.home');
Route::get('/eventmanager/home', [App\Http\Controllers\EventManager\HomeController::class, 'index'])->name('eventmanager.home');

// EM EVENT CRUD
Route::get('/eventmanager/events', [EventManagerEventController::class, 'index'])->name('eventmanager.events.index');
Route::get('/eventmanager/events/create', [EventManagerEventController::class, 'create'])->name('eventmanager.events.create');
Route::get('/eventmanager/events/{id}', [EventManagerEventController::class, 'show'])->name('eventmanager.events.show');
Route::post('/eventmanager/events/store', [EventManagerEventController::class, 'store'])->name('eventmanager.events.store');
Route::get('/eventmanager/events/{id}/edit', [EventManagerEventController::class, 'edit'])->name('eventmanager.events.edit');
Route::put('/eventmanager/events/{id}', [EventManagerEventController::class, 'update'])->name('eventmanager.events.update');
Route::delete('/eventmanager/events/{id}', [EventManagerEventController::class, 'destroy'])->name('eventmanager.events.destroy');


// ADMIN EVENT CRUD
Route::get('/admin/events', [AdminEventController::class, 'index'])->name('admin.events.index');
Route::get('/admin/events/create', [AdminEventController::class, 'create'])->name('admin.events.create');
Route::get('/admin/events/{id}', [AdminEventController::class, 'show'])->name('admin.events.show');
Route::post('/admin/events/store', [AdminEventController::class, 'store'])->name('admin.events.store');
Route::get('/admin/events/{id}/edit', [AdminEventController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{id}', [AdminEventController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{id}', [AdminEventController::class, 'destroy'])->name('admin.events.destroy');
