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
                          CORE VALUES BERAKHLAK
                      </center>
                    </h2>
                    <br>
                    <center><img src="../assets/images/brbr.jpg"
                      alt="banner" class="img-fluid"/></center><br>
                    
                    <p align="justify">
                      BerAKHLAK merupakan akronim dari Berorientasi Pelayanan, Akuntabel, Kompeten, Harmonis, Loyal, Adaptif, dan Kolaboratif. Adanya Core Values ASN ini sebagai sari dari nilai-nilai dasar ASN sesuai dengan Undang-Undang No. 5 Tahun 2014 tentang Aparatur Sipil Negara dalam satu kesamaan persepsi yang lebih mudah dipahami dan diterapkan oleh seluruh ASN. Sedangkan #banggamelayanibangsa merupakan Employer Branding ASN jaman now yang melayani sepenuh hati.
                      Core Values ASN menjadi titik tonggak penguatan budaya kerja, yang tidak hanya dilakukan pada ASN tingkat pusat namun juga pada tingkat daerah, sebagaimana pesan Presiden Joko Widodo “ASN yang bertugas sebagai pegawai pusat maupun pegawai daerah harus mempunyai core values yang sama.”</p>
                    <h5>Berorientasi Pelayanan :</h5>
                    <ol>
                      <li>Memahami dan memenuhi kebutuhan masyarakat.</li>
                      <li>Ramah, cekatan, solutif, dan dapat diandalkan.</li>
                      <li>Melakukan perbaikan tiada henti.</li>
                    </ol>
                    
                    <h5>Akuntabel :</h5>
                    <ol>
                      <li>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, serta disiplin dan berintegritas tinggi.</li>
                      <li>Menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif dan efisien.</li>
                      <li>Tidak menyalahgunakan kewenangan jabatan.</li>
                    </ol> 

                    <h5>Harmonis :</h5>
                    <ol>
                      <li>Menghargai setiap orang apapun latar belakangnya.</li>
                      <li>Suka menolong orang lain.</li>
                      <li>Membangun lingkungan kerja yang kondusif.</li>
                    </ol>

                    <h5>Loyal :</h5>
                    <ol>
                      <li>Memegang teguh ideologi Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.</li>
                      <li>Setia kepada NKRI serta pemerintahan yang sah.</li>
                      <li>Menjaga nama baik sesama ASN, pimpinan, instansi dan negara, serta menjaga rahasia jabatan dan negara.</li>
                    </ol> 
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
