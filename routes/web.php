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

Route::group(['middleware' => ['web']], function () {

    //-------------AUTH----------------//
    Route::get('/login', function () {
        return view('auth/login', ['page_title' => 'Login']);
    })->name('login');

    Route::get('/register', function () {
        return view('auth/register', ['page_title' => 'Register']);
    })->name('register');

    Route::get('/logout', function () {
        return view('auth/logout', ['page_title' => 'Logout']);
    })->name('logout');


    // ADMIN SIDE
    Route::group(
        [
            // 'middleware' => ['role.admin'],
            'prefix' => '/admin',
        ],
        function () {
            // ------------DASHBOARD--------------- //
            Route::get('/dashboard', function () {
                return view('admin/dashboard/dashboard', ['page_title' => 'Dashboard']);
            })->name('admin_dashboard');

            // ------------USER--------------- //
            Route::get('/user', function () {
                return view('admin/user/user', ['page_title' => 'User']);
            })->name('admin_user');
        }
    );


    // USER SIDE
    Route::group(
        [
            // 'middleware' => ['role.admin'],
            'prefix' => '/',
        ],
        function () {
            // ------------HOME--------------- //
            Route::get('/home', function () {
                return view('user/home/home', ['page_title' => 'Home']);
            })->name('user_home');
        }
    );
});
