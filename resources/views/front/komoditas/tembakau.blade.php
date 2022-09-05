@extends('front.layout')

@section('content')
    @include('front.partials.header')
    @include('front.partials.content')
         <!-- partial -->

        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                    <!-- isi konten -->
                    <h2 class="font-weight-600 mb-4"style="color:#000000;"><center>
                      TEMBAKAU
                    </center></h2>

                    <center>
                    <img src="../assets/images/mbako.jpg"
                      alt="banner" class="img-fluid" height="450" width="550"/>
                    </center><br>
                    <p align=justify>
                      &emsp;&emsp;                  
                      Isu strategis untuk komoditas tembakau adalah ditetapkannya rokok sebagai salah satu industri prioritas. 
                      Industri rokok di Indonesia 80% menggunakan bahan baku tembakau lokal. Oleh karena itu, kegiatan penelitian 
                      diprioritaskan pada tembakau lokal yang meliputi tembakau madura, tembakau te-manggung, tembakau paiton, 
                      tembakau boyolali, tembakau yogyakarta, tembakau muntilan, tembakau weleri, dan tembakau kasturi yang merupakan 
                      bahan baku utama untuk rokok keretek. Balittas juga melakukan penelitian tembakau virginia yang semula diusahakan 
                      sebagai bahan baku rokok putih, tetapi dalam perkembangannya ternyata juga sesuai untuk bahan baku rokok keretek.
                      Selain itu, Balittas juga melaksanakan penelitian untuk tembakau cerutu yang dikembangkan di Indonesia, yaitu 
                      sebagai tembakau cerutu besuki, tembakau cerutu vorstenland, dan tembakau cerutu deli. Tembakau cerutu merupakan 
                      komoditas ekspor yang sudah terkenal sejak lama. Areal pertanaman tembakau tiap tahun mencapai rata-rata 220.000 ha, 
                      sekitar 60% terdapat di Jawa Timur, selebihnya tersebar di Sumatra Utara, Jawa Barat, Jawa Tengah, Bali, dan Nusa 
                      Tenggara Barat. Pada umumnya tembakau diusahakan oleh petani berskala kecil, hanya sebagian yang diusahakan oleh 
                      BUMN dan perusahaan swasta. Sumbangan tembakau terhadap pendapatan petani dan negara cukup besar. Usaha tani dan 
                      industri tembakau dapat menghidupi 10 juta jiwa yang meliputi 4 juta petani, 600.000 orang tenaga kerja di 
                      pabrik-pabrik rokok, 4,5 juta orang yang terlibat dalam perdagangan, dan 900.000 orang terlibat dalam transportasi 
                      dan periklanan. Tembakau memberikan sumbangan pendapatan negara dalam bentuk cukai yang mencapai 42 triliun rupiah (2007), 
                      dan devisa dari ekspor tembakau sebesar 1,9 triliun rupiah. Kendala-kendala yang dihadapi dalam pengembangan tembakau adalah 
                      rendahnya produktivitas dan beragamnya mutu yang dihasilkan, serta tekanan masyarakat interna-sional terkait isu kesehatan. 
                      Oleh karena itu penelitian tembakau diarahkan pada peningkatan produktivitas dan mutu tembakau, serta mengurangi senyawa-senyawa 
                      yang mempengaruhi kesehatan perokok misalnya kandungan nikotin yang lebih rendah. Beberapa hasil penelitian yang telah dicapai 
                      Balittas sampai dengan saat ini adalah:</p>
                      <br>

                      <h3 align="center"><b>Tembakau Temaggung</b></h3>
                          <li align="justify">Varietas-varietas anjuran untuk lahan tegal dan sawah yaitu Kemloko 1 
                                    dengan indeks mutu: 37,34-47,18; nikotin: 3,75-8,65%; gula: 3,89%; dan Kemloko 2 dengan indeks mutu: 34,86-45,70; nikotin: 2,06-8,98%; gula: 2,96%.</li>
                          <li>Rekomendasi pemupukan untuk lahan tegal dan sawah.</li>
                          <li>Teknik pengendalian penyakit lincat yang disebabkan oleh nematoda, jamur, dan bakteri</li>
                          <li>Teknologi konservasi lahan, khususnyalahan tegal.</li><br>

                          <h3 align="center"><b>Tembakau Madura</b></h3>
                              <li>Varietas-varietas Cangkring-95, Prancak-95, Prancak N-1 dan Prancak N-2</li>
                              <li>Rekomendasi pemupukan untuk lahan tegal dan sawah</li>
                              <li>Peta kesesuaian lahan</li>
                              <li>Cara panen serentak untuk petani skala kecil</li>
                              <li>Teknik pemeraman</li><br>
                          
                          <h3 align="center"><b>Tembakau Virginia</b></h3>
                              <li>Varietas-varietas yang sesuai untuk ma-sing-masing daerah pengembangan Coker 176 (NTB, Jatim, Jateng), Coker 319 (Bojonegoro dan sekitarnya), 
                                  DB 101 (Bojonegoro dan sekitarnya), Bjn 1 (Bo-jonegoro), PVH 20, PVH 21, NC 100, dan PVH 09 (NTB, Jatim, Jateng),</li>
                              <li>Teknik pembenihan</li>
                              <li>Teknik pembibitan dengan sistem nampan</li>
                              <li>Rekomendasi pemupukan untuk tanah berat dan ringan</li><br>
                          
                          <h3 align="center"><b>Tembakau burley</b></h3>
                              <li>Varietas NC 3, HB 14 P, TN 90</li>
                              <li>Pengendalian vektor viru</li><br>
                          
                          <h3 align="center"><b>Tembakau boyolali</b></h3>
                              <li>Varietas Grompol Jatim 1</li>
                              <li>Rekomendasi pemupukan untuk lahan sawah</li>

                    </div>

                    <div class="col-lg-4">
                      <h2 class="mb-4  font-weight-600"style="color:#A4C639;">
                        Berita Populer
                      </h2>
                      @if ($populer_post)
                       @foreach ($populer_post as $post2)
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                              <div class="row">
                                <div class="col-sm-8">
                                  <h5 class="font-weight-600 mb-1">
                                    <a href="../tentang/berita/{{ $post2->slug }}">{{  (str_word_count(strip_tags(html_entity_decode( $post2->title ))) > 9 ? substr(strip_tags(html_entity_decode( $post2->title )),0,35)."[..]" : strip_tags(html_entity_decode( $post2->title )))  }}</a>
                                  </h5>
                                  <p class="fs-13 text-muted mb-0">
                                    <span><i class="fas fa-eye"></i> {{ $post2->views }}</span>
                                  </p>
                                </div>
                                <div class="col-sm-4">
                                  <div class="rotate-img">
                                    <img
                                      src="/upload/post/thumbnail/{{ $post2->thumbnail }}"
                                      alt="banner"
                                      class="img-fluid"
                                      height="50"width="150"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       @endforeach
                      @endif

                      <div class="trending">
                        <h2 class="mb-4 mt-4 font-weight-600"style="color:#A4C639;">
                          Informasi Publik
                        </h2>
                        <div class="mb-4">
                          <a href="{{ url('/tentang/layanan/1') }}"><div class="rotate-img">
                            <img
                              src="{{ asset('assets/images/beraklak.jpeg') }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div></a>
                        </div>
                        <div class="mb-4">
                           <a href="{{ url('/tentang/layanan/2') }}"><div class="rotate-img">
                            <img
                              src="{{ asset('assets/images/zona_integritas.jpg') }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div></a>
                        </div>
             
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 


    @include('front.partials.footer')
@endsection
