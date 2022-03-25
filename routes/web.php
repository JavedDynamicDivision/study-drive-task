<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use League\CommonMark\Extension\Mention\Mention;
use Illuminate\Contracts\Auth\MustVerifyEmail;

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

Route::get('/', function () {
    return view('welcome');
});


//User Managment All Routes
Route::prefix('student')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
    Route::get('/delete /{id}', [UserController::class, 'UserDelete'])->name('user.delete');
});

// User Profile and Change Password Routes
Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');    
    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
});


//Student or Users Logout route
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');



//All Routes for Study-Drive-Task

//Prefix Route for Course Model
Route::prefix('course')->group(function(){
    Route::get('/view', [CourseController::class, 'ViewCourses'])->name('view.courses');
    Route::get('/create', [CourseController::class, 'CreateCourses'])->name('create.courses');    
    Route::post('/store', [CourseController::class, 'StoreCourse'])->name('store.course');
    Route::get('/edit/{id}', [CourseController::class, 'EditCourse'])->name('edit.course');
    Route::post('/update/{id}', [CourseController::class, 'UpdateCourse'])->name('update.course');
    Route::get('/delete/{id}', [CourseController::class, 'DeleteCourse'])->name('delete.course');        
});

//Prefix Route for Registration Model
Route::prefix('reg')->group(function(){
    Route::get('/view', [RegistrationController::class, 'ViewReg'])->name('view.reg');
    Route::get('/create', [RegistrationController::class, 'CreateReg'])->name('create.reg');    
    Route::post('/store', [RegistrationController::class, 'StoreReg'])->name('store.reg');
    Route::get('/edit/{id}', [RegistrationController::class, 'EditReg'])->name('edit.reg');
    Route::post('/update/{id}', [RegistrationController::class, 'UpdateReg'])->name('update.reg');
    Route::get('/delete/{id}', [RegistrationController::class, 'DeleteReg'])->name('delete.reg');        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
