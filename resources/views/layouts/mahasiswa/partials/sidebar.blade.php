<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-primary">

        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('mahasiswa/dashboard') }}">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('mahasiswa/persyaratan') }}">
            <i class="fas fa-list"></i>
            <p>Persyaratan</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('mahasiswa/lowongan') }}">
            <i class="fas fa-search"></i>
            <p>Lowongan</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('mahasiswa/pkl') }}">
            <i class="far fa-file-alt"></i>
            <p>PKL</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('mahasiswa/instansi') }}">
            <i class="fas fa-building"></i>
            <p>Instansi</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
