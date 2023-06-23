@extends('layouts.mahasiswa.main')

@section('container')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Persyaratan PKL</h4>
    </div>
    <div class="row">


      <div class="col-md-12">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h4 class="card-title">Syarat Mengikuti Praktik Kerja Lapangan</h4>
          </div>
        </div>
        <div class="card card-wide">
          <div class="card-body">
            <h5 class="card-title">Persyaratan Magang</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Persyaratan Umum:</h6>
                    <ul class="card-text">
                      <li>Mahasiswa aktif dengan status terdaftar</li>
                      <li>IPK minimal 3.0</li>
                      <li>Mengikuti seleksi wawancara</li>
                      <li>Menyertakan surat rekomendasi dari fakultas</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-center">
                  <div class="card-body">
                    <h6 class="card-title">Upload Persyaratan</h6>
                    <p class="card-text">Silakan unggah berkas persyaratan melalui tombol di bawah ini:</p>
                    <button class="btn btn-primary">
                      <span class="btn-label">
                        <i class="fa fa-upload"></i>
                      </span>
                      Upload Persyaratan
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
