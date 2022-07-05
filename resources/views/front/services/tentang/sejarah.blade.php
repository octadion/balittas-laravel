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
                      <span>Sejarah Balitas</span>
                      <h2>Get to know about <em>our company</em></h2>
                      <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                      <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                      <a href="" class="filled-button">Read More</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="left-image">
                      <img src="{{ asset('assets/images/about-image.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
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
