<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;



use Illuminate\Support\Facades\Route;



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
//root
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/picture', function () {
//     $nama = "Latip Muhyi";
//     return view('picture', ['nama' => $nama]);
// });

Route::get('/users', [UserController::class, 'index1']);
// Route::resource('/member', [MemberController::class, 'create']);



Route::get('/', [PageController::class, 'index']);
Route::get('/picture', [PageController::class, 'picture']);
Route::get('/profil', [PageController::class, 'profil']);
