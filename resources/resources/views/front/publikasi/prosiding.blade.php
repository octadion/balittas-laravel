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
                         PROSIDING
                        </center>
                      </h2>

                      <h3 align=>
                        <b>Prosiding Seminar Nasional Tebu 2018</b>
                      </h3>
                      <br>

                      <p align=justify>
                        &emsp;&emsp;
                        Prosiding ini berisi 1 makalah kunci (keynote speech), 6 makalah utama, dan 25 makalah penunjang yang disampaikan dalam bentuk poster. Makalah-makalah tersebut membahas inovasi teknologi budi daya tebu, serta hasil-hasil penelitian dalam bidang pemuliaan, bioteknologi, budi daya, hama, penyakit, pascapanen, dan sosial ekonomi. Prosiding ini diharapkan dapat menambah wawasan terutama bagi masyarakat yang berkecimpung dalam agribisnis tebu baik langsung maupun tidak langsung, 
                        antara lain: petani, penyuluh, pengelola/pengusaha, dinas terkait, dosen, peneliti, dan pengambil kebijakan.</p>
                        <span style="color: #0000ff;"><em><strong><a style="color: #0000ff;" href="https://drive.google.com/file/d/1TvGXR3W6rWot3-5RBmjVB7WhsE_7S6MJ/view?usp=sharing">File lengkap PROSIDING SEMINAR NASIONAL TEBU 2018 - 25 MB</a></strong></em></span>
                        
                        <p>Atau dibaca disini.&nbsp;</p>
                        <iframe src="https://online.fliphtml5.com/rrrnw/xkhd/" width="640" height="480" frameborder="0" scrolling="no" seamless="seamless" allowfullscreen="allowfullscreen"></iframe>
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
