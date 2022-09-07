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
                         LEAFLET
                        </center>
                      </h2>

                      <br>
                      <h3 align=>
                        <b>TEMBAKAU MADURA
                        </b>
                      </h3>
                      <br>
                      
                      <img src="../assets/images/leaflet1.jpg"
                      alt="banner" class="img-fluid"/>
                      &emsp;
                      <img src="../assets/images/leaflet2.jpg"
                      alt="banner" class="img-fluid"/>



                      <br>
                      <h3 class=" mt-4">
                        <b>PROSESING TEMBAKAU RAJANGAN TEMANGGUNG
                        </b>
                      </h3>
                      <br>
                      
                      <img src="../assets/images/prosesingtembakautemanggung1.jpg"
                      alt="banner" class="img-fluid"/>
                      &emsp;
                      <img src="../assets/images/prosesingtembakautemanggung2.jpg"style="height: 400px;width: 700px"
                      alt="banner" class="img-fluid"/>

                      <br>
                      <h3 class=" mt-4">
                        <b>ALAT DAN MESIN PERAJANG DAUN TEMBAKAU
                        </b>
                      </h3>
                      <br>
                      
                      <img src="../assets/images/mesintembakau.jpg"
                      alt="banner" class="img-fluid"/>
                      &emsp;
                      <img src="../assets/images/mesinrajangtembakau2.jpg"style="height: 400px;width: 700px"
                      alt="banner" class="img-fluid"/>
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
                          <h3 class="mt-3 font-weight-600">
                            
                          
                          </h3>
         
                        </div>
                        <div class="mb-4">
                           <a href="{{ url('/tentang/layanan/2') }}"><div class="rotate-img">
                            <img
                              src="{{ asset('assets/images/zona_integritas.jpg') }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div></a>
                          <h3 class="mt-3 font-weight-600">
                           
                          </h3>
         
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
