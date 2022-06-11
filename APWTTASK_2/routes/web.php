<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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
Route::get('/registration',[RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration',[RegistrationController::class, 'registrationSubmitted'])->name('registration');
Route::get('/login',[RegistrationController::class, 'login'])->name('login');
Route::post('/login',[RegistrationController::class, 'loginSubmit'])->name('login');
Route::get('/contactus',[RegistrationController::class, 'contactus'])->name('contactus');
Route::post('/contactus',[RegistrationController::class, 'messageSubmitted'])->name('contactus');

