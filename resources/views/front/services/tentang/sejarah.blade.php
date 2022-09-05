@extends('front.layout')

@section('content')
    @include('front.partials.header')
    @include('front.partials.content')
    <div class="more-info about-info">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="more-info-content">
                <div class="row">
                  <div class="col-md-6 align-self-center">
                    <div class="right-content">
                      <h3 align=justify>
                        <b>SEJARAH BALITTAS</b>
                      </h3>
                        <p align=justify>
                              &emsp;
                              Balittas (Balai Penelitian Tanaman Pemanis dan Serat) Malang adalah Balai yang melakukan beberapa kegiatan 
                              penelitian (genetika, morfologi, fisiologi, ekologi, entomologi, dan pitofatologi), pembenihan dan menghasilkan 
                              teknologi yang berkaitan dengan tanaman tembakau, pemanis, serat, dan minyak industri. Selain kegiatan tersebut, 
                              Balittas juga melakukan kegiatan kerjasama, informasi, dan rekomendasi, serta penyebarluasan dan pendayagunaan 
                              hasil - hasil penelitian tanaman tembakau, pemanis, serat, dan minyak industri. Memberikan saran kebijakan dalam 
                              agribisnis tanaman tembakau, pemanis, serat, dan minyak industri juga merupakan salah satu kegiatan yang telah 
                              banyak dilakukan oleh Balittas.<br>
                              &emsp;
                              Cikal bakal semua Balai Penelitian Pertanian di Indonesia termasuk Balai Penelitian Tanaman Pemanis dan Serat (Balittas) 
                              adalah Algemeen Proefstation Voor de Landbouw (APL) yaitu Balai Penelitian yang mempunyai mandat menangani tanaman pertanian 
                              rakyat meliputi tanaman hortikultura, tanaman pangan, dan perkebunan rakyat, yang didirikan pada tahun 1918. Pada tahun 1950 
                              APL berubah menjadi Balai Besar Penyelidikan Pertanian (BBPP) yang berpusat di Bogor. Keberadaan Balittas saat inipun tidak 
                              dapat dipisahkan dengan perkembangan dan keberadaan Balai–Balai Penelitian yang menangani komoditas Balittas sebelumnya 
                              sepert i: Balai Besar Penyelidikan Pertanian (BBPP) di Bogor, BBPP Cabang Malang, BBPP Cabang Makasar, Balai Penyelidikan 
                              Teknik Pertanian (BPTP) Perwakilan Jawa Timur dan Jawa Tengah, Lembaga Penelitian Serat dan Jenis-Jenis Tanaman Industri 
                              Lainnya (LPTS), Lembaga Penelitian Kelapa dan Jenis-jenis Tanaman Lemak Lainnya (LPKL), Lembaga Penelitian Tanaman Industri 
                              (LPTI) Cabang Wilayah II di Malang, Balai Penelitian Tanaman Industri (Balittri), Balai Penelitian Tembakau dan Tanaman Serat 
                              (Balittas), Balai Penelitian Tanaman Tembakau dan Serat (Balittas), Balai Penelitian Tanaman Pemanis dan Serat.
                            </p>
                          
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="left-image">
                      <img src="{{ asset('assets/images/sejarah.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="lead">
                  <h2 class="text-center">Bagan alur organisasi Balai Penelitian Tanaman Pemanis dan Serat</h2>
                  </div><br>

                  <table class="table">
                    <tbody class="table-striped text-justify ">
                    <tr class="bg-success"><th>
                    <h4 class="text-center">Tahun</h4>
                    </th><th>
                    <h4 class="text-center">Uraian Nama Instansi</h4>
                    </th><th>
                    <h4 class="text-center">Organisasi Induk</h4>
                    </th></tr>
                    <tr>
                    <td>1918</td>
                    <td>Didirikan Balai Penelitian yang menangani Tanaman Pertanian Rakyat meliputi tanaman hortikultura, tanaman pangan, dan perkebunan rakyat di Indonesia yang bernama <strong>Algemeen Proefstation Voor de Landbouw (APL).</strong></td>
                    <td align="center">Departemen Voor Economische Zaken</td>
                    </tr>
                    <tr>
                    <td>1942</td>
                    <td><strong>Algemeen Proefstation Voor de Landbouw (APL) </strong>dinamakan <em>”Noozi Sikenzyoo”</em> atau disebut Pusat Penyelidikan Pertanian Umum.</td>
                    <td align="center">Pemerintah Jepang</td>
                    </tr>
                    <tr>
                    <td>1949</td>
                    <td>APL berubah menjadi Djawatan Penjelidikan Pertanian (Dj. PP).</td>
                    <td align="center">Departemen Voor Economische Zaken</td>
                    </tr>
                    <tr>
                    <td>1950</td>
                    <td>Dj PP berubah menjadi Balai Besar Penyelidikan Pertanian (BBPP) berpusat di Jl. Tjikeumeuh sekarang Jl. Merdeka 99 Bogor.</td>
                    <td align="center">Departemen Voor Economische Zaken</td>
                    </tr>
                    <tr>
                    <td>1951</td>
                    <td>Dibentuk Unit Pelaksana Teknis/Administrasi di lingkup BBPP:
                    
                    <li>Balai Penyelidikan Teknik Pertanian(BPTP)</li>
                    <li>Balai Besar Cabang Makasar</li>
                    <li>Laboratorium Perikanan Darat</li>
                    <li>Kantor Pusat Balai Besar sebagai koordinator</li>
                    
                    </td>
                    <td align="center">BBPP</td>
                    </tr>
                    <tr>
                    <td>1951</td>
                    <td>BPTP berdasarkan mandatnya dibagi menjadi 3 bagian:
                    
                    <li>Bagian Teknik Pertanian</li>
                    <li>Bagian Tanaman Dagang</li>
                    <li>Bagian Tanaman Makanan</li>
                    
                    </td>
                    <td align="center">BBPP/BPTP Pusat</td>
                    </tr>
                    <tr>
                    <td>1951</td>
                    <td>Bagian Tanaman Dagang memulai kegiatan penelitian: komoditas tembakau, kapas, kapuk, serat batang, kelapa, jarak kepyar, wijen, tanaman insektisida, tebu, dan lain lain.</td>
                    <td align="center">BPTP Pusat</td>
                    </tr>
                    <tr>
                    <td>1954</td>
                    <td>R. Isman Sastrodarmo menjadi Pimpinan BPTP Perwakilan Jawa Tengah dan Jawa Timur berkedudukan di KP Genteng, Banyuwangi</td>
                    <td align="center">BPTP Pusat</td>
                    </tr>
                    <tr>
                    <td>1958</td>
                    <td>W.G.P.T. Tamboenan menjadi Kepala Cabang BBPP Malang berkantor di Serayu 2, Malang</td>
                    <td align="center">BPTP Pusat</td>
                    </tr>
                    <tr>
                    <td>1958</td>
                    <td>R. Isman Sastrodarmo menjadi Pimpinan BPTP Perwakilan Jawa Tengah dan Jawa Timur berkedudukan di Jl. Kenanga 36 sekarang Jl. Industri Timur 36 Malang</td>
                    <td align="center">BPTP Pusat</td>
                    </tr>
                    <tr>
                    <td>1961</td>
                    <td>Bagian Tanaman Dagang dipecah 2 bagian:
                    
                    <li>Lembaga Tanaman Serat dan Jenis-Jenis Tanaman Industri Lainnya(LPTS)</li>
                    <li>Lembaga Penelitian Kelapa dan Jenis lemak Lainnya (LPKL)</li>
                    
                    </td>
                    <td align="center">Direktorat Jenderal Perkebunan</td>
                    </tr>
                    <tr>
                    <td>1968</td>
                    <td>LPTS dan LPKL dilebur menjadi Perwakilan Lembaga Penelitian Tanaman Industri (LPTI) Jawa Timur di Malang</td>
                    <td align="center">Direktorat Jenderal Perkebunan</td>
                    </tr>
                    <tr>
                    <td>1972</td>
                    <td>LPTI Cabang Malang menjadi Lembaga Penelitian Tanaman Industri Cabang Wilayah II Malang</td>
                    <td align="center">LPTI Pusat Bogor</td>
                    </tr>
                    <tr>
                    <td>1981</td>
                    <td>Lembaga Penelitian Tanaman Industri Cabang Wilayah II Malang menjadi Balai Penelitian Tanaman Industri (Balittri)</td>
                    <td align="center">Puslitbang Tanaman Industri</td>
                    </tr>
                    <tr>
                    <td>1984</td>
                    <td>Balittri menjadi Balai Penelitian Tembakau dan Tanaman Serat (Balittas)</td>
                    <td align="center">Puslitbang Tanaman Perkebunan</td>
                    </tr>
                    <tr>
                    <td>2002</td>
                    <td>Balai Penelitian Tembakau dan Tanaman Serat (Balittas) menjadi Balai Penelitian Tanaman Tembakau dan Serat (Balittas)</td>
                    <td align="center">Puslitbang Tanaman Perkebunan</td>
                    </tr>
                    <tr>
                    <td>2011</td>
                    <td>Balai Penelitian Tembakau dan Tanaman Serat (Balittas) menjadi Balai Penelitian Tanaman Pemanis dan Serat (Balittas)</td>
                    <td align="center">Puslitbang Tanaman Perkebunan</td>
                    </tr>
                    </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    @include('front.partials.footer')
@endsection
