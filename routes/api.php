<?php

use Illuminate\Http\Request;
use App\Fares;
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

Route::get('fares',function(){
  return Fares::all();
});

Route::get('fares/{id}',function($id){
    return Fares::find($id);
});

Route::post('fares', function(Request $request){
    return Fares::create($request->all);
});

Route::put('fares/{$id}',function(Request $request, $id){
  $fares = Fares::findOrFail($id);
  $fares->update($request->all());
  return $fares;
});

Route::delete('fares/{$id}',function($id){
   Fares::find($id)->delete();
   return 204;
});
