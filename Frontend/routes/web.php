<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PetinfoController;

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

// Static pages routes
Route::view('/', 'home');
Route::view('/sign-in', 'Sign-in')->name('sign_in');
Route::view('/sign-up', 'Sign-up')->name('sign_up');
Route::view('/animal', 'animal');
Route::view('/user-man', 'user-man');
Route::view('/news', 'news');
Route::view('/contact-us', 'contact-us');
Route::view('/report', 'report');
Route::view('/pet-info', 'pet-info');
Route::view('/pet-random', 'pet-random');

// Contact Us routes
Route::get('/contact_us', [ContactUsController::class, 'form']);
Route::post('/contact_us/store', [ContactUsController::class, 'store']);

// User authentication routes
Route::get('/sign_up', [UserController::class, 'form'])->middleware('guest')->name('sign_up');
Route::post('/sign_up', [UserController::class, 'store']);
Route::get('/sign_in', [UserController::class, 'login'])->middleware('guest')->name('sign_in');
Route::post('/sign_in', [UserController::class, 'logins'])->name('login-user');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Backend routes for data display
Route::get('/pet', [AnimalController::class, 'display']);
Route::get('/news', [NewsController::class, 'display']);
Route::get('/animal', [AnimalController::class, 'show']);
Route::get('/report', [ReportController::class, 'display1']);
Route::get('/pet-info', [PetinfoController::class, 'display']);
