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
                      TANAMAN PENGHASIL SERAT DAN INDUSTRI
                      </center>
                    </h2>

                    <h3>WIJEN</h3>
                    <p align="justify">
                      &emsp;
                      Tanaman wijen merupakan tanaman semusim yang tahan kering, dengan umur panen antara 2,5–5,0 bulan. Selama pertumbuhannya membutuhkan 
                      curah hujan antara 400–650 mm. Tumbuh baik pada ketinggian 1–1.250 m di atas permukaan laut, menghendaki suhu tinggi, udara kering. 
                      Wijen sudah lama dikenal dan dibudidayakan tersebar di semua daerah di Indonesia, terutama di wilayah kering baik di lahan kering di 
                      musim penghujan maupun di lahan sawah sesudah padi di musim kemarau. Budi daya wijen relatif mudah, risiko kegagalan kecil, input rendah, 
                      dan dapat ditumpangsarikan dengan palawija tanaman pangan atau tanaman industri, serta tidak diminati oleh mamalia, seperti kera, babi hutan, 
                      atau kijang, sehingga sesuai untuk ditanam di kawasan hutan.Pada tahun 1997 Balittas telah melepas dua varietas unggul wijen, 
                      yaitu Sumberrejo 1 (Sbr 1) dan Sumberrejo 2 (Sbr 2) berdasarkan SK Mentan No. 723/Kpts/TP.240/7/97 tanggal 21 Juli 1997. Sbr 1 
                      sampai saat ini masih disukai oleh petani, karena mampu ditanam di lahan kering maupun lahan sawah. Pada tahun 2006 Balittas 
                      melepas dua varietas unggul baru dengan nama varietas Sumberrejo 3 (Sbr 3) dan Sumberrejo 4 (Sbr 4) berdasarkan 
                      SK Mentan No. 113/Kpts/SR.120/2/2007 dan 114/Kpts/SR.120/2/2007. Sbr 4 sangat disukai di lahan sawah sesudah padi pada MK-2 karena umurnya genjah. 
                      Selain itu, pengrajin makanan ringan lebih menyukai biji Sbr 4, karena ukurannya lebih kecil, sehingga dalam satu kilogram jumlahnya lebih banyak dan lebih lekat.
                      Pengembangan wijen di Indonesia setiap tahun meningkat. Pada tahun 2006 areal wijen mencapai 4.788 hektar, yang tersebar di Lampung (150 ha), Jawa Tengah (1.426 ha), Yogya-karta (250 ha), Jawa Timur (1.473 ha), Nusa Tenggara Barat (1.217 ha), dan Sulawesi Selatan (272 ha). Varietas unggul Sbr 1 digunakan di hampir seluruh (90%) daerah pengembangan tersebut. Varietas unggul Sbr 3 dan Sbr 4 mulai digunakan pada tahun 2007, terutama di Jawa Ti-mur dan Sulawesi Selatan. Produksi wijen di seluruh daerah tersebut mencapai sedikitnya 2.585,4 ton (produktivitas rata-rata 600 kg/ha) atau senilai Rp6.000.000,00–Rp7.000.000,00 per hektar (harga pada akhir tahun 2007 Rp10.000,00–Rp12.000,00 per kg; harga pada bulan Juni 2008 mencapai Rp22.000,00 per kg). Apabila ditanam secara tumpang sari dengan jarak kepyar, maka pendapatan petani adalah Rp10.225.000,00–Rp11.034.000,00 per hektar. Petani wijen di Jawa Timur dapat menghasilkan 
                      wijen dengan produktivitas rata-rata 721 kg/ha, sehingga pendapatan petani wijen monokultur mencapai Rp8.220.000,00–Rp9.864.000,00 per hektar.
                      <center><img src="../assets/images/Wijen.jpg"
                        alt="banner" class="img-fluid" height="400px" width="500px"/></center><br> 
                    </p>

                    <h3>JARAK KEPYAR</h3>
                    <p align="justify">
                      &emsp;
                      Tanaman jarak kepyar tumbuh baik pada tanah ringan, yakni lempung berpasir, cukup mengandung bahan organik dan mempunyai drainase serta aerasi 
                      baik dengan pH 5–6,5. Ta-naman jarak kepyar tidak tahan genangan air walaupun hanya beberapa hari, selain itu juga tidak tahan pada tanah berkadar garam tinggi. Tanaman ini toleran terhadap kondisi kering sehingga tersebar pada areal bercurah hujan rendah yaitu 300–700 mm/tahun dengan ketinggian 5–450 m dpl.
                      Jarak kepyar sesuai dikembangkan di daerah beriklim kering. Keunggulan tanaman jarak antara lain mampu menghasilkan biji pada musim kemarau, 
                      ketika tanaman lain tidak mampu tumbuh, serta adaptif ditumpangsarikan dengan tanaman lain misalnya wijen, kacang hijau, ataupun jagung. Dengan 
                      demikian, jarak kepyar dapat meningkatkan pendapatan petani saat musim kemarau pada daerah-daerah kering. Varietas unggul jarak kepyar yang 
                      sudah dilepas adalah Asb 22, Asb 60, dan Asb 81. Ketiga varietas tersebut sesuai untuk daerah kering beriklim kering, masing-masing memiliki 
                      potensi produksi 2.500–3.200 kg/ha.
                      <center><img src="../assets/images/jarakkepyar.jpg"
                        alt="banner" class="img-fluid" height="400px" width="500px"/></center><br> 
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
