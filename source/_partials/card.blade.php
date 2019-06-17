@if(!empty($img)) <div class="card image-card"> @elseif(!empty($callout)) <div class="card callout"> @else <div class="card">  @endif
  @if(!empty($img))<div class="card-image-container" style="background-image: url('{{ $img }}');"><a href="{{ $link }}"><img class="card-img-top" src="{{ $img }}" alt="Card image cap" /></a></div>@endif
  <div class="card-body">
    @if(!empty($icon))<span class="{{ $icon }}" aria-hidden="true"></span>@endif
    <h3 class="card-title">
        @if((!empty($img)) || (!empty($buttontext)))
          {{ $heading }}
        @else
        <a class="more-arrow" href="{{ $link }}">{{ $heading }}</a>
        @endif
    </h3>
    <div class="card-text"><?php echo $desc; ?></div>
    @if(!empty($buttontext))<p><a class="btn btn-primary" href="{{ $link }}">{{ $buttontext }}</a></p>@endif
  </div>
</div>