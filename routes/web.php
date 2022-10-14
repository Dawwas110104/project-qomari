
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenerimaDonasiController;
use App\Http\Controllers\AdminController;
 

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
})->name('welcome');
// ->middleware('verified');

// Auth::routes(['verify' => true]);
Auth::routes();
Route::post('/pengguna/register', [UserController::class, 'store'])->name('register-post');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['donatur', 'verified'])->group(function () {
    Route::get('/donatur/list', [DonaturController::class, 'list'])->name('donatur.list');
    Route::get('/donatur/list/{id}/detail', [DonaturController::class, 'detail'])->name('donatur.detail');
    Route::post('/donatur/tambah-anak-asuh', [DonaturController::class, 'tambahAnakAsuh'])->name('donatur.tambah-anak-asuh');
    Route::get('/donatur/anak-asuh', [DonaturController::class, 'anakAsuh'])->name('donatur.anak-asuh');
    Route::get('/donatur/anak-asuh/{id}/detail', [DonaturController::class, 'anakAsuhDetail'])->name('donatur.anakasuh-detail');
    Route::resource('donatur', DonaturController::class);
});


Route::middleware(['admin'])->group(function () {
    Route::resources([
        'pengguna' => UserController::class,
        'penerimadonasi' => PenerimaDonasiController::class,
        'transaksi' => TransaksiController::class,
    ]);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/penerimadonasi/{id}/detail', [PenerimaDonasiController::class, 'detail'])->name('penerimadonasi.detail');
});







