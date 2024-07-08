<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalinfoController;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReservedController;
use App\Http\Controllers\PetHealthController;
use App\Http\Controllers\PetMatchingController;
use App\Models\User;
use App\Models\Animal;
use App\Models\Animalinfo;
use App\Models\Animals;
use App\Models\ContactUs;
use App\Models\News;
use App\Models\Order;
use App\Models\Petmatching;

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

/* Frontend */


Route::get('/home', function () {
    return view('Frontend.home');
});

Route::get('/sign-in', function(){
    return view('Frontend.Sign-in');
});

Route::get('/sign-up', function(){
    return view('Frontend.Sign-up');
});
Route::get('/animal', function(){
    return view('Frontend.animal');
});
Route::get('/user-man', function(){
    return view('Frontend.user-man');
});
Route::get('/news', function(){
    return view('Frontend.news');
});
Route::get('/contact-us', function(){
    return view('Frontend.contact-us');
});
Route::get('/report', function(){
    return view('Frontend.report');
});
Route::get('/pet-info', function(){
    return view('Frontend.pet-info');
});
Route::get('/pet-random', function(){
    return view('Frontend.pet-random');
});


/* Backend */

Route::get('/', function () {
    return view('dashboard');
});

// routes/web.php
Route::get('/profile', function () {
    return view('backend.profile');
});

Route::get('/company', function () {
    return view('backend.company');
});





/* CRUD : create, read, update and delete  */

/* Adoptionmatch */
Route::get('/adoptionmatch', function () {
    $animals = Animal::all();
    return view('backend.adoptionmatch',compact('animals') );
})->name('animals.index');
Route::get('animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('animals/{id}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('animals_update/{id}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('animals_destroy/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');

/* ContactUs */
Route::get('/contactus', function () {
    $contacts = ContactUs::all();
    return view('backend.contactus', compact('contacts'));
})->name('backend.contactus');
Route::get('contact_us/create', [ContactUsController::class, 'create'])->name('contact_us.create');
Route::post('contact_us', [ContactUsController::class, 'store'])->name('contact_us.store');
Route::get('contact_us/{id}/edit', [ContactUsController::class, 'edit'])->name('contact_us.edit');
Route::put('contact_us/{id}', [ContactUsController::class, 'update'])->name('contact_us.update');
Route::delete('contact_us/{id}', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');

/* Order */
Route::get('/order', function () {
    $orders = Order::all();
    return view('backend.order', compact('orders'));
})->name('order.index');
Route::get('order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('order', [OrderController::class, 'store'])->name('order.store');
Route::get('order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::put('order/{id}', [OrderController::class, 'update'])->name('order.update');
Route::delete('order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

/* new&article */
Route::get('/new&article', function () {
    $news = News::all();
    return view('backend.new&article', compact('news'));
})->name('news.index');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news', [NewsController::class, 'store'])->name('news.store');
Route::get('news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('news/{id}', [NewsController::class, 'update'])->name('news.update');
Route::delete('news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');


/* petmatching  */
Route::get('/petmatching', function () {
    $pets = Petmatching::all();
    return view('backend.petmatching', compact('pets'));
})->name('petmatching.index');
Route::get('petmatching/create', [PetMatchingController::class, 'create'])->name('petmatching.create');
Route::post('petmatching', [PetMatchingController::class, 'store'])->name('petmatching.store');
Route::get('petmatching/{id}/edit', [PetMatchingController::class, 'edit'])->name('petmatching.edit');
Route::put('petmatching/{id}', [PetMatchingController::class, 'update'])->name('petmatching.update');
Route::delete('petmatching/{id}', [PetMatchingController::class, 'destroy'])->name('petmatching.destroy');

/* Animalinformation */
Route::get('/animalinformation', function () {
    $animalinfo = Animalinfo::all();
    return view('backend.animalinformation', compact('animalinfo'));
})->name('animalinformation.index');
Route::get('animalinformation/create', [AnimalinfoController::class, 'create'])->name('animalinformation.create');
Route::post('animalinformation', [AnimalinfoController::class, 'store'])->name('animalinformation.store');
Route::get('animalinformation/{id}/edit', [AnimalinfoController::class, 'edit'])->name('animalinformation.edit');
Route::put('animalinformation/{id}', [AnimalinfoController::class, 'update'])->name('animalinformation.update');
Route::delete('animalinformation/{id}', [AnimalinfoController::class, 'destroy'])->name('animalinformation.destroy');


/* User  */
Route::get('/user', function () {
    $users = User::all();
    return view('backend.user',compact('users'));
})->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user', [UserController::class, 'store'])->name('user.store');
Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
