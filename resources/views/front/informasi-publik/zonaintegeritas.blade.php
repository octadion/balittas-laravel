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
                          ZONA INTEGRITAS
                      </center>
                    </h2>
                    
                    <center><img src="../assets/images/zi2019.png"
                      alt="banner" class="img-fluid" height="450px" width="520px"/></center><br>
                    <h3><strong>A. Indikator Proses</strong></h3>
                    <br>
                    <td class="list-hits"><span class="badge badge-info"><h4>&emsp; I. Manajemen Perubahan :</h4></span></td>
                      <ol>
                        <li>Tim Kerja
                        <li>Dokumen Rencana Pembangunan ZI
                        <li>Pemantauan dan Evaluasi Pembangunan WBK/WBBM
                        <li>Perubahan pola pikir dan Budaya Kerja
                      </ol>

                    <td class="list-hits"><span class="badge badge-info"><h4>&emsp; II.Penataan Laksa Tatana :</h4></span></td>
                      <ol>
                        <li>Prosedur Operasional (SOP) Kegiatan Utama.</li>
                        <li>E-office</li>
                        <li>Keterbukaan Informasi Publik</li>
                      </ol>

                    <td class="list-hits"><span class="badge badge-info"><h4>&emsp; III.Penataan Sistem Manajemen SDM :</h4></span></td>
                      <ol>
                        <li>Perencanaan Kebutuhan Pegawai</li>
                        <li>Pola Mutasi Internal</li>
                        <li>Pengembangan Pegawai Berbasis Kompetensi</li>
                        <li>Penetapan Kinerja Indikator</li>
                        <li>Penegakan Aturan Disiplin /Kode Etik / Kode Perilaku Pegawai</li>
                        <li>Sistem Informasi Pegawai</li>
                      </ol>

                    <td class="list-hits"><span class="badge badge-info"><h4>&emsp; IV.Penguatan Akuntabilitas :</h4></span></td>
                      <ol>
                        <li>Keterlibatan Pimpinan</li>
                        <li>Pengelolaan Akuntabilitas Kinerja</li>
                      </ol>

                    <td class="list-hits"><span class="badge badge-info"><h4>&emsp; V.Penguatan Pengawasan :</h4></span></td>
                      <ol>
                        <li>Pengendalian Gratifikasi</li>
                        <li>Penerapan SPIP</li>
                        <li>Pengaduan Masyarakat</li>
                        <li>Whistle Blowing System</li>
                        <li>Pengawasan Benturan Kepentingan</li>
                      </ol>

                    <td class="list-hits"><span class="badge badge-info"><h4>&emsp; V.Peningkatan Kualitas Pelayanan Publik :</h4></span></td>
                      <ol>
                        <li>Standar Pelayanan</li>
                        <li>Budaya Pelayanan Prima</li>
                        <li>Penilaian Kepuasan Pelayanan</li>
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