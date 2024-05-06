<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SubmissionController;
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
//     return view('login');
// });


// Route::post('/submit', [AuthController::class, 'auth_index'])->name('/.submit');

Route::get('/', [AuthController::class, 'index']);
Route::match(['get', 'post'], '/submit', [AuthController::class, 'auth_index'])->name('submit');


Route::get('/register',[AuthController::class,'register']);
Route::post('/register/submet',[AuthController::class,'create_user'])->name('register.submet');

Route::get('/register', function () {
    return view('register');
});


Route::get('/nmu',[FormController::class,'nmu']); 
Route::post('/nmu',[FormController::class,'create_form'])->name('form'); 

Route::get('/nmuarabic',[FormController::class,'nmuarabic']); 
Route::post('/nmuarabic',[FormController::class,'create_form'])->name('form_ar');
 

Route::get('/submissions', [SubmissionController::class, 'index'])->name('submissions.index');
Route::delete('/submission/{id}', [SubmissionController::class,'destroy'])->name('submission.destroy');
Route::get('/submission/search', [SubmissionController::class, 'search'])->name('submission.search');


// Route::get('/nmuarabic', function () {
//     return view('nmuarabic');
// });
