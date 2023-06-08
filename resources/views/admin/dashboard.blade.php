@extends('layouts.admin.main')

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
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar avatar-xl">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar avatar-lg">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar avatar-sm">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar avatar-xs">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Status Indicator</h4>

          </div>
          <div class="card-body">
            <p class="demo">
            <div class="avatar avatar-online">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar avatar-offline">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>

            <div class="avatar avatar-away">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Shape</h4>

          </div>
          <div class="card-body">
            <p class="demo">
            <div class="avatar">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded">
            </div>

            <div class="avatar">
              <img src="template/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Group</h4>

          </div>
          <div class="card-body">
            <p class="demo">
            <div class="avatar-group">
              <div class="avatar">
                <img src="template/assets/img/jm_denis.jpg" alt="..."
                  class="avatar-img rounded-circle border border-white">
              </div>
              <div class="avatar">
                <img src="template/assets/img/chadengle.jpg" alt="..."
                  class="avatar-img rounded-circle border border-white">
              </div>
              <div class="avatar">
                <img src="template/assets/img/mlane.jpg" alt="..."
                  class="avatar-img rounded-circle border border-white">
              </div>
              <div class="avatar">
                <span class="avatar-title rounded-circle border border-white">CF</span>
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
