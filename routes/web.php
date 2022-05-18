<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('hoangha', [UserController::class, 'hoangha']) -> name('hoangha');

Route::get('register', [UserController::class, 'register']) -> name('register');

Route::get('login', [UserController::class, 'login']) -> name('login');

Route::get('info', [UserController::class, 'info']) -> name('info');

Route::post('hoangha', [UserController::class, 'register_action']) -> name('register.action');

Route::post('login123', [UserController::class, 'login_action']) -> name('login.action');

Route::get('logout', [UserController::class, 'logout']) -> name('logout');

// admin
Route::resource('admin', CustomerController::class);

Route::get('product', [AdminController::class, 'product']) -> name('product');

// Route::resource('admin', CustomerController::class)->only([
//     'index', 'product'
// ]);

// Route::name('admin.')->group(function () {
//     Route::get('/index', function () {
//         // Route assigned name "admin.users"...
//     })->name('index');
// });

