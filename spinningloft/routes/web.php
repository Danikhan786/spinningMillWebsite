<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
// Route::get('/', function () {
    //     return view('welcome');
    // });
    

    // Define only login, logout, and password reset routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Auth::routes(['register' => false]);


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/property', [FrontendController::class, 'property'])->name('property');
Route::get('/property/{id}', [FrontendController::class, 'propertybyId'])->name('propertybyId');
Route::get('/our-service', [FrontendController::class, 'service'])->name('service');
Route::get('/our-project', [FrontendController::class, 'project'])->name('project');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact-post', [FrontendController::class, 'contactStore'])->name('contact.store');




// routes/web.php
Route::post('/property/{id}/inquiry', [FrontendController::class, 'storeInquiry'])->name('property.storeInquiry');




// Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboard');
    Route::get('/admin/dashboard/property', [DashboardController::class, 'adminProperty'])->name('adminProperty');
    Route::get('/admin/dashboard/property-inquery', [DashboardController::class, 'propertyInquery'])->name('propertyInquery');
    Route::get('/admin/dashboard/contact', [DashboardController::class, 'gellAllContacts'])->name('gellAllContacts');

    Route::resource('properties', PropertyController::class);

});
