<div class="video-box row">
  <div class="col-sm-5">
    <a class="video-lightbox" href="https://www.youtube.com/embed/{{ $youtubeID }}?rel=0&amp;autoplay=1">
      <span class="btn btn-secondary icon-watch"> </span>
      <img src="{{$img}}" alt="Watch {{$heading}}" />
    </a>
  </div>
  <div class="col-sm-7">
    <h3 class="card-title">{{ $heading }}</h3>
    <p class="card-text">{{ $desc }}</p>
  </div>
</div>