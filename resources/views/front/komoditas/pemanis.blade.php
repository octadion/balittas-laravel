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
                          PEMANIS
                      </center>
                    </h2>
                    
                    <h3 align=justify>
                      <b>Tanaman Tebu :</b>
                    </h3>
                    <p align=justify>
                      &emsp;&emsp;
                        Tebu merupakan komoditas utama yang dapat digunakan sebagai bahan baku gula. Dalam rangka 
                        pemenuhan kebutuhan gula nasional, akselerasi peningkatan produksi gula dirancang dalam tiga 
                        tahap pendekatan sasaran, yaitu :<br>
                        1. Kecukupan kebutuhan gula untuk konsumsi masyarakat (2006-2009),<br>
                        2. Terpenuhinya kebutuhan gula untuk konsumsi dan industri (2010-2014), dan<br>
                        3. Pengembangan produk samping berbasis bahan baku tebu (2015-2025).<br>
                      &emsp;&emsp;
                        Untuk memperkuat pencapaian sasaran terpenuhinya kebutuhan untuk konsumsi dan industri, 
                        perlu implementasi program intensifikasi untuk meningkatkan produksi dan rendemen gula. 
                        Program ekstensifikasi pengembangan tebu membutuhkan areal seluas 430.000 hat dan hal ini 
                        perlu didukung dengan pemetaan areal dan varietas unggul yang sesuai.
                    </p>
                    <center><img src="../assets/images/fasetebu.jpg"
                      alt="banner" class="img-fluid" height="450px" width="500px"/></center><br>
                    <h3 align=justify>
                      <b>Fase Perkecambahan Tanaman Tebu :</b>
                    </h3>
                      <p align=justify>
                        <li>Awal kehidupan
                        <li>Periode perkecambahan 3-35 hari
                        <li>Faktor yang menentukan
                          <br>
                          &emsp;&emsp;- Unsur internal :
                            <li>Varietas
                            <li>Umur bibit
                            <li>Kesehatan sumber bibit
                          <br>
                          &emsp;&emsp;- Unsur eksternal :
                            <li>Kelengasan tanah
                            <li>Aerasi tanah
                            <li>Kedalaman letak tanah
                      </p>

                      <h3 align=justify>
                        <b>Fase Pertunasan :</b>
                      </h3>
                        <p><ul>
                          <ol>
                          <li>Proses pembentukan dasar pertumbuhan melalui :<br>
                              - Konstruksi perakaran<br>
                              - Kemampuan menopang pertumbuhan &amp; perkembangan
                          <li>Faktor penentu awal dalam dinamika populasi &amp; dinamika pertumbuhan tanaman</li>
                          <li>Konstruksi perakaran menentukan keseragaman dan menopang keragaan ketegakan batang</li>
                          <li>Periode pertunasan 6-12 minggu setelah tanam</li>
                          <li>Penentu :<br>
                              - Sinar matahari<br>
                              - Kecukupan lengas tanah<br>
                              - Aerasi daerah perakaran<br>
                              - Kecukupan nutrisi/hara<br>
                              - Daerah perkembangan akar yg optimal<br>
                              - Dominan pada 20-40 cm dari permukaan tanah waras<br>
                          </li>
                          </ul></p>
                        
                      <h3 align=justify>
                        <b>Fase Pertumbuhan Batang Tebu :</b>
                      </h3>
                      <p><ul>
                        <ol>
                        <li>Konstruksi perakaran tebu terbangun dari setiap tunas tumbuh pada setiap mata berkecambah :</li>
                        <li>Jumlah akar berkorelasi positif dengan jumlah tunas tumbuh dalam satu rumpun</li>
                        <li>Konstruksi perakaran menentukan keseragaman dan menopang keragaan ketegakan batang</li>
                        <li>Faktor kritis yang penting diperhatikan :<br>
                            - Kecukupan hara saat periode pertunasan maksimal<br>
                            - Kompetisi ruang dan matahari dengan gulma<br>
                            - Aerasi daerah perakaran pada periode petunasan.
                        </li>
                        </ul></p>
                        
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
