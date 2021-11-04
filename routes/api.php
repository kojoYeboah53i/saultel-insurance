<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Response;
// controllers
use App\Http\Controllers\Partner\AddController;

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


Route::get('/user', function () {
   $user = User::where('name',  'Cork')->first();
   $update = $user->update(['name' => 'Pork']);
   return response()->json($update);
})->name('getCurrentUser');

Route::post('/addingPartner', [AddController::class, 'store'])->name('addingPartner');