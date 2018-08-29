<!-- @if(!empty($img)) <div class="card image-card"> @else <div class="card">  @endif
  @if(!empty($img))<div class="card-image-container" style="background-image: url('{{ $img }}');"><a href="{{ $link }}"><img class="card-img-top" src="{{ $img }}" alt="Card image cap" /></a></div>@endif
  <div class="card-body">
    @if(!empty($icon))<span class="{{ $icon }}" aria-hidden="true"></span>@endif
    <h3 class="card-title">
        @if(!empty($img))
          {{ $heading }}
        @else
        <a class="more-arrow" href="{{ $link }}">{{ $heading }}</a>
        @endif
    </h3>
    <p class="card-text">{{ $desc }}</p>
    @if(!empty($buttontext))<p><a class="btn btn-primary" href="{{ $link }}">{{ $buttontext }}</a></p>@endif
  </div>
</div> -->

<div class="featureicon">
  <p><a href="{{ $link }}">
    @if(!empty($icon))
      @if(!empty($iconalt)) <div class="icon"><img src="{{ $icon }}" alt="{{ $iconalt }}" /></div> @else
      <div class="icon"><img src="{{ $icon }}" alt=" " /></div> @endif
        @endif
      {{ $heading }}</a></p>
  <p class="card-text">{{ $desc }}</p>
  @if(!empty($buttontext))<p><a class="btn btn-tert" href="{{ $link }}">{{ $buttontext }}</a></p>@endif
</div>