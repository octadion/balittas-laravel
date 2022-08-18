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
                      <h3 class="font-weight-600 mb-4"style="color:#A4C639;">
                        Kabar Kebun
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
              @foreach ($post as $item)
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="../upload/post/thumbnail/{{ $item->thumbnail }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h4 class="font-weight-600 mb-2"style="color:#000000;">
                            <a href="../tentang/berita/{{ $item->id }}">{{ $item->title }}</a>
                          </h4>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo 10 Minutes ago </span>
                          </p>
                         <p class="fs-15">
                           {{  (str_word_count(strip_tags(html_entity_decode( $item->content ))) > 60 ? substr(strip_tags(html_entity_decode( $item->content )),0,200)."[..]" : strip_tags(html_entity_decode( $item->content )))  }}
                            
                          </p>
                        </div>
                      </div>
                @endforeach
                      
                    
                    
                      
                    
                    </div>
                    <div class="col-lg-4">
                      <h2 class="mb-4  font-weight-600"style="color:#A4C639;">
                        Artikel Populer
                      </h2>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  Ways to stay social online while in self..
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="../assets2/images/magazine/Magzine_1.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  Premier League players join charity..
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="../assets2/images/magazine/Magzine_2.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  UK Athletics board changed stance on..
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="../assets2/images/magazine/Magzine_3.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="trending">
                        <h2 class="mb-4 mt-4 font-weight-600"style="color:#A4C639;">
                          Kunjungan di Balittas
                        </h2>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="../assets2/images/magazine/Magzine_4.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            Virus Kills Member Of Advising Iran’s Supreme
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="../assets2/images/magazine/Magzine_5.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            Virus Kills Member Of Advising Iran’s Supreme
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="../assets2/images/magazine/Magzine_6.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            Virus Kills Member Of Advising Iran’s Supreme
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
