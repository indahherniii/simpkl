@extends('layouts.mahasiswa.main')

@section('container')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Avatars</h4>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Sizing</h4>

          </div>
          <div class="card-body">
            <p class="demo">
            <div class="avatar avatar-xxl">
              <img src="{{ url('template/assets/img/jm_denis.jpg') }}" alt="..." class="avatar-img rounded-circle">
            </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
