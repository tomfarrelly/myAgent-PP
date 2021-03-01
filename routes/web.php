<?php
# @Author: tomfarrelly
# @Date:   2020-10-30T15:07:53+00:00
# @Last modified by:   tomfarrelly

# @Last modified time: 2021-03-01T19:05:45+00:00







use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dj\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventManager\EventController as EventManagerEventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\EventManager\BookingController as EventManagerBookingController;
use App\Http\Controllers\Dj\AvailabilityController as DjAvailabilityController;
use App\Http\Controllers\EventManager\DjController as EventManagerDjController;



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

//DJ - Availability
Route::get('/dj/availability/create', [DjAvailabilityController::class, 'create'])->name('dj.availability.create');
Route::post('/dj/availability/store', [DjAvailabilityController::class, 'store'])->name('dj.availability.store');


//DJ Profile
Route::get('/my-profile', [App\Http\Controllers\Dj\ProfileController::class, 'myprofile'])->name('dj.page.profile');
Route::post('/my-profile-update', [App\Http\Controllers\Dj\ProfileController::class, 'myprofileupdate'])->name('dj.page.profile.update');

//EM Profile
//Route::get('/my-profile', [App\Http\Controllers\EventManager\ProfileController::class, 'myprofile'])->name('eventmanager.page.profile');
//Route::post('/my-profile-update', [App\Http\Controllers\EventManager\ProfileController::class, 'myprofileupdate'])->name('eventmanager.page.profile');
//Route::get('/eventmanager/djs/{id}', [App\Http\Controllers\EventManager\ProfileController::class, 'show'])->name('eventmanager.page.profile.show');
//Route::get('/eventmanager/page/availableDj', [App\Http\Controllers\EventManager\ProfileController::class, 'availableDj'])->name('eventmanager.page.availableDj');


//EM bookings
Route::get('/eventmanager/bookings', [EventManagerBookingController::class, 'index'])->name('eventmanager.bookings.index');
Route::get('/eventmanager/events/{id}/bookings/create', [EventManagerBookingController::class, 'create'])->name('eventmanager.events.bookings.create');
Route::post('/eventmanager/events/{id}/bookings/store', [EventManagerBookingController::class, 'store'])->name('eventmanager.events.bookings.store');

//EM - DJs
Route::get('/eventmanager/djs', [EventManagerDjController::class, 'index'])->name('eventmanager.djs.index');
Route::get('/eventmanager/djs/available', [EventManagerDjController::class, 'available'])->name('eventmanager.djs.available');
Route::get('/eventmanager/djs/{id}', [EventManagerDjController::class, 'show'])->name('eventmanager.djs.show');
//Route::get('/eventmanager/djs/search-dj', [EventManagerDjController::class, 'search'])->name('eventmanager.djs.search');
Route::get('/search', [EventManagerDjController::class, 'search'])->name('eventmanager.djs.search');




// EM EVENT CRUD
Route::get('/eventmanager/events', [EventManagerEventController::class, 'index'])->name('eventmanager.events.index');
Route::get('/eventmanager/events/create', [EventManagerEventController::class, 'create'])->name('eventmanager.events.create');
Route::get('/eventmanager/events/{id}', [EventManagerEventController::class, 'show'])->name('eventmanager.events.show');
Route::get('/eventmanager/events/{id}/availableDj', [EventManagerEventController::class, 'availableDj'])->name('eventmanager.events.availableDj');
Route::post('/eventmanager/events/store', [EventManagerEventController::class, 'store'])->name('eventmanager.events.store');
Route::get('/eventmanager/events/{id}/edit', [EventManagerEventController::class, 'edit'])->name('eventmanager.events.edit');
Route::put('/eventmanager/events/{id}', [EventManagerEventController::class, 'update'])->name('eventmanager.events.update');
Route::delete('/eventmanager/events/{id}', [EventManagerEventController::class, 'destroy'])->name('eventmanager.events.destroy');
Route::get('/past', [EventManagerEventController::class, 'past'])->name('eventmanager.events.past');
Route::get('/search-events', [EventManagerEventController::class, 'search'])->name('eventmanager.events.search');

// EM - venues
Route::get('/eventmanager/venues', [App\Http\Controllers\EventManager\VenueController::class, 'index'])->name('eventmanager.venues.index');


// ADMIN EVENT CRUD 1
Route::get('/admin/events', [AdminEventController::class, 'index'])->name('admin.events.index');
Route::get('/admin/events/create', [AdminEventController::class, 'create'])->name('admin.events.create');
Route::get('/admin/events/{id}', [AdminEventController::class, 'show'])->name('admin.events.show');
Route::post('/admin/events/store', [AdminEventController::class, 'store'])->name('admin.events.store');
Route::get('/admin/events/{id}/edit', [AdminEventController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{id}', [AdminEventController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{id}', [AdminEventController::class, 'destroy'])->name('admin.events.destroy');
