<?php

use Illuminate\Http\Request;
Use App\Tumbuhan;

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

Route::get('tumbuhan', 'TumbuhanController@index');
Route::get('tumbuhan/{id}', 'TumbuhanController@show');
Route::post('tumbuhan', 'TumbuhanController@store');
Route::put('tumbuhan/{id}', 'TumbuhanController@update');
Route::delete('tumbuhan/{id}', 'TumbuhanController@delete');

 
Route::get('tumbuhan', function() {
    return Tumbuhan::all();
});
 
Route::get('tumbuhan/{id}', function($id) {
    return Tumbuhan::find($id);
});

Route::post('tumbuhan', function(Request $request) {
    return Tumbuhan::create($request->all);
});

Route::put('tumbuhan/{id}', function(Request $request, $id) {
    $tumbuhan = Tumbuhan::findOrFail($id);
    $tumbuhan->update($request->all());

    return $tumbuhan;
});

Route::delete('tumbuhan/{id}', function($id) {
    Tumbuhan::find($id)->delete();

    return 204;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
