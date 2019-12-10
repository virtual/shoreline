<?php $class = !(empty($class)) ? $class : ''; ?>
<div class="featureicon {{$class}}">
      @if(!empty($icon))
        @if(!empty($iconalt)) <div class="icon"><img src="{{ $page->baseUrl }}/resources/img{{ $icon }}" alt="{{ $iconalt }}" /></div> @else
        <div class="icon"><img src="{{ $page->baseUrl }}/resources/img{{ $icon }}" alt="" /></div> @endif
      @elseif(!empty($fa))
      <div class="icon"><span class="fa-icon {{$fa}}" aria-hidden="true"></span> <span class="sr-only">{{ $iconalt }}</span></div>
      @endif
        
      @if(!empty($heading))<h3>{{ $heading }}</h3>@endif 
      @if(!empty($desc))<p class="card-text">{{ $desc }}</p>@endif 
  @if(!empty($buttontext))<p><a class="btn btn-tert" href="{{ $link }}">{{ $buttontext }}</a></p>@endif
</div>