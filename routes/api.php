<?php

use App\Http\Controllers\ProductController;
use App\Http\Resources\ProductResource;
use App\Http\Resources\TestCollection;
use App\Http\Resources\TestResource;
use App\Models\Product;
use App\Models\Size;
use App\Models\Transaction;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products', ProductController::class);

Route::get('test', function(Request $request){
    return json_encode(ProductResource::collection(Product::all()));
});
