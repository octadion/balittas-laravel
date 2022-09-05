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
                         JURNAL PENELITIAN
                        </center>
                      </h2><br>

                      <h3 align=>
                        <center>
                        <b>Wijen
                        </b></center>
                      </h3>
                      <p>SOENARDI dan MOCH. ROMLI. 1999. <strong>Interval Waktu Tanam Terhadap Pertumbuhan.dan Produksi Empat Galur Wijen.</strong>
                        Jurnal Penelitian Tanaman Industri 4(5), Januari 1999 Hlm 145-151.<br>
                        <a href="http://balittas.litbang.pertanian.go.id/images/jurnal/kenaf/kebhresp.pdf"><button type="button" class="btn btn-success">DOWNLOAD</button></a>
                        <span style="font-family: Calisto MT"><b>Makalah lengkap (pdf. 334.50 kb)</b></span><br> </span>
                      </p>

                      <h3 align=>
                        <center>
                        <b>Abaka
                        </b></center>
                      </h3>
                      <p>PURWATI, R.D.,UNTUNG S.B., SUDARSONO. 2007. <strong>
                          Penggunaan asam fusarat dalam seleksi in vitro untuk resistensi abaka terhadap Fusarium oxysporum f.sp.cubense.</strong> Jurnal Litri 13(2), Juni 2007 Hlm 64-72.<br>
                          <button type="button" class="btn btn-success">DOWNLOAD</button>
                          <span style="font-family: Calisto MT"><b>Makalah lengkap (pdf. 1.37 mb)</b></span><br> </span>
                      </p>

                      <h3 align=>
                        <center>
                        <b>Kenaf
                        </b></center>
                      </h3>
                      <p>BAMBANG HELIYANTO, DJUMALI, SUDJINDRO, dan A. SASTROSUPADI. 1998. <strong>
                        Respon Berbagai Aksesi Kenaf dan Rosela Terhadap Aluminium dan Tanah Podsolik Merah Kuning Di Daerah Jorong Kalimantan Selatan.</strong> urnal Penelitian Tanaman Industri 4(3), September 1998 Hlm 73-78.<br>
                          <button type="button" class="btn btn-success">DOWNLOAD</button>
                          <span style="font-family: Calisto MT"><b>Makalah lengkap (pdf. 189.07 kb)</b></span><br> </span>
                      </p>

                      <h3 align=>
                        <center>
                        <b>Kapas
                        </b></center>
                      </h3>
                      <p>IG.A.A. INDRAYANI, DWI WINARNO, dan SOEBANDRIJO. 1998. <strong>
                        Efektivitas NPV Dengan Berbagai Bahan Pembawa Terhadap Spodoptera litura F. dan Helicoverpa armigera Hubner Pada Kapas.</strong> Jurnal Penelitian Tanaman Industri 4(1), Mei 1998 Hlm 1-7.<br>
                          <button type="button" class="btn btn-success">DOWNLOAD</button>
                          <span style="font-family: Calisto MT"><b>Makalah lengkap (pdf. 620.54 kb)</b></span><br> </span>
                      </p>

                      <h3 align=>
                        <center>
                        <b>Tembakau
                        </b></center>
                      </h3>
                      <p>FATKHUR ROCHMAN, SUWARSO, SOERJONO, ABDUL RACHMAN SK, dan ANIK HERWATI. 1998. <strong>
                        Potensi Hasil dan Mutu Galur Harapan Tembakau Temanggung.</strong> Jurnal Penelitian Tanaman Industri 4(1), Mei 1998 Hlm 18-23.<br>
                          <button type="button" class="btn btn-success">DOWNLOAD</button>
                          <span style="font-family: Calisto MT"><b>Makalah lengkap (pdf. 292.51 kb)</b></span><br> </span>
                      </p>

                      <h3 align=>
                        <center>
                        <b>Rami
                        </b></center>
                      </h3>
                      <p>UNTUNG SETYO-BUDI, SUDJINDRO, dan BAMBANG HELIYANTO. 1999. <strong>
                        Potensi Hasil dan Mutu Galur Harapan Tembakau Temanggung.</strong> Jurnal Penelitian Tanaman Industri 4(3), September 1998 Hlm 79-84.<br>
                          <button type="button" class="btn btn-success">DOWNLOAD</button>
                          <span style="font-family: Calisto MT"><b>Makalah lengkap (pdf. 354.30 kb)</b></span><br> </span>
                      </p>

                         
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
