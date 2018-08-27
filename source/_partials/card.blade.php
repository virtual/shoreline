<div class="card"> 
  @if(!empty($icon))<span class="{{ $icon }}" aria-hidden="true"></span>@endif
  <div class="card-body">
    <h3 class="card-title"><a class="more-arrow" href="{{ $link }}">{{ $heading }}</a></h3>
    <p class="card-text">{{ $desc }}</p>
  </div>
  @if(!empty($buttontext))<a class="mt-3 btn btn-primary btn-block" href="{{ $link }}">{{ $buttontext }}</a>@endif
</div>