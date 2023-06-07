<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplementryController;
use App\Http\Controllers\RegularController;
use App\Http\Controllers\FileUploadController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});






Route::get('/', function () {
    return view('contant.home');
});
Route::get('aboutus', function () {
    return view('contant.aboutus');
});
Route::get('contact', function () {
    return view('contant.contact');
});
Route::get('religious-courses', function () {
    return view('contant.courses-details.religious');
});
Route::get('academic-courses', function () {
    return view('contant.courses-details.academic');
});
Route::get('boardofDirector', function () {
    return view('contant.our_team.boardofDirector');
});
Route::get('management_team', function () {
    return view('contant.our_team.management_team');
});
Route::get('basic', function () {
    return view('contant.training.basic');
});
Route::get('redhat', function () {
    return view('contant.training.redhat');
});
Route::get('ec_council', function () {
    return view('contant.training.ec_council');
});
Route::get('comp_tia', function () {
    return view('contant.training.comp_tia');
});
Route::get('certnexus', function () {
    return view('contant.training.certnexus');
});
Route::get('microsoft', function () {
    return view('contant.training.microsoft');
});
Route::get('cisco', function () {
    return view('contant.training.cisco');
});
Route::get('ibm_qrader', function () {
    return view('contant.training.ibm_qrader');
});
Route::get('isc', function () {
    return view('contant.training.isc');
});
Route::get('isaca', function () {
    return view('contant.training.isaca');
});
Route::get('amazon', function () {
    return view('contant.training.amazon');
});
Route::get('android', function () {
    return view('contant.training.android');
});
Route::get('autodesk', function () {
    return view('contant.training.autodesk');
});
Route::get('cloud_native', function () {
    return view('contant.training.cloud_native');
});
Route::get('course', function () {
    return view('contant.course');
});
Route::get('course_details', function () {
    return view('contant.course_details');
});
Route::get('export',[ComplementryController::class,'export'])->name('export');
Route::get('export-data',[RegularController::class,'export'])->name('exportdata');

// Route::get('/download-cv/{id}', 'App\Http\Controllers\FacultyController@downloadCV')->name('download.cv');

// Route::get('/faculties/{id}/cv', [FacultyController::class, 'downloadCV'])->name('faculties.cv');
// Route::get('/professional/{id}/cv', [ProfessionalController::class, 'downloadCV'])->name('download.cv');


Route::get('/dashboard', function () {
    return view('admin.contant.dashboard');
});




Auth::routes();

Route::get('/admins', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('religious', ComplementryController::class);
Route::resource('academic', RegularController::class);

Route::get('export',[ComplementryController::class,'export'])->name('export');
Route::get('export-data',[RegularController::class,'export'])->name('exportdata');
