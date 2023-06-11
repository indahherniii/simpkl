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
          <h4 class="text-section">LIST MENU</h4>
        </li>
        <li class="nav-item {{ Request::is('admin/mahasiswa') ? 'active' : '' }}">
          <a class="nav-link" href="/admin/mahasiswa">
            <i class="fas fa-users"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/instansi') ? 'active' : '' }}">
          <a class="nav-link" href="/admin/instansi">
            <i class="fa fa-building"></i>
            <p>Instansi</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/jurusan') ? 'active' : '' }}">
          <a class="nav-link" href="/admin/jurusan">
            <i class="fas fa-university"></i>
            <p>Jurusan</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/pkl') ? 'active' : '' }}">
          <a class="nav-link" href="/admin/pkl">
            <i class="fas fa-list"></i>
            <p>PKL</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
