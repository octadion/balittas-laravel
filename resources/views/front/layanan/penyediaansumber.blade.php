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
                    </h2>

                    <center><img src="../assets/images/upbs.png"
                      alt="banner" class="img-fluid" height="450" width="500"/></center><br>
                    <h3>Jam Pelayanan :</h3>
                    <p>Senin–Jumat : jam 08.00 – 15.00 WIB<br> Istirahat (Senin–Kamis) : jam 12.00 – 13.00 WIB<br> Istirahat (Jumat) : jam 11.30 – 13.00 WIB</p>
                    
                    <p>Pemesanan benih sumber dapat dilakukan secara online melalui tautan berikut&nbsp;<strong>
                      <span style="background-color: #0511ff; color: #ffffff;"><a class="btn btn-default" style="background-color: #195ced; color: #210909;" href="http://balittas.litbang.pertanian.go.id/aplikasi/upbs-stok/" target="_blank" rel="noopener noreferrer">Ketersediaan Benih</a></span></strong></p>
                    <h3><b>Persyaratan Pembelian Benih</b></h3>
                      <ol>
                        <li>Menyerahkan kartu identitas</li>
                        <li>Mengisi buku tamu</li>
                        <li>Mengisi kuesioner</li>
                        <li>Menjaga ketertiban</li>
                      </ol>

                      <h3><b>Mekanisme, dan Prosedur Pelayanan</b></h3>
                      <ol>
                        <li>Pengguna layanan melaporkan maksud kedatangan di pos penjagaan gerbang utama Balittas. Petugas keamanan akan meminta kartu identitas dan kemudian pengguna layanan akan diberikan kartu pengenal pengunjung. Pengguna layanan wajib menggunakan kartu pengenal tersebut selama berada di wilayah kantor Balittas.</li>
                        <li>Pengguna layanan mengisi identitas dan maksud kedatangan pada buku tamu yang ada di resepsionis. Kemudian petugas resepsionis akan memberikan surat pengantar permohonan layanan dan diarahkan ke PPID di ruang Jasa Penelitian.</li>
                        <li>Pengguna layanan ditemui oleh PPID kemudian dipertemukan dengan petugas Unit Pengelolaan Benih Sumber (UPBS).</li>
                        <li>Petugas UPBS akan mengecek stok ketersediaan benih.</li>
                        <li>Petugas mengisi form pengeluaran benih.</li>
                        <li>Setelah mendapatkan layanan, pengguna layanan mengisi kuesioner kepuasan pelanggan. Kuesioner dan surat pengantar permohonan layanan yang sudah diisi dan ditandatangani oleh pemberi layanan diserahkan kepada petugas keamanan di pos penjagaan gerbang utama Balittas. Kartu pengenal pengguna layanan yang bersangkutan akan diserahkan kembali</li>
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
