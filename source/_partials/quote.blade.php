<figure class="quote-feature">
  <img src="{{ $img }}" alt="{{ $alt }}" />
  <blockquote>
    {{ $desc }}
  </blockquote>
  <figcaption>
      @if($attribution) <strong>{{ $attribution }}</strong> @endif
      @if(($attribution) && ($attribution2)) <br/> @endif
    {{ $attribution2 }}
</figcaption>
</figure> 