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
                          INOVASI LAYANAN
                      </center>
                    </h2>

                    <h3 align="center"><strong>Pelayanan Konsultasi , 
                      Informasi dan Diseminasi Teknologi Pemanis , Serat , Tembakau dan Tanaman Minyak Industri</strong></h3><br>
                    <div class="pelayanan">
                      <h4><b>Jam Layanan</b></h4>
                      <p>Senin - Jumat : 08.00 – 15.00 WIB<br> Istirahat (Senin - Kamis) : 12.00 – 13.00 WIB<br> Istirahat (Jumat) : 11.30 – 13.00 WIB</p>

                      <h4><b>Tarif</b></h4>
                      <p><b>Rp0,00 atau tidak dipungut biaya</b></p>

                      <h4><b>Mekanisme, dan prosedur layanan</b></h4>
                      <h4><small><b>Permintaan Layanan Langsung</b></small></h4>
                      <ol>
                      <li>Pengguna layanan melaporkan maksud kedatangan di pos penjagaan gerbang utama Balittas. Petugas keamanan akan meminta kartu identitas dan kemudian pengguna layanan akan diberikan kartu pengenal pengunjung. Pengguna layanan wajib menggunakan kartu pengenal tersebut selama berada di wilayah kantor Balittas.</li>
                      <li>Pengguna layanan mengisi identitas dan maksud kedatangan pada buku tamu yang ada di resepsionis. Kemudian petugas resepsionis akan memberikan surat pengantar permohonan layanan dan diarahkan ke PPID di ruang Jasa Penelitian.</li>
                      <li>Untuk permohonan layanan konsultasi informasi teknologi dan diseminasi informasi teknologi terkait hasil penelitian akan dilayani Pejabat Pengelola Informasi dan Dokumentasi (PPID)</li>
                      <li>Untuk permohonan layanan konsultasi terkait diseminasi hasil penelitian meliputi pelayanan informasi publik, publikasi hasil penelitian, pelayanan informasi praktek kerja lapang dan/atau sejenisnya untuk mahasiswa/siswa/sederajat akan dilayani oleh petugas informasi di Seksi Jasa Penelitian, Pranata Humas, dan Arsiparis.</li>
                      <li>Setelah mendapatkan layanan, pengguna layanan mengisi kuesioner kepuasan pelanggan. Kuesioner dan surat pengantar permohonan layanan yang sudah diisi dan ditandatangani oleh pemberi layanan diserahkan kepada petugas keamanan di pos penjagaan gerbang utama Balittas. Kartu pengenal pengguna layanan yang bersangkutan akan diserahkan kembali</li>
                      </ol>
                      <h4><small><b>Permohonan layanan melalui daring , email , surat resmi , telepon dan fax <br></b></small></h4>
                      <ol>
                      <li>Pengguna layanan mengirimkan permohonan layanan melalui surat resmi yang ditujukan kepada Kepala Balittas yang beralamat di Jalan Raya Karangploso KM. 4 Kotak Pos 199 Malang; nomor telepon <b>0341 – 491447</b>; nomor fax <b>0341 – 485121</b>; e-mail <b>balittas(at)litbang.pertanian.go.id</b> atau <b>balittas.malang(at)gmail.com</b></li>
                      <li>Untuk permohonan layanan konsultasi informasi teknologi dan diseminasi informasi teknologi terkait hasil penelitian akan didisposisikan kepada Ketua Kelompok Peneliti/Penanggung Jawab Program/Koordinator Program Penelitian/Peneliti yang sesuia dengan bidang kepakaran.</li>
                      <li>Untuk permohonan layanan konsultasi informasi teknologi dan diseminasi informasi teknologi hasil penelitian meliputi pelayanan informasi publik, publikasi hasil penelitian, pelayanan informasi praktek kerja lapang dan /atau sejenisnya untuk mahasiswa/siswa/sederajat akan didisposisikan kepada petugas informasi di Seksi Jasa Penelitian, Pranata Humas, dan Arsiparis.</li>
                      <li>Untuk permohanan layanan informasi publik, pengguna layanan akan diminta mengisi form permohonan layanan yang dikirim via fax atau e-mail.</li>
                      <li>Jawaban permohonan layanan konsultasi tersebut akan dikirim melalui surat, fax, atau email.</li>
                      <li>Didalam jawaban diinformasikan layanan lebih lanjut dapat dilakukan dengan video conference</li>
                      </ol>
                      <p><strong>JENIS LAYANAN :<br></strong></p>
                      <ol>
                      <li>Kerja Sama ( narasumber dan pendampingan penelitian )</li>
                      <li>PKL , Magang dan Penelitian</li>
                      <li>Hama &amp; penyakit tanaman komoditas mandat balittas (simaster)</li>
                      </ol>
                      <p><strong>SOP LAYANAN INFORMASI HASIL PENELITIAN</strong></p>
                      <p><img src="../assets/images/SOPMLIP1.jpg" width="600">
                        <img src="../assets/images/SOPMLIP2.jpg" width="600">
                        <img src="../assets/images/SOPMLIP3.jpg" width="600">
                        <img src="../assets/images/SOPMLIP4.jpg" width="600">
                        <img src="../assets/images/SOPMLIP5.jpg" width="600"></p>
                      </div>
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
