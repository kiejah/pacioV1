<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'company/admin'], function(){
    Route::post('/register', 'Api\UserAuthController@register' );


    Route::post('/login', 'Api\UserAuthController@login' );


});

   // only auth routes
   Route::group(['middleware' => 'auth:api'], function(){

   });




Route::apiResource('parcels','API\ParcelContoller');
Route::apiResource('receipients','API\ReceipientController');
Route::apiResource('senders','API\SenderController');


