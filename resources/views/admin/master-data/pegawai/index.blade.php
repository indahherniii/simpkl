@extends('layouts.admin.main')

@section('container')
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Pegawai</h4>
    </div>
    <div class="row">


      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Data Pegawai</h4>
              <a href="{{ url('/admin/instansi/create') }}" class="btn btn-primary">
                <span class="btn-label">
                  <i class="fa fa-plus"></i>
                </span>
                Tambah Pegawai
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
                        Pegawai
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
                            <label>Nama</label>
                            <input id="addName" type="text" class="form-control" placeholder="isi nama">
                          </div>
                        </div>
                        <div class="col-md-6 pr-0">
                          <div class="form-group form-group-default">
                            <label>Unit Kerja</label>
                            <input id="addPosition" type="text" class="form-control" placeholder="isi unit kerja">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Username</label>
                            <input id="addOffice" type="text" class="form-control" placeholder="isi username">
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
                    <th>Nama</th>
                    <th>Unit Kerja</th>
                    <th>Username</th>
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
                    <td>Eka Wahyudi</td>
                    <td>Prodi D3 Teknologi Informasi</td>
                    <td>ekawahyudi</td>
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
                    <td>Saifudin Usman</td>
                    <td>Prodi D3 Teknologi Informasi</td>
                    <td>saifudinusman</td>
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
                    <td>Aprianda Ibrahim</td>
                    <td>Prodi D3 Teknologi Informasi</td>
                    <td>apriandaibrahim</td>
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
                    <td>Ar-Razy Muhammad</td>
                    <td>Prodi D3 Teknologi Informasi</td>
                    <td>arrazymuhammad</td>
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
                    <td>Rustiarni</td>
                    <td>Prodi D3 Teknologi Informasi</td>
                    <td>rustiarni</td>
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
                    <td>Ani Mawar</td>
                    <td>Prodi D3 Teknik Elektro</td>
                    <td>mawarani</td>
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
                    <td>Andiawan</td>
                    <td>Prodi D3 Teknologi Pengolahan Hasil Perkebunan</td>
                    <td>andiawan</td>
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
                    <td>Suryati</td>
                    <td>Prodi D3 Teknologi Listrik </td>
                    <td>suryati</td>
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
                    <td>Suryadi</td>
                    <td>Agroindustri</td>
                    <td>suryadi</td>
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
                    <td>Rina Nala</td>
                    <td>Prodi D4 Teknik Sipil</td>
                    <td>rinanala</td>
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
