<?php

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
    return view('auth.log-reg');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/places', [\App\Http\Controllers\PlaceController::class, 'index'])->name('places');
Route::get('/place/{place}', [\App\Http\Controllers\PlaceController::class, 'show'])->name('place.id');

Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{blog}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.id');

Route::get('/musicians', [\App\Http\Controllers\MusicianController::class, 'index'])->name('musicians');
Route::get('/musicians/{musician}', [\App\Http\Controllers\MusicianController::class, 'show'])->name('musician.id');

Route::get('/mybookings', [\App\Http\Controllers\BookingController::class, 'index'])->name('mybookings');
Route::post('/mybookings/store', [\App\Http\Controllers\BookingController::class, 'store'])->name('store.booking');

Route::get('/parties', [\App\Http\Controllers\PartyController::class, 'index'])->name('parties');
Route::get('/parties/{party}', [\App\Http\Controllers\PartyController::class, 'show'])->name('party.id');

Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');


Route::middleware(['roles:admin', 'auth'])->group(function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    
    //Bookings
    Route::put('/admin/booking/update/{booking}', [\App\Http\Controllers\BookingController::class, 'update'])->name('booking.update');
    
    //Places
    Route::get('/admin/places', [\App\Http\Controllers\PlaceController::class, 'admin'])->name('admin.places');
    Route::get('/admin/places/create', [\App\Http\Controllers\PlaceController::class, 'create'])->name('admin.places.create');
    Route::post('/admin/places/create/store', [\App\Http\Controllers\PlaceController::class, 'store'])->name('store.place');
    Route::delete('/admin/places/delete/{place}', [\App\Http\Controllers\PlaceController::class, 'destroy'])->name('destroy.place');
    
    //Musicians
    Route::get('/admin/musicians', [\App\Http\Controllers\MusicianController::class, 'admin'])->name('admin.musicians');
    Route::get('/admin/musicians/create', [\App\Http\Controllers\MusicianController::class, 'create'])->name('admin.musicians.create');
    Route::post('/admin/musicians/create/store', [\App\Http\Controllers\MusicianController::class, 'store'])->name('store.musician');
    Route::delete('/admin/musicians/delete/{musician}', [\App\Http\Controllers\MusicianController::class, 'destroy'])->name('destroy.musician');

    //Parties
    Route::get('/admin/parties', [\App\Http\Controllers\PartyController::class, 'admin'])->name('admin.parties');
    Route::get('/admin/parties/create', [\App\Http\Controllers\PartyController::class, 'create'])->name('admin.parties.create');
    Route::post('/admin/parties/create/store', [\App\Http\Controllers\PartyController::class, 'store'])->name('store.party');
    Route::delete('/admin/parties/delete/{party}', [\App\Http\Controllers\PartyController::class, 'destroy'])->name('destroy.party');
    
    //Blogs
    Route::get('/admin/blogs', [\App\Http\Controllers\BlogController::class, 'admin'])->name('admin.blogs');
    Route::get('/admin/blogs/create', [\App\Http\Controllers\BLogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/admin/blogs/create/store', [\App\Http\Controllers\BLogController::class, 'store'])->name('store.blog');
    Route::delete('/admin/blogs/delete/{blog}', [\App\Http\Controllers\BlogController::class, 'destroy'])->name('destroy.blog');

});