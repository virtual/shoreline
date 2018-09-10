<div class="featureicon">
      @if(!empty($icon))
      @if(!empty($iconalt)) <div class="icon"><img src="{{ $icon }}" alt="{{ $iconalt }}" /></div> @else
      <div class="icon"><img src="{{ $icon }}" alt=" " /></div> @endif
        @endif
        
      <h3>{{ $heading }}</h3>
  <p class="card-text">{{ $desc }}</p>
  @if(!empty($buttontext))<p><a class="btn btn-tert" href="{{ $link }}">{{ $buttontext }}</a></p>@endif
</div>