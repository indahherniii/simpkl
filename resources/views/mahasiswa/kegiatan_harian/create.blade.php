@extends('layouts.mahasiswa.main')

@section('container')
  <div class="page-inner">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Kegiatan Harian</h4>
        <form>
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>
          <div class="form-group">
            <label for="uraian">Uraian Kegiatan</label>
            <textarea class="form-control" id="uraian" name="uraian" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="tanda-tangan">Tanda Tangan</label>
            <div class="row">
              <div class="col-md-6">
                <input type="file" id="tanda-tangan" name="tanda-tangan" accept="image/*">
              </div>
            </div>
          </div>
          <div class="card-footer text-right">
            <a href="{{ url('/mahasiswa/kegiatan_harian') }}" class="btn btn-sm btn-primary">
              <span class="btn-label">
                <i class="fa fa-save"></i>
              </span>
              Simpan
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
