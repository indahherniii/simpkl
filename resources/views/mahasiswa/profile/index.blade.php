@extends('layouts.mahasiswa.main')

@section('container')
  <div class="page-inner">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="profile-picture">
              <img src="{{ url('template/assets/img/profile3.jpg') }}" alt="Foto Mahasiswa" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Data Mahasiswa</h4>
              <a href="{{ url('/mahasiswa/profile/edit') }}" class="btn btn-primary">
                <span class="btn-label">
                  <i class="fa fa-edit"></i>
                </span>
                Edit
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-1">
              <div class="col-md-4">Nama Lengkap</div>
              <div class="col-md-8">Indah Putri Herni</div>
            </div>
            <div class="row mb-1">
              <div class="col-md-4">NIM</div>
              <div class="col-md-8">3042020004</div>
            </div>
            <div class="row mb-1">
              <div class="col-md-4">Jenis Kelamin</div>
              <div class="col-md-8">Perempuan</div>
            </div>
            <div class="row mb-1">
              <div class="col-md-4">Program Studi</div>
              <div class="col-md-8">Teknologi Informasi</div>
            </div>
            <div class="row mb-1">
              <div class="col-md-4">Agama</div>
              <div class="col-md-8">Islam</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
