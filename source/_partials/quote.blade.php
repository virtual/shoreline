<?php $class = !(empty($class)) ? $class : ''; ?>
<div>
  <figure class="quote-feature {{$class}}">
    @if((($img) != '') && ($class != 'small-image'))
    <div class="quote-feature-img">
      <img src="{{ $page->baseUrl }}{{ $img }}" alt="{{ $alt }}" />
    </div>
    @endif 
    <figcaption class="quote-feature-text">
      
      <blockquote>
        {{ $desc }}
      </blockquote>
      <span class="quote-feature-attribution-container">
        @if($class == 'small-image')
        <span class="quote-feature-img">
          <img src="{{ $page->baseUrl }}{{ $img }}" alt="{{ $alt }}" />
        </span>
        @endif 
        <span class="quote-feature-attribution">
          @if($attribution) <strong>{{ $attribution }}</strong> @endif
          @if(($attribution) && ($attribution2)) <br /> @endif
          {{ $attribution2 }}
        </span>
      </span>
    </figcaption> 
  </figure>
</div>