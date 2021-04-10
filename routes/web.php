<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\FooterContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesDetailsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherByBatchController;
use App\Http\Controllers\TeacherController;
use App\Models\Batch;
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

Route::get('/', function () {
    $batches = Batch::latest()->take(8)->get();
    return view('welcome', compact('batches'));
});

Auth::routes();

Route::get('/admin-login', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/teacher-login', 'App\Http\Controllers\Auth\LoginController@teacherLogin');
Route::get('/operation-login', 'App\Http\Controllers\Auth\LoginController@operationLogin');

Route::get('/student-register', 'App\Http\Controllers\Auth\LoginController@studentRegister')->name('student-register');
Route::post('/student-register', 'App\Http\Controllers\Auth\RegisterController@register')->name('student-register');
Route::get('/student-login', 'App\Http\Controllers\Auth\LoginController@studentLogin')->name('student-login');
Route::post('/student-login', 'App\Http\Controllers\Auth\LoginController@login')->name('student-login');
Route::get('/student-details/{id}', [BatchController::class, 'studentDetails'])->name('student-details');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class ,'index']);

    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::post('profile/save', [ProfileController::class, 'store'])->name('image-upload');



    Route::get('/admin-dashboard', [HomeController::class ,'adminDashboard']);
    Route::get('/admin-show', [HomeController::class ,'adminshow']);

    Route::get('/teacher-dashboard', [HomeController::class ,'teacherDashboard']);
    Route::get('/operation-dashboard', [HomeController::class ,'operationDashboard']);

    Route::get('/student-dashboard', [HomeController::class ,'studentDashboard']);
    Route::get('/session-list', [HomeController::class , 'sessionList']);
    // Route::post('/session-list', [HomeController::class , 'sessionListSave']);


    

    // Teacher Controller
    Route::get('add-teacher', [TeacherController::class, 'create'])->name('add-teacher');
    Route::post('add-teacher', [TeacherController::class, 'store'])->name('add-teacher');
    Route::get('manage-teacher', [TeacherController::class, 'index'])->name('manage-teacher');
    Route::get('edit-teacher/{id}', [TeacherController::class, 'edit'])->name('edit-teacher');
    Route::post('edit-teacher/{id}', [TeacherController::class, 'update'])->name('edit-teacher');
    Route::get('show-teacher/{id}', [TeacherController::class, 'show'])->name('show-teacher');
    Route::get('destroy-teacher/{id}', [TeacherController::class, 'destroy'])->name('destroy-teacher');



    // batch/class controller
    Route::get('create-classes', [BatchController::class, 'create'])->name('class.create');
    Route::post('create-classes', [BatchController::class, 'store'])->name('class.store');
    Route::get('manage-classes', [BatchController::class, 'index'])->name('manage-class');
    Route::get('edit-classes/{id}', [BatchController::class, 'edit'])->name('edit-class');
    Route::post('edit-classes/{id}', [BatchController::class, 'update'])->name('update-class');
    Route::get('show-classes/{id}', [BatchController::class, 'show'])->name('show-class');
    Route::get('destroy-classes/{id}', [BatchController::class, 'destroy'])->name('destroy-class');
    Route::get('student', [BatchController::class, 'student'])->name('student');
    Route::get('available-courses', [BatchController::class, 'availableCourses'])->name('available-courses');
    // Route::get('/packages-details', [BatchController::class, 'packagesDetails'])->name('packages.details');
    

    Route::get('add-product', [TeacherController::class, 'store'])->name('add-product');
    Route::post('add-product', [TeacherController::class, 'store'])->name('add-product');
});
    Route::get('buy-now', [BatchController::class, 'buyNow'])->name('buy.now');
    Route::post('buy-now', [BatchController::class, 'buyNow'])->name('buy.now');

    Route::get('add-to-cart/{batchId}', [PaymentController::class, 'payment'])->name('cart.add');
    Route::get('remove-from-cart/{removeFromCart}', [PaymentController::class, 'removeFromCart'])->name('cart.remove');
    // Route::post('add-to-cart/{batchId}', [PaymentController::class, 'payment'])->name('cart.add');
    Route::get('terms-of-use', [FooterContentController::class, 'termsofuse'])->name('terms.of.use');
    Route::get('privacy-policy', [FooterContentController::class, 'privacyPolicy'])->name('privacy.policy');

    Route::post('/pay', [PaymentController::class , 'pay'])->name('payment.makePayment');

    Route::post('/login-api', [ApiController::class, 'login']);
    // packages details
    Route::get('/packages-details', [PackagesDetailsController::class, 'packagesDetails'])->name('packages.details');
