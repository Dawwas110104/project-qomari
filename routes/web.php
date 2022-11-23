
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenerimaDonasiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    Route::post('/donatur/tambah-anak-asuh', [DonaturController::class, 'tambahAnakAsuh'])->name('donatur.tambah-anak-asuh');
    Route::get('/donatur/anak-asuh', [DonaturController::class, 'anakAsuh'])->name('donatur.anak-asuh');
    Route::get('/donatur/transaksi', [DonaturController::class, 'transaksi'])->name('donatur.transaksi');
    Route::get('/donatur/list/{id}/detail', [DonaturController::class, 'detail'])->name('donatur.detail');
    Route::get('/donatur/anak-asuh/{id}/detail', [DonaturController::class, 'anakAsuhDetail'])->name('donatur.anakasuh-detail');
    Route::resource('donatur', DonaturController::class);
});


Route::middleware(['admin'])->group(function () {
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/penerimadonasi/{id}/detail', [PenerimaDonasiController::class, 'detail'])->name('penerimadonasi.detail');
    Route::get('/transaksi/email', [TransaksiController::class, 'email'])->name('transaksi.email');
    Route::get('/transaksi/coba', [TransaksiController::class, 'coba'])->name('transaksi.coba');
    Route::get('/transaksi/template-email', [TransaksiController::class, 'template'])->name('transaksi.template');
    Route::post('/transaksi/template-email/update', [TransaksiController::class, 'templateUpdate'])->name('transaksi.template.update');
    Route::get('/transaksi/{id}/detail', [TransaksiController::class, 'detail'])->name('transaksi.detail');
    Route::post('/transaksi/{id}/terima', [TransaksiController::class, 'terima'])->name('transaksi.terima');
    Route::post('/transaksi/{id}/tolak', [TransaksiController::class, 'tolak'])->name('transaksi.tolak');

    Route::resources([
        'pengguna' => UserController::class,
        'penerimadonasi' => PenerimaDonasiController::class,
        'transaksi' => TransaksiController::class,
    ]);
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('dawwas.inha@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
})->name('send-email');

Route::get('email-index', [AdminController::class, 'email']);







