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

Route::get('/', function () {
    return view('auth/login', ['page_title' => 'Login']);
})->name('login');

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

            // ------------PERSON IN CHARGES--------------- //
            Route::get('/person_in_charge', function () {
                return view('admin/person_in_charge/person_in_charge', ['page_title' => 'Person In Charges']);
            })->name('admin_person_in_charge');

            // ------------INVENTORIES--------------- //
            Route::get('/inventory', function () {
                return view('admin/inventory/inventory', ['page_title' => 'Inventories']);
            })->name('admin_inventory');

            // ------------SOURCES--------------- //
            Route::get('/source', function () {
                return view('admin/source/source', ['page_title' => 'Sources']);
            })->name('admin_source');

            // ------------CONDITIONS--------------- //
            Route::get('/condition', function () {
                return view('admin/condition/condition', ['page_title' => 'Conditions']);
            })->name('admin_condition');

            // ------------EQUIPMENTS--------------- //
            Route::get('/equipment', function () {
                return view('admin/equipment/equipment', ['page_title' => 'Equipments']);
            })->name('admin_equipment');
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

            // ------------DASHBOARD--------------- //
            Route::get('/services/dashboard', function () {
                return view('user/dashboard/dashboard', ['page_title' => 'Dashboard']);
            })->name('user_dashboard');

            // ------------INQUIRY--------------- //
            Route::get('/services/inquiry', function () {
                return view('user/inquiry/inquiry', ['page_title' => 'Inquiries']);
            })->name('user_inquiry');
        }
    );
});
