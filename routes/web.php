<?php

use App\Http\Controllers\C_Login;
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
// Login
Route::get('/', [C_Login::class, 'login']);
Route::post('/proseslogin', [C_Login::class, 'index']);
//Register
Route::get('/register', [C_Login::class, 'reg']);
Route::post('/reg', [C_Login::class, 'register']);
//logic Logout
Route::post('/logout', [C_Login::class, 'logout']);
//View dashboard
Route::get('/dashboard', [C_Login::class, 'show']);
Route::get('/produk', [C_Login::class, 'produk']);
//Input
Route::get('/input', [C_Login::class, 'create']);
Route::post('/createData', [C_Login::class, 'store']);
//Edit Update
Route::get('/edit/{id}',[C_Login::class, 'edit']);
Route::post('/updateData/{id}',[C_Login::class, 'update']);
//Delete Hapus
Route::get('/hapus/{id}',[C_Login::class, 'destroy']);

Route::get('/tes', function () {
    return view('new');
});