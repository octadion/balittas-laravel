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
          <li class="nav-item{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
            <a href="{{ url('admin/dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Data Master</li>
          <li class="dropdown {{ (request()->is('admin/variety')) || (request()->is('admin/data_variety')) || (request()->is('admin/data_variety/*')) ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Data Master</span></a>
            <ul class="dropdown-menu">
            <li class="{{ (request()->is('admin/variety')) ? 'active' : '' }}"><a href="{{ url('admin/variety') }}" class="nav-link"><span>Varietas</span></a></li>
            <li class="{{ (request()->is('admin/data_variety')) || (request()->is('admin/data_variety/*')) ? 'active' : '' }}"><a href="{{ url('admin/data_variety') }}" class="nav-link"><span>Data</span></a></li>
          </ul>
          </li>
          {{-- <li class="nav-item {{ (request()->is('admin/data_variety')) ? 'active' : '' }}">
            <a href="{{ url('admin/data_variety') }}" class="nav-link"><span>Data</span></a>
          </li> --}}
          <li class="menu-header">Manajemen Publikasi</li>
          <li class="dropdown {{ (request()->is('admin/kategori')) || (request()->is('admin/post')) || (request()->is('admin/post/*'))  ?  'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Publikasi</span></a>
            <ul class="dropdown-menu">
            <li class="{{ (request()->is('admin/kategori')) ? 'active' : '' }}">
              <a href="{{ url('admin/kategori') }}" class="nav-link">
               <span>Kategori</span></a></li>
              <li class="{{ (request()->is('admin/post')) || (request()->is('admin/post/*')) ? 'active' : '' }}"> <a href="{{ url('admin/post') }}" class="nav-link">
                <span>Post</span></a></li>
              </ul></li>
          {{-- <li class="nav-item {{ (request()->is('admin/post')) ? 'active' : '' }}">
            <a href="{{ url('admin/post') }}" class="nav-link">
              <i class="fas fa-file-alt"></i> <span>Post</span></a>
          </li> --}}
          <li class="menu-header">Manajemen Web</li>
          <li class="nav-item {{ (request()->is('admin/about')) || (request()->is('admin/about/*')) ? 'active' : '' }}">
            <a href="{{ url('admin/about') }}" class="nav-link">
              <i class="fas fa-folder"></i> <span>Tentang</span></a>
          </li>
          <li class="nav-item {{ (request()->is('admin/public_info')) || (request()->is('admin/public_info/*')) ? 'active' : '' }}">
            <a href="{{ url('admin/public_info') }}" class="nav-link">
              <i class="fas fa-info-circle"></i> <span>Informasi Publik</span></a>
          </li>
          <li class="dropdown {{ (request()->is('admin/galeri')) || (request()->is('admin/info')) || (request()->is('admin/banner/*'))  ?  'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe"></i><span>Web</span></a>
            <ul class="dropdown-menu">
            <li class="{{ (request()->is('admin/galeri')) ? 'active' : '' }}">
              <a href="{{ url('admin/galeri') }}" class="nav-link">
               <span>Galeri</span></a></li>
              {{-- <li class="{{ (request()->is('admin/info')) || (request()->is('admin/info/*')) ? 'active' : '' }}"> <a href="{{ url('admin/info') }}" class="nav-link">
                <span>Informasi</span></a></li> --}}
              </ul></li>
          <li class="menu-header">Manajemen User</li>
          @if(in_array("admin", Auth::user()->roles->toArray()))
          <li class="nav-item {{ (request()->is('admin/user')) ? 'active' : '' }}">
            <a href="{{ url('admin/user') }}" class="nav-link"><i class="fas fa-users"></i> <span>Akun</span></a>
          </li>
          @endif
          <li class="nav-item {{ (request()->is('admin/profile/*')) ? 'active' : '' }}">
            <a href="{{ url('admin/profile', [Auth::user()->id]) }}" class="nav-link"><i class="fas fa-user"></i> <span>Profil</span></a>
          </li>
    
    </aside>
  </div>