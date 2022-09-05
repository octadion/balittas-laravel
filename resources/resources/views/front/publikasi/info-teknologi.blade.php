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
                    <h2 class="font-weight-600 mb-4"style="color:#000000;">
                        <center>
                         INFO TEKNOLOGI
                        </center>
                      </h2><br>

                      <h3 align=>
                        <b>Tanaman Mimba (Azadirachta indica a. Juss.) sebagai Pestisida Ramah Lingkungan
                        </b>
                      </h3><br>

                      <center><img src="../assets/images/MIMBA.png"
                      alt="banner" class="img-fluid" height="450" width="550"/></center>
                      
                      <p>Aji Pangestu</p>
                      <p><strong>Pendahuluan</strong></p>
                      
                      <p align=justify>
                        &emsp;&emsp;
                        Kurangnya pengetahuan serta kepedulian petani terhadap lingkungan menjadi salah satu faktor pemicu kerusakan alam, 
                        hal ini diperburuk dengan begitu mudahnya petani membeli atau memperoleh obat pertanian kimia sehingga petani dapat 
                        menggunakan pestisida kimia secara terus-menerus. Selain rusaknya alam akibat penggunaan pestisida kimia, residu yang 
                        tertinggal dalam produk pertanian dapat berbahaya bagi kesehatan dalam jangka panjang. Salah satu solusinya adalah 
                        penggantian atau pengendalian terpadu menggunakan pestisida nabati. Pestisida nabati dapat mengendalikan hama dan 
                        penyakit pada tanaman namun bersifat ramah terhadap lingkungan dan relatif lebih aman dari segi kesehatan (Ruskin et al., 1992). 
                        Alasan keamanan pestisida nabati dijelaskan oleh Suprapta (2003), bahan dasar pestisida nabati aman bagi manusia dan ternak 
                        karna bersifat mudah terurai di alam sehingga tidak mencemari lingkungan dan relatif aman karena residunya mudah hilang.</p>

                      <p align=justify>
                        &emsp;&emsp;
                        Mimba (Azadirachta indica A. Juss.) merupakan salah satu alternatif pengendalian hama dengan berbagai bahan aktif yang 
                        terkandung, mimba merupakan pestisida nabati yang memiliki kemampuan anti-bakterial dan insektisidal sehingga dapat 
                        digunakan sebagai pengendali Organisme Pengganggu Tanaman (OPT).</p>
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
