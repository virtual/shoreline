<article class="news-article"> 
  @if(!empty($img)) <div class="image-container"><a href="{{ $link }}"><img src="{{$img}}" alt="{{$alt}}"></a></div>  @endif
  <div class="article-info-container">
      @if(!empty($datetime))<p class="datetime"><time datetime="{{$datetime}}"><?php echo date("F j, Y", strtotime($datetime)) ?> </time></p>@endif
      <h3><a href="{{ $link }}">{{ $heading }}</a></h3>
      <p class="description">{{ $desc }} </p>
    </div>
</article>
 