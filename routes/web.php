<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BioskopController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\ChatMessageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\pengurusController;
use App\Http\Controllers\PertanyaanController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/ukm', [UKMController::class, 'index'])->name('ukm.index');


    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function () {
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
        Route::get('mahasiswa/{id}', [MahasiswaController::class, 'detail'])->name('mahasiswa.details');
    });
});

Route::get('/forum', [ChatController::class, 'index'])->name('forum.index');
Route::post('/forum', [ChatController::class, 'store'])->name('forum.store');
Route::delete('/forum/{chat}', [ChatController::class, 'destroy'])->name('forum.destroy');

Route::get('/ukm', [UKMController::class, 'index'])->name('ukm.index');
Route::get('/ukm/{id}', [UKMController::class, 'ldk'])->name('ukm.show');
Route::get('/ukm/dpm/{id}', [UKMController::class, 'dpm'])->name('ukm.dpm');
Route::middleware(['admin'])->group(function () {
    Route::resource('pengurus', pengurusController::class)->except(['index']);
});

// Route::get('/pengurus', [pengurusController::class, 'index'])->name('pengurus.index');

// Route::get('/recruitment', [RecruitmentController::class, 'index'])->name('recruitment.index');

Route::get('/recruitment', function () {
    return view('recruitment.index');
})->name('recruitment.index');

Route::get('rekomendasi', function () {
    return view('rekomendasi.index');
})->name('rekomendasi.index');


Route::resource('pengurus', pengurusController::class);

Route::get('/pengurus/{pengurus}/edit', [pengurusController::class, 'edit'])->name('pengurus.edit');
Route::put('/pengurus/{pengurus}', [pengurusController::class, 'update'])->name('pengurus.update');


Route::get('/ukm', [UKMController::class, 'index'])->name('ukm.index');
Route::get('/ukm/{id}', [UKMController::class, 'ldk'])->name('ukm.ldk');
Route::get('/ukm/dpm/{id}', [UKMController::class, 'dpm'])->name('ukm.dpm');
Route::get('/ukm/bem/{id}', [UKMController::class, 'bem'])->name('ukm.bem');
Route::get('/ukm/kopma/{id}', [UKMController::class, 'kopma'])->name('ukm.kopma');
Route::get('/ukm/lpm/{id}', [UKMController::class, 'lpm'])->name('ukm.lpm');
Route::get('/ukm/psht/{id}', [UKMController::class, 'psht'])->name('ukm.psht');

Route::get('/rekomendasi', [PertanyaanController::class, 'index'])->name('rekomendasi.index');
Route::post('/rekomendasi', [PertanyaanController::class, 'hasil'])->name('rekomendasi.hasil');
Route::get('/formulir', [PertanyaanController::class, 'index'])->name('tampil_formulir');
Route::post('/proses-formulir', [PertanyaanController::class, 'prosesForm'])->name('proses_formulir');
