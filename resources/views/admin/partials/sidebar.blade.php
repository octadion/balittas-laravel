<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"><img src="{{ asset('assets/images/logo_balitas.png') }}" width="150" height="30"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html"><img src="{{ asset('assets/images/logo_utama.png') }}"  width="30" height="30"></a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
            <a href="{{ url('admin/dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Data Master</li>
          <li class="nav-item {{ (request()->is('admin/variety')) ? 'active' : '' }}">
            <a href="{{ url('admin/variety') }}" class="nav-link"><i class="fas fa-th-large"></i> <span>Varietas</span></a>
          </li>
          <li class="nav-item {{ (request()->is('admin/data_variety')) ? 'active' : '' }}">
            <a href="{{ url('admin/data_variety') }}" class="nav-link"><i class="fas fa-th-large"></i> <span>Data</span></a>
          </li>
          <li class="menu-header">Manajemen Publikasi</li>
          <li class="nav-item {{ (request()->is('admin/kategori')) ? 'active' : '' }}">
            <a href="{{ url('admin/kategori') }}" class="nav-link">
              <i class="fas fa-file-alt"></i> <span>Kategori</span></a>
          </li>
          <li class="nav-item {{ (request()->is('admin/post')) ? 'active' : '' }}">
            <a href="{{ url('admin/post') }}" class="nav-link">
              <i class="fas fa-file-alt"></i> <span>Post</span></a>
          </li>
          <li class="menu-header">Manajemen Web</li>
          <li class="nav-item {{ (request()->is('admin/about')) ? 'active' : '' }}">
            <a href="{{ url('admin/about') }}" class="nav-link">
              <i class="fas fa-file-alt"></i> <span>Tentang</span></a>
          </li>
          <li class="menu-header">Manajemen User</li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Akun</span></a>
          </li>
          <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>