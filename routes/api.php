<?php

use Illuminate\Http\Request;



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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookables', 'Api\BookableController@index');
Route::get('bookable/{id}', 'Api\BookableController@show');
Route::get('bookables/{bookable}/availability', 'Api\BookableAvailabilityController')->name('bookables.availability.show');



/*Route::get('bookable/{id}/{optional?}', function (Request $request, $id, $optional = null) {
    
    if(strlen($optional) > 0){

        return json_encode([

            'status' => 'Optional',
            'data' => $optional

        ]);
        
    } else {
        return Bookable::findOrFail($id);
    }
    
});*/
