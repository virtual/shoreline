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
  <figure class="header-image"><img alt="" src="{{ $page->baseUrl }}/resources/img/stock/rectangle-3.jpg"><figcaption>
      <p><strong>Above: </strong>User Option: Show as Caption OR show as Alt?
      </p>
   </figcaption>
  </figure>
  
</div>

@endsection

@section ('lead') 
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<p class="xl">
    The Visual Communications Technology program trains students to use their visual media skills in graphic design, video production, video game design and web design. Students learn in a cross disciplinary environment and have the opportunity to join campus clubs to put their skills to use.
</p>
@endsection

@section('content')

<h2>Features &amp; Highlights </h2>
<ul class="large-list features list-def">
    <li><p>Access to state of the art studio equipment and amazing very amazing things that happen way more than other schools that you should really know about such as terry taylor and all the bestest stuff ever.</p></li>
    <li><p>Access to state of the art studio equipment</p></li>
    <li><p>Faculty with industry experience and more and more and more stuff that i don't know about.</p></li>
  </ul>
  @include('_partials.quote', [ 
          'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/testimonials/shoreline-williams72.jpg',          
          'link' => '#'
          ]) 

  <h2>Program Options</h2>      
  <hr/>
  <h3>Graphic Design</h3>
  <p class="large"><span class="medium text-muted">Completion Award</span><br/>Associate of Science</p>
  <p><a href="#" class="more-arrow">More about AAAS in Graphic Design</a></p>

@endsection

@section('sectionals')

<section class="sectional sectional-padded">
  <div class="container-fluid">
      <hr/>
      <h2>Sectional: Move this to another page later</h2>
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
      'desc' => "Car1: Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
      'alt' => 'Car1: Photo Title', 
      'img' => '/resources/img/carousel/rectangle-copy-7.png',          
      'link' => '#'
      ])  
      @include('_partials.carousel', [ 
      'desc' => "Car1: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
      'alt' => 'Car1: Photo Title2', 
      'img' => '/resources/img/carousel/alexis-brown-85793-unsplash.jpg',          
      'link' => '#'
      ])   
        @include('_partials.carousel', [ 
        'desc' => "Car1: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
        'alt' => 'Car1: Photo Title3', 
        'img' => '/resources/img/carousel/rectangle-copy-7.png',          
        'link' => '#'
        ])  
      </div>
     
    </div>
  <div class="sidebar-container">

     @include('_partials.card', [
     'heading' => 'Course Descriptions',
     'icon-alt' => '',
     'icon' => '',   
     'desc' => 'Browse the course descriptions to explore classes available in this subject',
     'link' => '#',
     'buttontext' => 'Request Info'
     ])
     @include('_partials.card', [
     'heading' => 'Sample Schedule',
     'desc' => 'Get a glimpse at what your quarterly schedule might look like in this program option',
     'icon-alt' => 'map',
     'icon' => 'far fa-map',      
     'link' => '#',
     'buttontext' => ''          
     ])

  </div>
  </div>
</div>
</section>

<section class="sectional sectional-padded">
    <div class="container-fluid">
        <div class="slick-slider carousel-slider">
          <!-- should be same height and width; otherwise causes issues on mobile design -->
            @include('_partials.carousel', [ 
              'desc' => "Car2: Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
              'alt' => 'Car2: Photo Title', 
              'img' => '/resources/img/carousel/rectangle-copy-7.png',          
              'link' => '#'
              ])  
              @include('_partials.carousel', [ 
              'desc' => "Car2: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
              'alt' => 'Car2: Photo Title2', 
              'img' => '/resources/img/carousel/alexis-brown-85793-unsplash.jpg',          
              'link' => '#'
              ])   
                @include('_partials.carousel', [ 
                'desc' => "Car2: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
                'alt' => 'Car2: Photo Title3', 
                'img' => '/resources/img/carousel/rectangle-copy-7.png',          
                'link' => '#'
                ])  
            </div>
      </div>
</section>
@endsection


@section('main-sidebar-content')  
  <div class="card card-program-heading">
    <h2>Related Program Links</h2>
    <ul class="list-unstyled">
        <li><a class="scrollable" href="#info">Information Meetings</a></li>
        <li><a class="scrollable" href="#brochure">Program Brochure</a></li>
        <li><a class="scrollable" href="#guide">Planning Guide</a></li>
        <li><a class="scrollable" href="#apply">Online Application</a></li>
        <li><a class="scrollable" href="#prerequisite">Prerequisite Checklist</a></li>
        <li><a class="scrollable" href="#transcript">Transcript Evaluation</a></li>
    </ul> 
  </div>
 @include('_partials.card', [
     'heading' => 'Request Info',
     'icon-alt' => '',
     'icon' => '',   
     'desc' => 'Get in touch with an enrollment coach to learn more about our programs, registering, financial aid, and more',
     'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
     ])

     
     @include('_partials.card', [
     'heading' => 'Apply Today',
     'icon-alt' => '',
     'icon' => '',   
     'desc' => 'Your first step is to get a student ID – it\'s fast, easy, and free',
     'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
     ])

@endsection 

@section('program')  
true
@endsection 