<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return view('index');
});
Route::get('/apointment', function(){
    return view('apointment');
});


// admin dashboard
Route::get('/dashboard',[RegistrationController::class, 'dashboard']);



// for loing form page

// get requests
Route::get('/register',[RegistrationController::class, 'signup']);
// post requests
Route::post('/register',[RegistrationController::class, 'register']);

Route::post('/login',[RegistrationController::class, 'login']);
Route::get('/customers',[RegistrationController::class, 'customers']);
// taking apointment
Route::post('/apointment/bookapointment',[RegistrationController::class, 'book']);
Route::get('/cancel/{$id}',[RegistrationController::class, 'cancel']);
Route::get('/download-pdf', 'PDFController@downloadPDF')->name('download.pdf');

