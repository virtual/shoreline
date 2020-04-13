@if(!empty($class))<article class="news-article {{ $class }}">@else <article class="news-article">  @endif
  @if(!empty($img)) <div class="image-container"><a href="{{ $link }}"><img src="{{ $page->baseUrl }}{{$img}}" alt="{{$alt}}"></a></div>  @endif
  <div class="article-info-container">
      @if(!empty($datetime))<p class="datetime"><time datetime="{{$datetime}}"><?php echo date("F j, Y", strtotime($datetime)) ?> </time></p>@endif
      <h3 class="h4"><a href="{{ $link }}">{{ $heading }}</a></h3>
      <p class="description">{{ $desc }} </p>
    </div>
</article>
 