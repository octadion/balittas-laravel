   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
            <img src="/assets/images/logo_utama.png" alt="logo" class="logo-dark default load-imgs mover mx-auto">
        </div>
    </div>   --}}
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <a href="https://wa.me/6285334638792"><img src="{{ asset('assets/images/wa3.gif') }}" class="buttonchat"></a>
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
<li>
  <div class="search">
   
    <div>
      <input type="text" placeholder="Search . . ." required>
    </div>
  </div></li>
  </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li>



              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a></li>
              @auth
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a></li>
              @endauth
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>


            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
     
      <nav class="navbar navbar-expand-lg">
       
        <div class="container">
           
          <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo_balitas.png') }}" alt="logo" class="logo-dark default navlogo-cust"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
           
            <ul class="navbar-nav ml-auto">
              <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tentang</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Sejarah</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Berita</a>
                    <a href="single.html" class="dropdown-item">Organisasi</a>
                    <a href="single.html" class="dropdown-item">Visi & Misi</a>
                    <a href="single.html" class="dropdown-item">Organisasi</a>
                    <a href="single.html" class="dropdown-item">Sumber Daya Manusia</a>
                </div>
            </div> 
              <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Publikasi</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Buletin</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Prosiding</a>
                    <a href="single.html" class="dropdown-item">Monograf/Buku</a>
                    <a href="single.html" class="dropdown-item">Info Teknologi</a>
                    <a href="single.html" class="dropdown-item">Leflet</a>
                    <a href="single.html" class="dropdown-item">Jurnal Penelitian Tanaman Industri</a>
                     <a href="single.html" class="dropdown-item">Lain-lain</a>
                </div>
            </div>                         
              <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Komoditas</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Pemanis</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Tembakau</a>
                    <a href="single.html" class="dropdown-item">Serat Buah</a>
                    <a href="single.html" class="dropdown-item">Serat Batang dan daun</a>
                    <a href="single.html" class="dropdown-item">Tanaman Penghasil Serat Industri</a>
            
                </div>
            </div> 
                  <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produk</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Varietas Unggul</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Hak Kekayaan Intelektual</a>

                </div>
            </div> 
              <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Publikasi</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Penghargaan</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Zona Integritas</a>
                    <a href="single.html" class="dropdown-item">Indeks Kepuasan Masyarakat</a>
                    <a href="single.html" class="dropdown-item">Public Hearing</a>
                    <a href="single.html" class="dropdown-item">Portal PPID Balittas</a>
                    <a href="single.html" class="dropdown-item">Core Values ASN BerAkhlak</a>
                 
                </div>
            </div> 
              <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Inovasi Layanan</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Penyediaan Benih Sumber</a>
                    <a href="single.html" class="dropdown-item">Laboratorium Benih</a>
                    <a href="single.html" class="dropdown-item">Perpustakaan</a>          
                </div>
            </div>
              <div class="nav-item {{ (request()->is('tentang/sejarah*')) ? 'active' : '' }} dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kontak</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('tentang/sejarah') }}" class="dropdown-item">Layanan Pengaduan</a>
                    <a href="{{ url('tentang/listnews') }}" class="dropdown-item">Kepuasan Pelanggan</a>
                </div>
            </div>

     <!--       
              <li class="nav-item">
             
                <div class="search">
                <a class="nav-link" ><i class="fa-solid fa-magnifying-glass"></i>
                  <div class="btn">
                <input type="text" class="input" placeholder="Search..."></a>
                  </div>
                    </div>
              </li>





     <div class="search">  
    <input type="text" class="input" placeholder="Search...">  
    <button class="btn">  
     <i class="fas fa-search"></i>  
    </button>  
   </div>  
              <div class="search2">
                <input type="text" class="input" placeholder="Search..."> 
                <a class="btn2"> <i class="fas fa-search"></i>  </a>
              </div>

-->

            </ul>
          </div>
          </div>

        </div>
      </nav>

    </header>
