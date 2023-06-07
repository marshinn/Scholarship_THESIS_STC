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

Auth::routes( [
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

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

Route::post('/editapply/{id}', [App\Http\Controllers\StudentController::class, 'editapply'])->name('editapply');
Route::post('/applying/{id}', [App\Http\Controllers\StudentController::class, 'applying'])->name('applying');


Route::get('/Applicants/{id}', [App\Http\Controllers\StudentController::class, 'Applicants'])->name('Applicants');

Route::get('/status/{id}', [App\Http\Controllers\StudentController::class, 'status'])->name('status');


Route::get('/calendar', [App\Http\Controllers\UserController::class, 'calendar'])->name('calendar');

Route::get('/announcement', [App\Http\Controllers\AnnouncementController::class, 'announcement'])->name('announcement');

Route::get('/studentdetails/{id}', [App\Http\Controllers\StudentController::class, 'studentdetails'])->name('studentdetails');

Route::get('/editScholarship/{id}', [App\Http\Controllers\ScholarshipController::class, 'editScholarship'])->name('editScholarship');


Route::post('/updates/{id}', [App\Http\Controllers\ScholarshipController::class, 'updates'])->name('updates');


Route::get('/editStudent/{id}', [App\Http\Controllers\StudentController::class, 'editStudent'])->name('editStudent');



Route::get('/mystudent/{id}', [App\Http\Controllers\StudentController::class, 'mystudent'])->name('mystudent');


Route::get('/Approve/{id}', [App\Http\Controllers\StudentController::class, 'Approve'])->name('Approve');

Route::get('/Disapprove/{id}', [App\Http\Controllers\StudentController::class, 'Disapprove'])->name('Disapprove');