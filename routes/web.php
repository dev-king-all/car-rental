<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HelpScoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('google', function () {
    return view('googleAuth');
});

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

//Route::get('auth/google/agent', [AgentController::class, 'redirectToGoogle']);
//Route::get('auth/google/callback', [AgentController::class, 'handleGoogleCallback']);

//Route::get('/forgot-password', function () {
//    return view('auth.forgot-password');
//})->middleware('guest')->name('password.request');

Route::get('/admin/login', [MainController::class, 'login'])->name('admin.login');
Route::get('/admin/register', [MainController::class, 'register'])->name('admin.register');

Route::get('/agent/login', [MainController::class, 'agentLogin'])->name('agent.login');
Route::get('/agent/register', [MainController::class, 'agentRegister'])->name('agent.register');

Route::get('/client/login', [MainController::class, 'clientLogin'])->name('client.login');
Route::get('/client/register', [MainController::class, 'clientRegister'])->name('client.register');

Auth::routes();

//Route::get('/index', [IndexController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {



    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//    Route::get('/admin/help-scout', [HelpScoutController::class, 'index'])->name('admin.helpscout');
    Route::get('/admin/help-scout', [HelpScoutController::class, 'index'])->name('admin.helpscout');
    Route::get('/admin/help-scout/response', [HelpScoutController::class, 'response'])->name('admin.helpscout.response');
    Route::get('/admin/help-scout/response/{conversation_id}', [HelpScoutController::class, 'conversations'])->name('admin.conversation.details');


    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/account/activity', [AdminController::class, 'accountactivity'])->name('account.activity');
    Route::get('/delete/activity/{id}', [AdminController::class, 'deleteactivity'])->name('delete.activity');

    Route::get('/admin/change/password', [AdminController::class, 'changepassword'])->name('admin.change.password');
    Route::get('/admin/password/change', [AdminController::class, 'changepasswordform'])->name('admin.password.change');
    Route::post('/admin/p/c', [AdminController::class, 'admin_c_p'])->name('admin_c_p');

    Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/verification-is-in-pending', [AdminController::class, 'verify_user'])->name('admin.dashboard');


    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');

    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');

    Route::get('/users/list', [AdminController::class, 'users'])->name('users.list');
    Route::get('/update/user/status/{id}', [AdminController::class, 'verification'])->name('update.verification.status');


    Route::get('/auth/forgotpassword', [MainController::class, 'forgotpassword'])->name('auth.forgotpassword');
    Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
    Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
    Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
