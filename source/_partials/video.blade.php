<div class="video-box">
  <div class="video-box-image">
    <a class="video-lightbox" href="https://www.youtube.com/embed/{{ $youtubeID }}?rel=0&amp;autoplay=1">
      <span class="btn btn-secondary icon-watch"> Watch Video</span>
      <img src="{{ $page->baseUrl }}{{$img}}" alt="Watch {{$heading}}" />
    </a>
  </div>
  <div class="video-box-content">
    <h3 class="card-title">{{ $heading }}</h3>
    <p class="card-text">{{ $desc }}</p>
  </div>
</div>