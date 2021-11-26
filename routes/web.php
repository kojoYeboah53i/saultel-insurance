<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'] , function() {


// dashboard
Route::get('/dashboard', function(){
    $user = Auth::user();
    $data = [
        'category_name' => 'dashboard',
        'page_name' => 'dashboard',
    ];
    return view('dashboard.index', compact('user'))->with($data);

})->name('dashboard');





});