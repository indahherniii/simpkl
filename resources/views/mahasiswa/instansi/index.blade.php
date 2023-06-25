@extends('layouts.mahasiswa.main')

@section('container')
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-tittle">Instansi</h4>
      </div>
      <div class="form-group">
        <div class="input-icon">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-icon-addon">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <img src="{{ url('template/assets/img/contohP.jpg') }}" class="card-img-top" alt="Gambar Instansi">
              <div class="card-body">
                <h5 class="card-title">Instansi Miller</h5>
                <div class="row mt-3">
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Lowongan</h6>
                      <p>10</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Terisi</h6>
                      <p>7</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Tersisa</h6>
                      <p>3</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <img src="{{ url('template/assets/img/contohP.jpg') }}" class="card-img-top" alt="Gambar Instansi">
              <div class="card-body">
                <h5 class="card-title">PT PLN (Persero) UP3 Ketapang</h5>
                <div class="row mt-3">
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Lowongan</h6>
                      <p>5</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Terisi</h6>
                      <p>2</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Tersisa</h6>
                      <p>3</p>
                    </div>
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
