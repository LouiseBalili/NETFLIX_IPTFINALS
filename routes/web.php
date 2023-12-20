<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserLogController;
use App\Http\Controllers\TestEnrollmentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieRequestController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\SendNotificationController;
use App\Http\Controllers\TVShowController;
use App\Http\Controllers\TVShowRequestController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });



Route::middleware(['auth','verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/sendNotification', [SendNotificationController::class, 'sendNotification']);

    Route::get('/tvshows', [TVShowController::class, 'index'])->name('tvshows.index');
    Route::get('/tvshows/request', [TVShowRequestController::class, 'create'])->name('tvshowsrequest.request');
    Route::post('/tvshows', [TVShowRequestController::class, 'store'])->name('tvshowsrequest.store');
    Route::get('/tvshows/create', [TVShowController::class, 'create'])->name('tvshows.create');
    Route::post('/tvshows', [TVShowController::class, 'store'])->name('tvshows.store');
    Route::get('/tvshows/edit/{tvshow}', [TVShowController::class, 'edit'])->name('tvshows.edit');
    Route::put('/tvshows/{tvshow}', [TVShowController::class, 'update'])->name('tvshows.update');
    Route::delete('/tvshows/{tvshow}', [TVShowController::class, 'destroy'])->name('tvshows.destroy');

    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/request', [MovieRequestController::class, 'create'])->name('moviesrequest.request');
    Route::post('/movies', [MovieRequestController::class, 'store'])->name('moviesrequest.store');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/movies/edit/{movie}', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');


    Route::get('/logs', [UserLogController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/register', [AuthController::class, 'create'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);

    Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
});

