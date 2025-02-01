<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/book');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/admin', function () {
    return view('index');
})->middleware('auth');


Route::get('/admin/login', function () {
    return view('signin');
})->name('login');

Route::prefix('user')->middleware('user')->group(function(){
    Route::get('/', function () {
        return view('user.profilen');
    })->name('dashboard');
    Route::get('/login', function () {
        return view('user.signin');
    })->name('userlogin')->withoutMiddleware('user');
    Route::get('/register', function () {
        return view('user.signup');
    })->name('userregister')->withoutMiddleware('user');
    Route::post('/register',[UserController::class,'store'] )->name('user_register')->withoutMiddleware('user');
    Route::post('/login',[UserController::class,'checklogin'] )->name('user_checklogin')->withoutMiddleware('user');
    Route::post('/logout',[UserController::class,'logout'])->name('user_logout');
    
});
Route::get('/book', [SeatController::class,'index'])->middleware('user')->name('book');
Route::get('/book/balcony', [SeatController::class,'index_balcony'])->middleware('user')->name('book_balcony');
Route::post('/book', [BookingController::class,'store'])->middleware('user')->name('store_booking');
Route::post('/book/balcony', [BookingController::class,'store_balcony'])->middleware('user')->name('store_balcony');
// Route::get('/book/details', [BookingController::class,'booking_details'])->middleware('user')->name('booking_details');
Route::get('/book/details/{ref_no}', [BookingController::class,'booking_detail'])->middleware('user');
Route::get('/seat/details/{ref_no}', [SeatController::class,'seat_detail']);
Route::get('/booking/ticket/{booking_id}', [SeatController::class,'seat_layout']);



Route::prefix('admin')->middleware('admin')->group(function(){
    
    Route::get('/', function () {
        return view('admin.index');})->name('admin_dashboard');
        Route::get('/login', function () {
            return view('admin.signin');
        })->name('adminlogin')->withoutMiddleware('admin');
        Route::get('/register', function () {
            return view('admin.signup');
        })->name('adminregister')->withoutMiddleware('admin');
        Route::post('/register',[UserController::class,'store_admin'] )->name('admin_register')->withoutMiddleware('admin');
        Route::post('/logout',[UserController::class,'admin_logout'])->name('admin_logout');
        
            // Route::post('/login',[UserController::class,'checklogin_admin'] )->name('admin_checklogin')->withoutMiddleware('admin');
            Route::post('/login',[UserController::class,'checklogin_admin'] )->name('admin_checklogin')->withoutMiddleware('admin');
        Route::delete('/bookings',[BookingController::class,'booking_destroy'])->name('booking_destroy');
        Route::post('/bookings',[BookingController::class,'booking_confirm'])->name('booking_confirm');
        Route::get('/users', function () {return view('admin.users');});
        Route::get('/show/user/{user_id}', [UserController::class,'show']);
        Route::get('/show/seat/{user_id}/{level}', [UserController::class,'seat_layout']);
        Route::get('/show/ticket/{user_id}/{status}', [UserController::class,'booking_detail']);
        Route::get('/seats/mainhall', function () {
            return view('admin.seats.show_hall');
        });
        Route::get('/seats/balcony', function () {
            return view('admin.seats.bal_show');
        });
        Route::get('/bookings', function () {
            return view('admin.bookings.index');
        });
        Route::get('/seats', function () {
            return view('admin.seats.index');
        });
    
});
Route::get('admin/book/details/{ref_no}', [BookingController::class,'admin_booking_detail'])->middleware('admin');
Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
