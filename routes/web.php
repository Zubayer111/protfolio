<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProtfolioController;
use App\Http\Controllers\ServiceControllel;
use App\Http\Controllers\Wabcontroller;
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

Route::get('/', [Wabcontroller::class, "index"])->name("home");
Route::post('/contact-form', [ContactController::class, "index"])->name("contact.form");

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, "index"])->name('dashboard');

    
    Route::get('/view-Contact', [ContactController::class, "view"])->name("view.Contact");

    Route::get('/add-home', [HomeController::class, "home"])->name('add.home');
    Route::post('/new-home', [HomeController::class, "create"])->name('home.new');
    Route::get('/manage-home', [HomeController::class, "manage"])->name('manage.home');
    Route::get('/edit-home/{id}', [HomeController::class, "edit"])->name('edit.home');
    Route::post('/updete-home/{id}', [HomeController::class, "updete"])->name('updete.home');
    Route::get('/delete-home/{id}', [HomeController::class, "delete"])->name('delete.home');
    Route::get('/updete-status-home/{id}', [HomeController::class, "updeteStatus"])->name('updete.status.home');

    Route::get('/add-about', [AboutController::class, "index"])->name('add.about');
    Route::post('/new-about', [AboutController::class, "create"])->name('about.new');
    Route::get('/manage-about', [AboutController::class, "manage"])->name('manage.about');
    Route::get('/edit-about/{id}', [AboutController::class, "edit"])->name('edit.about');
    Route::post('/updete-about/{id}', [AboutController::class, "updete"])->name('updete.about');
    Route::get('/delete-about/{id}', [AboutController::class, "delete"])->name('delete.about');
    Route::get('/updete-status/{id}', [AboutController::class, "updeteStatus"])->name('updete.status.about');

    Route::get('/add-service', [ServiceControllel::class, "add"])->name('add.service');
    Route::post('/new-service', [ServiceControllel::class, "create"])->name('service.new');
    Route::get('/manage-service', [ServiceControllel::class, "manage"])->name('manage.service');
    Route::get('/updete.status-service/{id}', [ServiceControllel::class, "updeteStatus"])->name('updete.status.service');
    Route::get('/edit-service/{id}', [ServiceControllel::class, "edit"])->name('edit.service');
    Route::post('/updete-service/{id}', [ServiceControllel::class, "updete"])->name('service.updete');
    Route::get('/delete-service/{id}', [ServiceControllel::class, "delete"])->name('service.delete');

    Route::get('/add-protfolio', [ProtfolioController::class, "index"])->name('add.protfolio');
    Route::post('/new-protfolio', [ProtfolioController::class, "create"])->name('protfilio.new');
    Route::get('/manage-protfolio', [ProtfolioController::class, "manage"])->name('manage.protfolio');
    Route::get('/edit-protfolio/{id}', [ProtfolioController::class, "edit"])->name('edit.protfolio');
    Route::get('/delete-protfolio/{id}', [ProtfolioController::class, "delete"])->name('delete.protfolio');
    Route::post('/updete-protfolio/{id}', [ProtfolioController::class, "updete"])->name('protfilio.updete');


    

});

