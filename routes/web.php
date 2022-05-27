<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;

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


Auth::routes();
Route::group(['middleware' => ['auth']], function () { 
Route::get('dashboard', [HomeController::class, 'index'])->name('home');

//Route::post('display-data', [AdminController::class, 'displayData'])->name('data-display');
Route::post('update-status/{id}', [HomeController::class, 'statusUpdate']);
Route::get('get-details/{id}', [HomeController::class, 'detailData'])->name('details-get');
Route::get('team-assign', [HomeController::class, 'assignTeam'])->name('assign-team');
Route::post('record-del', [HomeController::class, 'deleteRecord'])->name('del-record');
Route::get('add-cities', [HomeController::class, 'addCities'])->name('cities-add');
Route::post('added-new-cities', [HomeController::class, 'addNewCities'])->name('new-cities-added');
Route::post('file-upload', [HomeController::class, 'fileUploadPost'])->name('upload-file');
Route::get('add-team', function () {
    return view('modules.add-team.add-team');
})->name('team-add');

Route::resource('team', TeamController::class);
Route::resource('city', CityController::class);
Route::post('team-added', [HomeController::class, 'addTeam'])->name('added-team');
Route::post('assign-customer-team/{id}', [HomeController::class, 'assignCustomerTeam']);
Route::get('show-all-record', [HomeController::class, 'showAllRecord'])->name('show-all-record');
Route::post('comments', [HomeController::class, 'commentsDiscussion'])->name('comments-discussion');
Route::get('download/{id}', [HomeController::class, 'downloadfile'])->name('download-file');
Route::get('contact-requests', [HomeController::class, 'contactRequest'])->name('contact-request');

});

//Route::get('/', function () {
  //  return view('modules.user-home.user-home');
//})->name('user-home');

Route::get('/',[UserFormController::class, 'userhome'])->name('user-home');

Route::get('reset-password', function () {
    return view('modules.password-reset.password-reset');
})->name('password-reset');
Route::post('password-reset',[HomeController::class, 'resetPassword'])->name('pass-reset');

Route::get('silder-form',[UserFormController::class, 'sliderForm'])->name('user-slider-form');

Route::get('about-us', function () {
    return view('modules.about-us.about-us');
})->name('about');

Route::get('contact-us', function () {
    return view('modules.contact-us.contact-us');
})->name('contact');

//Route::get('apply-form', function () {
//    return view('modules.user-form.user-form');
//})->name('form-apply');
//Route::post('user-first-form', [UserFormController::class, 'UserFormOne'])->name('first-user-form');
Route::post('user-slider-form', [UserFormController::class, 'UserForm'])->name('slider-user-form');
Route::post('custm-contact', [UserFormController::class, 'contactUs'])->name('contact-us');


