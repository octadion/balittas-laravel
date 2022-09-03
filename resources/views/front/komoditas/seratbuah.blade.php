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
                          SERAT BUAH
                      </center>
                    </h2>

                    <center><img src="../assets/images/seratbuah.jpg"
                      alt="banner" class="img-fluid" height="400px" width="500px"/></center><br>

                    <p align="justify">
                      &emsp; 
                      Prospek pengembangan kapas sangat strategis terutama untuk memenuhi 
                      kebutuhan industri TPT nasional dan menekan ketergantungan akan impor yang perlu ditempuh melalui :</p>
                      <ol>
                        <li>Penajaman wilayah potensial yang berkelayakan teknis dalam meningkatkan produktivitas tanaman dan lahan
                        <li>Optimalisasi penerapan paket teknologi;
                        <li>Optimalisasi fungsi kelembagaan dan kemitraan dalam mendorong petani melaksanakan usahataninya;
                        <li>Optimalisasi dukungan pendanaan, dan
                        <li>Mengisi dan meningkatkan peluang pasar.
                      </ol>

                  <p align="justify">
                      &emsp; 
                      Pengembangan Kapas Nasional sampai dengan 2025 ditujukan untuk mencapai beberapa sasaran, yaitu:</p>
                      <ol>
                        <li>Areal tanam seluas 300 ribu ha</li>
                        <li>Optimalisasi penerapan paket teknologi;
                        <li>Target capaian produksi tersebut diharapkan dapat memberikan 
                            kontribusi pada ITPT sekitar 30 % dari kebutuhan bahan baku kapas saat ini sekitar 500 ton per tahun.
                      </ol>
                  <p align="justify">
                    Salah satu aspek intensifikasi adalah varietas unggul, karena varietas unggul merupakan komponen teknologi yang 
                    paling mudah diadopsi oleh petani. Balittas telah melepas 15 seri varietas Kapas Indonesia (Kanesia); enam diantaranya dilepas pada tahun 2006/2007 yaitu Kanesia 10, Kanesia 11, Kanesia 12, Kanesia 13, Kanesia 14, dan Kanesia 15. Kanesia 8 merupakan varietas unggul kapas yang telah digunakan dalam pengembangan kapas nasional dengan potensi produksi 1,85–2,73 ton kapas berbiji/ha dan persen serat 33,3–38,7%. Varietas-varietas baru tersebut memiliki potensi produksi 17–22% lebih tinggi dibanding Kanesia 8, dan tingkat ketahanan yang moderat terhadap salah satu hama utama kapas, Amrasca biguttulla, serta mu-tu serat yang tidak berbeda dengan Kanesia 8. Kanesia 14 dan Kanesia 15 memiliki daya adaptasi yang lebih besar terhadap keterbatasan air dibandingkan varietas-varietas lainnya, sehingga kedua varietas tersebut lebih sesuai untuk dikembangkan pada daerah-daerah tadah hujan.
                    Penggunaan varietas-varietas unggul kapas dalam pengembangan dengan luas areal yang diperkirakan mencapai 
                    10.000 hektar dan dengan produktivitas pada tingkat petani mencapai 1,5 ton/ha (50–70% dari potensi produksi), 
                    maka produksi kapas nasional akan meningkat 9.000 ton kapas berbiji atau 3.000 ton serat kapas yang setara 
                    dengan US$4,2 juta (dengan harga serat rata-rata US$1,4/kg serat). Manfaat tersebut akan meningkat lebih 
                    tinggi apabila luas areal kapas mampu mencapai target pengembangan kapas nasional yaitu sekitar 70.000 ha pada 2010.</p>
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
