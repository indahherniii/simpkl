<nav class="navbar navbar-header navbar-expand-lg navbar-dark" data-background-color="blue2">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
      <li class="nav-item dropdown hidden-caret">
        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
          <div class="avatar-sm">
            <img src="{{ url('template/assets/img/cat.png') }}" alt="..." class="avatar-img rounded-circle">
          </div>
        </a>
        <ul class="dropdown-menu dropdown-user animated fadeIn">
          <div class="dropdown-user-scroll scrollbar-outer">
            <li>
              <div class="user-box">
                <div class="avatar-lg"><img src="{{ url('template/assets/img/cat.png') }}" alt="image profile"
                    class="avatar-img rounded"></div>
                <div class="u-text">
                  <h4>Indah Putri Herni</h4>
                  <p class="text-muted">Mahasiswa</p>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('mahasiswa/profile') }}">My Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </div>
        </ul>
      </li>
    </ul>
  </div>
</nav>
