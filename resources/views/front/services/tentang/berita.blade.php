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

                               
       <div class="berita berita2">
      <div class="container">

            <div class="berita-content">
         
                <div class="align-self-center">
                  <div class="right-content">
                    <span>{{ $post->date }}</span>
                    <h2>{{ $post->title }} </h2>

                    <img src="/upload/post/thumbnail/{{ $post->thumbnail }}" alt=""width="500" height="300">
                   
                     {!! "$post->content" !!}
                  
                  </div>
                </div>
        </div>
        <div id="disqus_recommendations"></div>
        <script> 
          (function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
          var d = document, s = d.createElement('script'); // IMPORTANT: Replace EXAMPLE with your forum shortname!
          s.src = 'https://balittas.disqus.com/recommendations.js'; s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
          </script>
          <noscript>
          Please enable JavaScript to view the 
          <a href="https://disqus.com/?ref_noscript" rel="nofollow">
          comments powered by Disqus.
          </a>
          </noscript>
        <div id="disqus_thread"></div>
        <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://balittas-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            DISQUSWIDGETS.getCount({reset: true});
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <script id="dsq-count-scr" src="//balittas-1.disqus.com/count.js" async></script>
      </div>
      <span>&ensp;&ensp;
            <i class="fa-solid fa-user"></i> {{ $post->user->first_name }}&ensp;
      </span>
      <span><i class="fa-solid fa-tags"></i> {{ $post->category->name }} &ensp;
            <i class="fa-solid fa-comments"></i> <a href="../berita/{{ $post->slug }}#disqus_thread" style="color: black"></a> &ensp;
            <i class="far fa-calendar-alt"></i> {{ date('d-m-Y',strtotime($post->date))}} &ensp;
            <i class="fas fa-eye"></i> Total Dilihat {{ $post->views }}
      </span>
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
                                    <a href="../berita/{{ $post2->slug }}">{{  (str_word_count(strip_tags(html_entity_decode( $post2->title ))) > 9 ? substr(strip_tags(html_entity_decode( $post2->title )),0,35)."[..]" : strip_tags(html_entity_decode( $post2->title )))  }}</a>
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
 
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
myObject = new Vue({
  el: '#app',
  
})
</script>

    @include('front.partials.footer')
@endsection