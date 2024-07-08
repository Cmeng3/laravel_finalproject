<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\petinfoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//http://127.0.0.1:8000/api/register
Route::controller(LoginRegisterController::class)->group(function() {
    Route::post('/register', 'register');

//http://127.0.0.1:8000/api/login
    Route::post('/login', 'login');
});

//http://127.0.0.1:8000/api/contactUs
Route::post('/contactUs',[ContactUsController::class, 'submit']);

//http://127.0.0.1:8000/api/reports
Route::get('/reports', [ReportController::class, 'getReports']);

//http://127.0.0.1:8000/api/pet-info
Route::get('/pet-info', [petinfoController::class, 'getPetInfo']);

//http://127.0.0.1:8000/api/news
Route::get('/news', [NewsController::class, 'getNews']);

//http://127.0.0.1:8000/api/animals
Route::get('/animals', [AnimalController::class, 'getAnimals']);





