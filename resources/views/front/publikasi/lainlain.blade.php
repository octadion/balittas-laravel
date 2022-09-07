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
                         LAIN - LAIN
                        </center>
                      </h2><br>

                      <p>January - 2014</p>
                      <table class="category table table-striped table-bordered table-hover">
                        <caption class="hide">List of articles Lain-lain Balittas Malang</caption>
                        <thead>
                          <tr class="bg-success">
                            <th scope="col">
                              <a href="#"><font color="black"><center>Judul</center></font></a></th>
                                <th scope="col">
                                  <a href="#"><font color="black"><center>Tanggal Ditayangkan</center></a></th>
                                    <th scope="col">
                                      <a href="#"><font color="black"><center>Penulis</center></a></th>
                                    <th scope="col">
                                      <a href="#"><font color="black"><center>Hit</center></a></th>
                                    <th scope="col">
                                      <a href="#"><font color="black"><center>Vote</center></a></th>
                                    <th scope="col">
                                      <a href="#"><font color="black"><center>Rating</center></a></th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="cat-list-row0">
                            <td class="list-title">Kapas</td>
                                <td class="list-date small">28-01-2014</td>
                                <td class="list-author">Ditulis oleh Editor</td>
                                <td class="list-hits"><span class="badge badge-info">Dilihat: 1817</span></td>
                                <td class="list-votes"><span class="badge badge-success">Vote: 0</span></td>
                                <td class="list-ratings"><span class="badge badge-warning">Rating: 0</span></td>
                          </tr>
                            <tr class="cat-list-row1">
                              <td class="list-title">Tembakau</td>
                              <td class="list-date small">28-01-2014</td>
                              <td class="list-author">Ditulis oleh Editor</td>
                              <td class="list-hits"><span class="badge badge-info">Dilihat: 1647</td>
                              <td class="list-votes"><span class="badge badge-success">Vote: 0</span></td>
                              <td class="list-ratings"><span class="badge badge-warning">Rating: 0</span></td>
                            </tr>
                                      
                            <tr class="cat-list-row0">
                              <td class="list-title">Kenaf dan Rosela</td>
                              <td class="list-date small">28-01-2014</td>
                              <td class="list-author">Ditulis oleh Editor</td>
                              <td class="list-hits"><span class="badge badge-info">Dilihat: 1804</span></td>
                              <td class="list-votes"><span class="badge badge-success">Vote: 0</span></td>
                              <td class="list-ratings"><span class="badge badge-warning">Rating: 0</span></td>
                            </tr>
                                      
                            <tr class="cat-list-row1">
                              <td class="list-title">Yute</a></td>
                              <td class="list-date small">28-01-2014</td>
                              <td class="list-author">Ditulis oleh Editor</td>
                              <td hclass="list-hits"><span class="badge badge-info">Dilihat: 2227</span></td>
                              <td class="list-votes"><span class="badge badge-success">Vote: 0</span></td>
                              <td class="list-ratings"><span class="badge badge-warning">Rating: 0</span></td>
                            </tr>
                            </tbody>
                      </table>
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
