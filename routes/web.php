<?php

use Illuminate\Support\Facades\Route;


// Admin

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin/mahasiswa', function () {
    return view('admin.master-data.mahasiswa.index');
});

Route::get('/admin/mahasiswa/create', function () {
    return view('admin.master-data.mahasiswa.create');
});

Route::get('/admin/pegawai', function () {
    return view('admin.master-data.pegawai.index');
});

Route::get('/admin/jurusan', function () {
    return view('admin.master-data.jurusan.index');
});

Route::get('/admin/instansi', function () {
    return view('admin.master-data.instansi.index');
});

Route::get('/admin/instansi/create', function () {
    return view('admin.master-data.instansi.create');
});

Route::get('/admin/pkl', function () {
    return view('admin.master-data.pkl.index');
});

Route::get('/admin/pkl/create', function () {
    return view('admin.master-data.pkl.create');
});

Route::get('/admin/kegiatan_harian', function () {
    return view('admin.master-data.kegiatan_harian.index');
});

Route::get('/admin/kegiatan_harian/create', function () {
    return view('admin.master-data.kegiatan_harian.create');
});

Route::get('/admin/profile', function () {
    return view('admin.profile.index');
});

Route::get('/admin/profile/edit', function () {
    return view('admin.profile.edit');
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

Route::get('/mahasiswa/pkl', function () {
    return view('mahasiswa.pkl.index');
});

Route::get('/mahasiswa/instansi', function () {
    return view('mahasiswa.instansi.index');
});

Route::get('/mahasiswa/profile', function () {
    return view('mahasiswa.profile.edit');
});

Route::get('/mahasiswa/profile/edit', function () {
    return view('mahasiswa.profile.edit');
});
