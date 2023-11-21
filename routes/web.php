<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TranskripAkademikController;
use App\Http\Controllers\Admin\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/Welcome', function () {
    return view('welcome');
});
Route::get('Profil', function () {
    return view('profile');
});
Route::get('/Profile', function () {
    return view('profile');
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
//     return view('mahasiswa');
// });
Route::get('/programstudi', [programstudiController::class, 'index']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);

Route::get('/transkripnilai', [TranskripAkademikController::class, 'index']);

Route :: resource ('admin/item', ItemController ::class); 
Route :: resource ('mahasiswa/mahasiswa2', ItemController ::class);
Route :: resource ('matakuliah/matakuliah-marcello', ItemController ::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

