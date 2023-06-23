@extends('layouts.mahasiswa.main')

@section('container')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Kegiatan Harian</h4>
    </div>
    <div class="row">


      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Laporan Kegiatan Harian</h4>
              <a href="{{ url('/mahasiswa/kegiatan_harian/create') }}" class="btn btn-primary">
                <span class="btn-label">
                  <i class="fa fa-plus"></i>
                </span>
                Tambah Kegiatan
              </a>
            </div>
          </div>

          <div class="card-body">
            <div class="card">
              <div class="card-header">
                <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width: 10%">Aksi</th>
                        <th>Hari/Tanggal</th>
                        <th>Uraian Kegiatan</th>
                        <th>Tanda Tangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-button-action">
                            <div class="form-button-action">
                              <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                              <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td>Senin, 26 September 2022</td>
                        <td>Crimping Kabel</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </hr>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
