<?php

use App\Http\Controllers\ViewMemberKasetpdf;
use App\Http\Controllers\ViewMemberKaset;
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

Route::get('/', function () {
    return view('layouts.app2');
});

Route::resource('admin/member_rental_kaset', 'App\Http\Controllers\Admin\member_rental_kasetController');
Route::resource('admin/transaksi_peminjaman_kaset', 'App\Http\Controllers\Admin\transaksi_peminjaman_kasetController');
Route::resource('admin/kaset_film', 'App\Http\Controllers\Admin\kaset_filmController');
Route::resource('admin/pegawai_kaset', 'App\Http\Controllers\Admin\pegawai_kasetController');

Route::get('/laporan/v_rental_kaset', [ViewMemberKasetpdf::class, 'index']);
Route::get('/laporan/v_rental_kaset/print', [ViewMemberKasetpdf::class, 'print']);


