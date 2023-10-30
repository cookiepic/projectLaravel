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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::redirect('/admin', '/admin/home');

Route::get('show', [ShowController::class, 'show']);
Route::get('showusers', [ShowController::class, 'showView']);
Route::get('showarray', [ShowController::class, 'showArray']);


Route::get('userform', [ShowController::class, 'forms.user_form']);
Route::get('UserFormController', [\App\Http\Controllers\UserFormController::class, 'showUser']);