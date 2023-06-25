@extends('layouts.admin.main')

@section('container')
  <div class="page-inner">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="profile-picture">
              <img src="{{ url('template/assets/img/profile3.jpg') }}" alt="Foto Admin" class="img-fluid">
            </div>
          </div>
          <div class="card-footer text-right">
            <a href="#" class="btn btn-sm btn-primary">
              <span class="btn-label">
                <i class="fa fa-user-edit"></i>
              </span>
              Ganti Foto
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Edit Profile</h4>
            </div>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
              </div>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
              </div>
              <div class="form-group">
                <label for="jurusan">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan">
              </div>
              <div class="form-group">
                <label for="program-studi">Program Studi</label>
                <input type="text" class="form-control" id="program-studi" placeholder="Masukkan program studi">
              </div>
              <div class="form-group">
                <label for="email">Agama</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan agama">
              </div>
              <div class="card-footer text-right">
                <a href="#" class="btn btn-sm btn-primary">
                  <span class="btn-label">
                    <i class="fa fa-save"></i>
                  </span>
                  Simpan Perubahan
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
