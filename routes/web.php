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
    return redirect('/dashboard');    
});

Auth::routes();
// Route::get('/login', function() {
//     // $category_name = 'auth';
//     $data = [
//         'category_name' => 'auth',
//         'page_name' => 'login',
  
//     ];
//     // $pageName = 'auth_default';
//     return view('auth.login')->with($data);
// });
Route::get('/register', function() {
    return redirect('/login');    
});
Route::get('/password/reset', function() {
    return redirect('/login');    
});

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