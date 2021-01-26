<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;

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

Route::resource('products', 'ProductController');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class,'show'])->name('product.show');
//////////////////////////rating/////////////////////////////////////////////////////////
Route::post('/rating/new', 'DetailController@setrating')->name('setrating');
Route::get('/rating/{id}', 'DetailController@getrating')->name('getrating');
Route::get('/product/search', 'DetailController@search');
////////////////////////////payment////////////////////////////////////////////////////////
Route::get('/checkout/stripe', 'CheckoutController@stripe')->name('stripe');
Route::post('/checkout/stripepayment', 'CheckoutController@stripePayment')->name('stripepayment');
///////////////////////////Discover//////////////////////////////////////////////////////
Route::get('/discover', [App\Http\Controllers\DiscoverController::class,'index'])->name('discover.index');
Route::get('/stories/{story}', [App\Http\Controllers\StoryController::class,'show'])->name('story.show');
//////////////////////////images-upload//////////////////////////////////////////////////////
Route::post('/images-upload', [App\Http\Controllers\ImagesController::class,'upload']);
Route::post('/files-upload', [App\Http\Controllers\ImagesController::class,'uploadFile']);
///////////////////////////files-upload/////////////////////////////////////////////////////
Route::get('files',  [App\Http\Controllers\FileAppController::class,'index']);
Route::post('upload',[App\Http\Controllers\FileAppController::class,'uploadFile']);
Route::get('delete/upload/{file}',  [App\Http\Controllers\FileAppController::class,'deleteFile']);
Route::get('download/upload/{file}',  [App\Http\Controllers\FileAppController::class,'downloadFile']);

