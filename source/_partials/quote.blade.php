<div>
  <figure class="quote-feature ">
    @if(($img) != '')
    <div class="quote-feature-img">
      <img src="{{ $page->baseUrl }}{{ $img }}" alt="{{ $alt }}" />
    </div>
    @endif
    <div class="quote-feature-text">
      <blockquote>
        {{ $desc }}
      </blockquote>
      <figcaption>
        @if($attribution) <strong>{{ $attribution }}</strong> @endif
        @if(($attribution) && ($attribution2)) <br /> @endif
        {{ $attribution2 }}
      </figcaption>
    </div>
  </figure>
</div>