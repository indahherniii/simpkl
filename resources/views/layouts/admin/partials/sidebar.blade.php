<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-primary">

        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">MASTER DATA</h4>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#users">
            <i class="fas fa-users"></i>
            <p>Users</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="users">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ url('admin/mahasiswa') }}">
                  <span class="sub-item">Mahasiswa</span>
                </a>
              </li>
              <li>
                <a href="{{ url('admin/dosen') }}">
                  <span class="sub-item">Dosen</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#data">
            <i class="fas fa-database"></i>
            <p>Data</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="data">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ url('admin/instansi') }}">
                  <span class="sub-item">Instansi</span>
                </a>
              </li>
              <li>
                <a href="{{ url('admin/pkl') }}">
                  <span class="sub-item">PKL</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#laporan">
            <i class="fas fa-file"></i>
            <p>Laporan</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="laporan">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ url('admin/kegiatan_harian') }}">
                  <span class="sub-item">Kegiatan Harian</span>
                </a>
              </li>
              <li>
                <a href="{{ url('admin/daftar_hadir') }}">
                  <span class="sub-item">Daftar Hadir</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
