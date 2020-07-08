<?php $class = !(empty($addclass)) ? $addclass : ''; ?>
<div class="{{$class}}"> 
  <div class="image"><img class="rounded-circle" src="{{ $page->baseUrl }}/resources/img{{ $img }}" alt="{{ $alt }}" /></div>
  @if(!empty($buttontext))<p class="pt-2 text-center"><a class="primary" href="{{ $link }}">{{ $buttontext }}</a></p>@endif
</div>