<?php $class = !(empty($addclass)) ? $addclass : ''; ?>
<div class="card-icon-image-round {{$class}}"> 
  <a href="https://www.mscc.edu/students/">{{ $buttontext }}</a>
  <div class="image"><img height="400" width="400" class="rounded-circle" src="{{ $page->baseUrl }}/resources/img{{ $img }}" alt="{{ $alt }}" /></div>
  @if(!empty($buttontext))<p class="primary xl">{{ $buttontext }}</p>@endif
</div>