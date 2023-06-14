<?php

use Illuminate\Support\Facades\Route;


// Admin

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin/mahasiswa', function () {
    return view('admin.master-data.mahasiswa.index');
});

Route::get('/admin/dosen', function () {
    return view('admin.master-data.dosen.index');
});

Route::get('/admin/jurusan', function () {
    return view('admin.master-data.jurusan.index');
});

Route::get('/admin/instansi', function () {
    return view('admin.master-data.instansi.index');
});

Route::get('/admin/pkl', function () {
    return view('admin.master-data.pkl.index');
});

Route::get('/admin/kegiatan_harian', function () {
    return view('admin.master-data.kegiatan_harian.index');
});

Route::get('/admin/daftar_hadir', function () {
    return view('admin.master-data.daftar_hadir.index');
});

Route::get('/profile', function () {
    return view('admin.profile.edit');
});

Route::get('/profile', function () {
    return view('admin.profile.index');
});

// Mahasiswa

Route::get('/mahasiswa/dashboard', function () {
    return view('mahasiswa.dashboard');
});

Route::get('/mahasiswa/persyaratan', function () {
    return view('mahasiswa.persyaratan.index');
});

Route::get('/mahasiswa/lowongan', function () {
    return view('mahasiswa.lowongan.index');
});
