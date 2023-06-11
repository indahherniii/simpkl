<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin/mahasiswa', function () {
    return view('admin.master-data.mahasiswa.index');
});

Route::get('/admin/instansi', function () {
    return view('admin.master-data.instansi.index');
});

Route::get('/admin/jurusan', function () {
    return view('admin.master-data.jurusan.index');
});

Route::get('/admin/pkl', function () {
    return view('admin.master-data.pkl.index');
});
