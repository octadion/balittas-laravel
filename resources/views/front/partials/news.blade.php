<div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Berita <em>Terbaru</em></h2>
            <span>berita terbaru mengenai tanaman</span>
          </div>
        </div>
        @foreach ($post as $item)
        <div class="col-md-4">
          <div class="service-item">
            <img src="../upload/post/thumbnail/{{ $item->thumbnail }}" style="width: 350px;height: 250px" alt="">
            <div class="down-content">
              <h4>{{ $item->title }}</h4>
              <p>{{  (str_word_count(strip_tags(html_entity_decode( $item->content ))) > 40 ? substr(strip_tags(html_entity_decode( $item->content )),0,150)."[..]" : strip_tags(html_entity_decode( $item->content )))  }}</p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
         @endforeach

      </div>
    </div>
  </div>
  <br>
  <br>