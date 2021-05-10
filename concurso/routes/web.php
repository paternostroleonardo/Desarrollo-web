<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterStepTwoController;
use App\Http\Middleware\CheckRegistrationCompletedMiddleware;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ConcourseController;
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

Route::get('usersexcel', '\App\Http\Controllers\ExcelController@exportExcel')
->middleware('auth:sanctum')->name('users.excel');

Route::get('concourse', '\App\Http\Controllers\ConcourseController@Sorteo')
->middleware('auth:sanctum')->name('concourse.sorteo');

Route::resource('listusers', App\Http\Controllers\ListController::class)
->middleware('auth:sanctum');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::group(['middleware' => ['registration_completed']], function() {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::get('register-step2',
    [\App\Http\Controllers\RegisterStepTwoController::class, 'create'])->name('register-step2.create');
    Route::post('register-step2',
    [\App\Http\Controllers\RegisterStepTwoController::class, 'store'])->name('register-step2.post');
});




