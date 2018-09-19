@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Communications Technology</a></li>
  </ol>
@endsection

@section('content-header-img')
<div class="center-cropped" 
     style="background-image: url('{{ $page->baseUrl }}/resources/img/stock/image.jpg');">
     <img alt="" src="{{ $page->baseUrl }}/resources/img/stock/image.jpg"/>
</div>


@endsection

@section('content-header')
 
    <h1>Visual Communications Technology</h1>
    <p class="xxl">The future is visual</p>
    <a href="#" class="btn btn-important">Apply</a>
    <a href="#" class="btn btn-secondary">Ask a Question</a>
@endsection

@section ('lead') 
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<p class="xl">
    The Visual Communications Technology program trains students to use their visual media skills in graphic design, video production, video game design and web design. Students learn in a cross disciplinary environment and have the opportunity to join campus clubs to put their skills to use.
</p>
@endsection

@section('content')

<h2 class="mt-5">Features &amp; Highlights </h2>
<ul class="large-list features list-def">
    <li><p>Access to state of the art studio equipment and amazing very amazing things that happen way more than other schools that you should really know about such as terry taylor and all the bestest stuff ever.</p></li>
    <li><p>Access to state of the art studio equipment</p></li>
    <li><p>Faculty with industry experience and more and more and more stuff that i don't know about.</p></li>
  </ul>


<div class="my-5 py-5">
    <kbd class="small">.slick-slider.simple-slickslider.slick-slider-no-arrows</kbd>
  <div class="slick-slider simple-slickslider slick-slider-no-arrows">
    <div>
      @include('_partials.quote', [ 
      'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
      'alt' => 'Pavielle Montes',
      'attribution' => 'Pavielle Montes',
      'attribution2' => 'Associate of Arts and High School Diploma',
      'img' => '/resources/img/testimonials/shoreline-williams72.jpg',          
      'link' => '#'
      ]) 
    </div>
    <div>
      @include('_partials.quote', [ 
      'desc' => "Lorems to the ipsums to the lopsems…",
      'alt' => 'Milla Vanilla',
      'attribution' => 'Milla Vanilla',
      'attribution2' => 'Transfer Program in Visual Communications Technology',
      'img' => '/resources/img/testimonials/shoreline-williams72h.jpg',          
      'link' => '#'
      ]) 
    </div>
  </div>
</div>

  <h2>Program Options</h2>      
  <hr/>
  <h3>Video Game Design</h3>
  <ul class="list-inline inline-list-padded muted-dl">
      <li><dl><dt>Completion Award</dt><dd>Associate of Science</dd></dl></li>
      <li><dl><dt>Length</dt><dd>90 Credits (6 quarter or 10 quarter)</dd></dl></li>
      <li><dl><dt>Location</dt><dd>On Campus or 100% Online</dd></dl></li>
  </ul>
  <p><a href="{{ $page->baseUrl }}/option" class="more-arrow">More about AAAS in Video Game Design</a></p>
  <hr/>
  <h3>Game Art and Design</h3>
  <ul class="list-inline inline-list-padded muted-dl">
      <li><dl><dt>Completion Award</dt><dd>Associate of Science</dd></dl></li>
      <li><dl><dt>Length</dt><dd>90 Credits (6 quarter or 10 quarter)</dd></dl></li>
      <li><dl><dt>Location</dt><dd>On Campus or 100% Online</dd></dl></li>
  </ul>
  <p><a href="#" class="more-arrow">More about AAAS in Game Art and Design</a></p>
  <hr/>
  <h3>Graphic Design with really long text</h3>
  <ul class="list-inline inline-list-padded muted-dl">
      <li><dl><dt>Completion Award</dt><dd>Associate of Science, Or another fancy degree</dd></dl></li>
      <li><dl><dt>Length</dt><dd>90 Credits (6 quarter or 10 quarter)</dd></dl></li>
      <li><dl><dt>Location</dt><dd>On Campus or 100% Online</dd></dl></li>
  </ul>
  <p><a href="#" class="more-arrow">More about AAAS in Graphic Design</a></p>
  <hr/>
  <h3>Game Art and Design</h3>
  <ul class="list-inline inline-list-padded muted-dl">
      <li><dl><dt>Completion Award</dt><dd>Associate of Science</dd></dl></li>
      <li><dl><dt>Length</dt><dd>90 Credits (6 quarter or 10 quarter)</dd></dl></li>
      <li><dl><dt>Location</dt><dd>On Campus or 100% Online</dd></dl></li>
  </ul>
  <p><a href="#" class="more-arrow">More about AAAS in Game Art and Design</a></p>
@endsection

@section('main-sidebar-content')  
  <div class="card card-program-heading">
    <div class="card-body">
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
  </div>
 @include('_partials.card', [
     'heading' => 'Request Info',
     'iconalt' => '',
     'icon' => '',   
     'desc' => 'Get in touch with an enrollment coach to learn more about our programs, registering, financial aid, and more',
     'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
     ])

     
     @include('_partials.card', [
     'heading' => 'Apply Today',
     'iconalt' => '',
     'icon' => '',   
     'desc' => 'Your first step is to get a student ID – it\'s fast, easy, and free',
     'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
     ])

@endsection 
 
@section('content-header-inverse3') 
  true
@endsection 