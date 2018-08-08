@extends('_layouts.master')

@section('content-header')
<div class="breadcrumb" aria-label="breadcrumb">
  <ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Arts</a></li>
  </ol>

</div>

<div class="header-info">
  <div class="header-content">
    <h1>Visual Arts</h1>
    <p class="xxl">The future is visual</p>
    <a href="#" class="btn btn-important">Apply</a>
    <a href="#" class="btn btn-secondary">Ask a Question</a>
  </div>
  <figure class="header-image"><img alt="" src="/resources/img/videos/Video-Snippet.jpg"><figcaption>
      <p><strong>Above: </strong>Students working with paper using cutting mat
      </p>
   </figcaption>
  </figure>
  
</div>

@endsection

@section ('lead') 
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<p class="lead">
    The Visual Communications Technology program trains students to use their visual media skills in graphic design, video production, video game design and web design. Students learn in a cross disciplinary environment and have the opportunity to join campus clubs to put their skills to use.
</p>
@endsection

@section('content')
 x
@endsection

@section('sectionals')
<section class="sectional sectional-padded">
  <div class="container-fluid">
      <div class="layout-has-sidenav">
          <div class="content-container"> 

    <div class="video-container">
      @include('_partials.video', [
      'heading' => 'Video Title',
      'desc' => 'Video description Earum omnis reiciendis aut quasi id ea exercitationem dolorum. Asperiores aut dicta odit.',
      'youtubeID' => 'dPr287p0cdw',
      'img' => '/resources/img/videos/Video-Snippet.jpg'
      ]) 
  </div>
 
  <div class="slick-slider carousel-slider">
      
      @include('_partials.carousel', [ 
        'desc' => "Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
        'alt' => 'Photo Title1', 
        'img' => '/resources/img/carousel/rectangle-copy-7.png',          
        'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
        ])  
        @include('_partials.carousel', [ 
        'desc' => "2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
        'alt' => 'Photo Title2', 
        'img' => '/resources/img/carousel/rectangle-copy-7.png',          
        'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
        ])  
        @include('_partials.carousel', [ 
          'desc' => "Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
          'alt' => 'Photo Title3', 
          'img' => '/resources/img/carousel/rectangle-copy-7.png',          
          'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
          ])  
          @include('_partials.carousel', [ 
          'desc' => "2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
          'alt' => 'Photo Title4', 
          'img' => '/resources/img/carousel/rectangle-copy-7.png',          
          'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
          ])  
      </div>
     
    </div>
  <div class="sidebar-container">
     @include('_partials.card', [
     'heading' => 'Course Descriptions',
     'icon-alt' => '',
     'icon' => '',   
     'desc' => 'Browse the course descriptions to explore classes available in this subject',
     'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
     ])
     @include('_partials.card', [
     'heading' => 'Sample Schedule',
     'desc' => 'Get a glimpse at what your quarterly schedule might look like in this program option',
     'icon-alt' => 'map',
     'icon' => 'far fa-map',      
     'link' => 'http://jigsaw.tighten.co/docs/blade-templates-and-partials/'          
     ])

  </div>
  </div>
</div>
</section>

<section class="sectional sectional-padded">
    <div class="container-fluid">
        <div class="slick-slider carousel-slider">
      
            @include('_partials.carousel', [ 
              'desc' => "Car2: Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
              'alt' => 'Car2: Photo Title', 
              'img' => '/resources/img/carousel/rectangle-copy-7.png',          
              'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
              ])  
              @include('_partials.carousel', [ 
              'desc' => "Car2: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
              'alt' => 'Car2: Photo Title2', 
              'img' => '/resources/img/carousel/rectangle-copy-7.png',          
              'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
              ])  
              @include('_partials.carousel', [ 
                'desc' => "Car2: Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
                'alt' => 'Car2: Photo Title', 
                'img' => '/resources/img/carousel/rectangle-copy-7.png',          
                'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
                ])  
                @include('_partials.carousel', [ 
                'desc' => "Car2: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
                'alt' => 'Car2: Photo Title2', 
                'img' => '/resources/img/carousel/rectangle-copy-7.png',          
                'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
                ])  
            </div>
      </div>
</section>
@endsection

@section('program')  
true
@endsection 