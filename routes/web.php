<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarGerejaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RenunganController;
use App\Models\User;

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

//LOGIN

//pilihan login
Route::get('/pilihanlogin', function () {
    return view('pilihanlogin');
})->name('/pilihanlogin');

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//LOGIN USER
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//Logout
Route::post('/logout', [LoginController::class, 'logout']);

//Daftar
Route::get('/daftargereja', [DaftarGerejaController::class, 'index']);
Route::post('/daftargereja', [DaftarGerejaController::class, 'store']);


//USER

//datajemaat
Route::get('/datajemaat', function () {
    return view('datajemaat');
})->name('/datajemaat');

//warta jemaat
Route::get('/wartajemaat', function () {
    return view('wartajemaat');
})->name('/wartajemaat');

//laporan keuangan
Route::get('/laporankeuangan', function () {
    return view('laporankeuangan');
})->name('/laporankeuangan');

//renungan harian
Route::get('/renunganharian', function () {
    return view('renunganharian');
})->name('/renunganharian');



//PENGURUS GEREJA

//pengurus renungan harian
// Route::get('/pengurusrenunganharian', function () {
//     return view('pengurusrenunganharian');
// })->name('/pengurusrenunganharian');
Route::get('/pengurusrenunganharian', [RenunganController::class, 'read']);


Route::get('/uploadrenunganharian', [RenunganController::class, 'index']);
Route::post('/uploadrenunganharian', [RenunganController::class, 'store']);

// Route::get('/uploadrenunganharian', function () {
//     return view('uploadrenunganharian');
// })->name('/uploadrenunganharian');

// Route::get('/editrenunganharian', function () {
//     return view('editrenunganharian');
// })->name('/editrenunganharian');

Route::get('/renunganharian/edit/{id}', [RenunganController::class, 'view']);
Route::post('/renunganharian/update', [RenunganController::class, 'update']);


//pengurus warta jemaat
Route::get('/penguruswartajemaat', function () {
    return view('penguruswartajemaat');
})->name('/penguruswartajemaat');

Route::get('/uploadwartajemaat', function () {
    return view('uploadwartajemaat');
})->name('/uploadwartajemaat');

//pengurus data jemaat
Route::get('/pengurusdatajemaat', function () {
    return view('pengurusdatajemaat');
})->name('/pengurusdatajemaat');

Route::get('/uploaddatajemaat', function () {
    return view('uploaddatajemaat');
})->name('/uploaddatajemaat');

Route::get('/editdatajemaat', function () {
    return view('editdatajemaat');
})->name('/editdatajemaat');

// pengurus laporan keuangan
Route::get('penguruslaporankeuangan', function () {
    return view('penguruslaporankeuangan');
})->name('/penguruslaporankeuangan');

Route::get('/uploadlaporankeuangan', function () {
    return view('uploadlaporankeuangan');
})->name('/uploadlaporankeuangan');
