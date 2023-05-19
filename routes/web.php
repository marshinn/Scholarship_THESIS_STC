<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/User', [App\Http\Controllers\UserController::class, 'alluser'])->name('alluser');

Route::get('/AddUser-index', [App\Http\Controllers\UserController::class, 'AddUser'])->name('AddUser');

Route::post('Insert-user', [App\Http\Controllers\UserController::class, 'InsertUser'])->name('InsertUser');

Route::get('/Edit-User/{id}', [App\Http\Controllers\UserController::class, 'edituser'])->name('edituser');

Route::post('/Update-user/{id}', [App\Http\Controllers\UserController::class, 'UpdateUser'])->name('UpdateUser');

Route::get('/delete-user/{id}', [App\Http\Controllers\UserController::class, 'Deleteuser'])->name('DeleteUser');

Route::get('/Scholarship', [App\Http\Controllers\ScholarshipController::class, 'Scholarship'])->name('Scholarship');

Route::get('/AddScholarship', [App\Http\Controllers\ScholarshipController::class, 'AddScholarship'])->name('AddScholarship');

Route::post('/p', [App\Http\Controllers\ScholarshipController::class, 'Store'])->name('Store');



Route::get('/Scholarship-details/{id}', [App\Http\Controllers\ScholarshipController::class, 'Scholarshipdetails'])->name('Scholarshipdetails');

Route::get('/Remove/{id}', [App\Http\Controllers\StudentController::class, 'Remove'])->name('Remove');


Route::get('/Apply/{id}', [App\Http\Controllers\StudentController::class, 'Apply'])->name('Apply');


Route::post('/applying/{id}', [App\Http\Controllers\StudentController::class, 'applying'])->name('applying');


Route::get('/Applicants/{id}', [App\Http\Controllers\StudentController::class, 'Applicants'])->name('Applicants');
