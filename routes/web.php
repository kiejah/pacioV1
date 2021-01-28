<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('company-master', 'CompanyMasterController@index')->name('company.view');
    Route::get('company-master/new-company', 'CompanyMasterController@addNewCompanyView')->name('company.add_new_company');
    Route::post('company-master', 'CompanyMasterController@store')->name('company.store');
    Route::get('users', 'CompanyMasterController@users')->name('users.view');
    Route::get('users/new-user', 'CompanyMasterController@addNewUser')->name('users.add-new-user');
    Route::post('users/new-user', 'CompanyMasterController@storeUser')->name('user.store');
});

Route::group(['as'=>'staff.','prefix' => 'staff','namespace'=>'Staff','middleware'=>['auth','staff']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('parcels', 'DashboardController@parcelsView')->name('parcels.view');
    Route::get('parcels/new-parcel-details', 'DashboardController@addNewParcelDetails')->name('parcel.add_parcel_details_form');
    Route::post('parcels/create-parcel', 'DashboardController@storeParcel')->name('parcel.store');
});

Route::get('/home', 'HomeController@index')->name('home');
