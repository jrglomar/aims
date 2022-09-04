<?php

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

//-------------AUTH----------------//


Route::get('/logout', function () {
    return view('auth/logout', ['page_title' => 'Logout']);
})->name('logout');

Route::group(['middleware' => ['web']], function () {

    Route::get('/login', function () {
        return view('auth/login', ['page_title' => 'Login']);
    })->name('login');

    Route::get('/register', function () {
        return view('auth/register', ['page_title' => 'Register']);
    })->name('register');

    // ADMIN SIDE
    Route::group(
        [
            'middleware' => ['auth:sanctum', 'role.admin'],
            'prefix' => '/admin',
        ],
        function () {
            // ------------DASHBOARD--------------- //
            Route::get('/dashboard', function () {
                return view('admin/dashboard/dashboard', ['page_title' => 'Dashboard']);
            })->name('admin_dashboard');

            // ------------USER--------------- //
            Route::get('/user', function () {
                return view('admin/user/user', ['page_title' => 'Users']);
            })->name('admin_user');

            // ------------INQUIRY--------------- //
            Route::get('/inquiry', function () {
                return view('admin/inquiry/inquiry', ['page_title' => 'Inquries']);
            })->name('admin_inquiry');
        }
    );


    // USER SIDE
    Route::group(
        [
            'middleware' => ['auth:sanctum'],
            'prefix' => '/',
        ],
        function () {
            // ------------HOME--------------- //
            Route::get('/home', function () {
                return view('user/home/home', ['page_title' => 'Home']);
            })->name('user_home');

            // ------------HOME--------------- //
            Route::get('/services/inquiry', function () {
                return view('user/inquiry/inquiry', ['page_title' => 'Inquiries']);
            })->name('user_inquiry');
        }
    );
});
