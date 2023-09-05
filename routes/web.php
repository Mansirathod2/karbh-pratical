<?php

use App\Http\Controllers\UserController;
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


Route::namespace('Auth')->group(function ($auth) {
    $auth->get('/login', [UserController::class, 'login'])->name('login');
    $auth->get('registration', [UserController::class, 'registration'])->name('register');
    $auth->post('post-login', [UserController::class, 'loginStore'])->name('login.post'); 
    $auth->post('post-registration', [UserController::class, 'registrationStore'])->name('register.post'); 
    $auth->get('dashboard', [UserController::class, 'dashboard'])->name('dashboard'); 
    $auth->get('logout', [UserController::class, 'logout'])->name('logout');
});