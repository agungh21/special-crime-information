<?php

use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login');

Route::get('/front', 'FrontController@index')->name('front.index');
Route::get('/front/{specialCrimeInformation}/detail', 'FrontController@detail')->name('front.detail');

Auth::routes();

Route::prefix('admin')->middleware('is_admin')->group(function () {

    // ----------
    // Dashboard
    // ----------
    Route::get('/', 'AdminController@index')->name('admin');

    //  -----
    //  user
    //  -----
    Route::prefix('user')->group(function () {

        Route::get('/', 'AdminController@userIndex')->name('admin.user');
        Route::get('/add', 'AdminController@userAdd')->name('admin.user.add');
        Route::get('{user}/edit', 'AdminController@userEdit')->name('admin.user.edit');
        Route::get('/detail', 'AdminController@useDetail')->name('admin.user.detail');

        Route::post('store', 'AdminController@userStore')->name('admin.user.store');
        Route::put('{user}/update', 'AdminController@userUpdate')->name('admin.user.update');
        Route::delete('{user}/destroy', 'AdminController@userDestroy')->name('admin.user.destroy');
    });

    //  -----
    //  Special Crime Information
    //  -----
    Route::prefix('info-kasus-pidana')->group(function () {

        Route::get('/', 'AdminController@specialCrimeInformationIndex')->name('admin.special_crime_information');
        Route::get('/add', 'AdminController@specialCrimeInformationAdd')->name('admin.special_crime_information.add');
        Route::get('{specialCrimeInformation}/edit', 'AdminController@specialCrimeInformationEdit')->name('admin.special_crime_information.edit');
        Route::get('{specialCrimeInformation}/detail', 'AdminController@specialCrimeInformationDetail')->name('admin.special_crime_information.detail');

        Route::post('store', 'AdminController@specialCrimeInformationStore')->name('admin.special_crime_information.store');
        Route::put('{specialCrimeInformation}/update', 'AdminController@specialCrimeInformationUpdate')->name('admin.special_crime_information.update');
        Route::delete('{specialCrimeInformation}/destroy', 'AdminController@specialCrimeInformationDestroy')->name('admin.special_crime_information.destroy');
    });

    // Setting
    Route::prefix('pengaturan')->group(function () {
        Route::get('umum', 'AdminController@settingCommonIndex')->name('admin.setting.common');

        Route::group(['middleware' => 'requestAjax'], function () {
            Route::post('common/store', 'AdminController@settingCommonStore')->name('admin.setting.common.store');
        });
    });
});

Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@indexUsers')->name('users');
});
