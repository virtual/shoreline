<article> 
  <header>
      @if(!empty($img)) <a href="{{ $link }}"><img src="{{$img}}" alt="{{$alt}}"></a>  @endif
      @if(!empty($datetime))<p class="articledate"><time datetime="{{$datetime}}">XSL Pretty format: {{$datetime}}</time></p>@endif
      <h2><a href="{{ $link }}">{{ $heading }}</a></h2>
    </header>
    <p>{{ $desc }} </p>
</article>
 