<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ROUTE USER (FRONTEND)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('user.home');
});

use App\Http\Controllers\QueueController;

Route::middleware('auth')->group(function () {
    Route::get('/antrian', [QueueController::class, 'create']);
    Route::post('/antrian', [QueueController::class, 'store']);

    Route::get('/riwayat', [QueueController::class, 'index']);
    Route::post('/riwayat/{queue}/cancel', [QueueController::class, 'cancel']);
});


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN (DUMMY / SEDERHANA)
|--------------------------------------------------------------------------
*/
// ===== LOGIN ADMIN =====
Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', function () {
    if (request('email') === 'admin' && request('password') === 'admin') {
        session(['admin_logged_in' => true]);
        return redirect('/admin/dashboard');
    }

    return back()->with('error', 'Email atau password salah');
});

// ===== LOGOUT ADMIN =====
Route::get('/admin/logout', function () {
    session()->forget('admin_logged_in');
    return redirect('/');
});

// ===== DASHBOARD ADMIN =====
Route::get('/admin/dashboard', function () {
    if (!session('admin_logged_in')) {
        return redirect('/admin/login');
    }
    return view('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| ROUTE ADMIN (DILINDUNGI SESSION)
|--------------------------------------------------------------------------
*/
Route::get('/admin/dashboard', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return view('admin.dashboard');

})->name('admin.dashboard');

// ===== POLI =====
Route::get('/admin/poli', function () {
    return view('admin.poli.index');
});

Route::get('/admin/poli/create', function () {
    return view('admin.poli.create');
});

Route::get('/admin/poli/edit', function () {
    return view('admin.poli.edit');
});

// ===== DOKTER =====
Route::get('/admin/dokter', function () {
    return view('admin.dokter.index');
});

Route::get('/admin/dokter/create', function () {
    return view('admin.dokter.create');
});

Route::get('/admin/dokter/edit', function () {
    return view('admin.dokter.edit');
});

// ===== USER ANTRIAN =====
Route::get('/antrian', function () {
    return view('user.antrian');
});

Route::get('/antrian/status', function () {
    return view('user.status');
});

// ===== ADMIN ANTRIAN =====
Route::get('/admin/antrian', function () {
    return view('admin.antrian.index');
});

Route::get('/antrian/riwayat', function () {
    return view('user.riwayat');
});

Route::get('/antrian/daftar', function () {
    return view('user.daftar');
});
