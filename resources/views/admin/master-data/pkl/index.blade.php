@extends('layouts.admin.main')

@section('container')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">PKL</h4>
    </div>
    <div class="row">


      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Data PKL</h4>
              <a href="{{ url('/admin/pkl/create') }}" class="btn btn-primary">
                <span class="btn-label">
                  <i class="fa fa-plus"></i>
                </span>
                Tambah PKL
              </a>
            </div>
          </div>
          <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header no-bd">
                    <h5 class="modal-title">
                      <span class="fw-mediumbold">
                        Tambah</span>
                      <span class="fw-light">
                        PKL
                      </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="small">Buat baris baru menggunakan formulir ini, pastikan Anda mengisi semuanya</p>
                    <form>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default">
                            <label>Bidang</label>
                            <input id="addName" type="text" class="form-control" placeholder="isi nim">
                          </div>
                        </div>
                        <div class="col-md-6 pr-0">
                          <div class="form-group form-group-default">
                            <label>Tempat PKL</label>
                            <input id="addPosition" type="text" class="form-control" placeholder="isi nama">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Kuota</label>
                            <input id="addOffice" type="text" class="form-control" placeholder="isi tempat pkl">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer no-bd">
                    <button type="button" id="addRowButton" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table id="add-row" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th style="width: 10%">Aksi</th>
                    <th>Bidang</th>
                    <th>Tempat PKL</th>
                    <th>Kuota</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-button-action">
                        <div class="form-button-action">
                          <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
                          <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td>Informatika</td>
                    <td>PT PLN (Persero) UP3 Ketapang</td>
                    <td>1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
