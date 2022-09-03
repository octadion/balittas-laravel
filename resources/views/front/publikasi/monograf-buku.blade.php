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
                         MONOGRAF ATAU BUKU
                        </center>
                      </h2>

                      <h3 align=>
                        <b>Bunga Rampai Tembakau Madura</b>
                      </h3>
                      <br>

                      <p align=justify>
                        &emsp;&emsp;
                        Tembakau (Nicotiana tabacum Linn.) adalah tanaman asli benua Amerika dan masuk ke Indonesia sekitar 400 tahun lalu, sehingga sudah 
                        lama beradaptasi dengan lingkungan tumbuh yang beragam di Indonesia. Salah satu sentra utama tembakau di Indonesia 
                        adalah Pulau Madura, di mana tembakau telah diintroduksikan di Kabupaten Sumenep, Pamekasan dan Sampang sekitar 170 tahun yang lalu.
                        Tanaman tembakau mulai ditanam di Madura untuk tujuan komersial sekitar tahun 1861 oleh tiga orang Belanda, dan ternyata berhasil. Awalnya, pada saat sistem 
                        tanam paksa (cultuurstelsel) mulai diberlakukan oleh pemerintahan penjajah Belanda pada tahun 1830, komoditas tembakau dianggap tidak sesuai untuk dibudidayakan di Madura. Alasannya adalah Pulau Madura beriklim kering dan tanahnya berkapur. Oleh karena Pulau Madura tidak dapat menyediakan lahan untuk sistem Tanam Paksa, maka banyak petani Madura yang dipaksa bekerja di perkebunan tembakau di Jawa. Namun berkat dukungan keterampilan berbudidaya tembakau dari petani Madura yang diperoleh di perkebunan tembakau di Jawa, akhirnya komoditas 
                        tembakau dapat dibudidayakan dan dikembangkan di Kabupaten Sumenep, Pamekasan, dan Sampang.(Fulltext : Bunga Rampai - Tembakau Madura)</p>
                        
                        <p>Atau dibaca disini.&nbsp;</p>
                        <p><iframe src="https://online.fliphtml5.com/rrrnw/nzpx/" width="640" height="480" frameborder="0" scrolling="no" seamless="seamless" allowfullscreen="allowfullscreen"></iframe></p>
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
                          <div class="rotate-img">
                            <img
                              src="{{ asset('assets/images/beraklak.jpeg') }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            <a href="{{ url('/tentang/layanan/1') }}"> Core Values ASN BerAkhlak</a>
                          
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="{{ asset('assets/images/zona_integritas.jpg') }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            <a href="{{ url('/tentang/layanan/2') }}">Zona Integritas</a>
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
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
