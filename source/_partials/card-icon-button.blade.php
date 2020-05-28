<?php /*
      @include('_partials.card-icon-button', [
    'heading' => 'Directory', 
    'alt' => 'quote',
    'icon' => 'far fa-map',         
    'link' => 'https://www.shoreline.edu/currentstudents/email/',
    'addclass' => 'card-icon-compact'
    ]) 

        @include('_partials.card-icon-button', [
    'heading' => 'Email',
    'img' => '../resources/img/icons/current/icon-email.png',
    'alt' => 'quote',     
    'link' => 'https://www.shoreline.edu/currentstudents/email/',
    'addclass' => 'card-icon-compact'
    ])
*/ ?>
<div class="card-icon {{ $addclass }}">
  <a href="{{ $link }}">{{ $heading }}</a>
  <div class="icon">
    @if(!empty($img))
    <img src="{{ $img }}" alt="{{ $alt }}">
    @else
    <span class="{{ $icon }}" aria-hidden="true"></span><span class="sr-only">{{ $alt }}</span>
    @endif
  </div>
  <p><a tabindex="-1" href="{{ $link }}">{{ $heading }}</a></p>
</div>
