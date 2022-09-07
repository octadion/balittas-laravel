
<!-- Banner Starts Here -->
<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
      <!-- Item -->
      @foreach ($post as $item)
      <div class="item item-1">
         
        <div class="img-fill"style="background-image: url('/upload/post/thumbnail/{{ $item->thumbnail }}');">
            <div class="text-content">
             
              <h4>{{ $item->title }}</h4>
              <p>{{  (str_word_count(strip_tags(html_entity_decode( $item->content ))) > 40 ? substr(strip_tags(html_entity_decode( $item->content )),0,150)."[..]" : strip_tags(html_entity_decode( $item->content )))  }}</p>
              <a href="../tentang/berita/{{ $item->slug }}" class="filled-button">read more</a>
            </div>
        </div>
        
      </div>
       @endforeach
  
    </div>
</div>
<!-- Banner Ends Here -->