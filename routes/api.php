<?php

use App\Http\Resources\CategoriesResource;
use App\Models\Categories;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//** Categories */

//Get all categories
Route::get('/categories', function() {
return CategoriesResource::collection(Categories::all());
});

//Get category id
Route::get('/categories/{id}', function($catID) {
  return Categories::findOrFail($catID);
  });


//Add a new category


//Update category


//Delete category

