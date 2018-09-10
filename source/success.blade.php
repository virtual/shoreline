@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Arts</a></li>
  </ol>
@endsection

@section('content-header-img')
<div class="center-cropped" 
     style="background-image: url('{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg');">
     <img src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg"/>
</div>


@endsection

@section('content-header')
 
    <h1>Success Starts Here</h1>
    <p class="lead">Whether you’re setting the foundation for a career, starting a degree that will take you to a university and beyond, or building new skills, Shoreline can help.</p>
    <div class="row">
      <div class="col-12 col-sm-6">Top 5 Graduation Rate</div>
      <div class="col-12 col-sm-6">Top 5 Graduation Rate</div>
    </div>
        <div class="row">
      <div class="col-12 col-sm-6">Top 5 Graduation Rate</div>
    </div>
@endsection


@section('content')

<h2>What is your goal?</h2>
<div class="row">
  <div class="col-12 col-md-4">
      <ul class="card-links">
        <li><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</li>
        <li><a href="#" class="more-arrow">College/University Transfer</a> For students who intend to continue their studies at a college or university.</li>
        <li><a href="#" class="more-arrow">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</li>
      </ul>
    </div> 
    <div class="col-12 col-md-4">
      <ul class="card-links">
        <li><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</li>
        <li><a href="#" class="more-arrow">College/University Transfer</a> For students who intend to continue their studies at a college or university.</li>
        <li><a href="#" class="more-arrow">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</li>
      </ul>
    </div> 
    <div class="col-12 col-md-4">
      <ul class="card-links">
        <li><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</li>
        <li><a href="#" class="more-arrow">Complete Highschool</a> Earn a high school diploma.</li>
        <li><a href="#" class="more-arrow">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</li>
      </ul>
    </div> 
    
</div>
<p>&nbsp;</p>
<h2>What are you interested in?</h2>
<div class="d-sm-flex">
  <div class="p-2 flex-fill">
    <a class="mb-1" href="#"><img class="rounded" src="{{ $page->baseUrl }}/resources/img/stock/alexis-brown-82988-unsplash.jpg" /></a>
    <p><a href="#" class="more-arrow">Science, Technology, Math & Engineering</a></p>
  </div>
  
  <div class="p-2 flex-fill">
      <a class="mb-1" href="#"><img class="rounded" src="{{ $page->baseUrl }}/resources/img/stock/alexis-brown-85793-unsplash.jpg" /></a>
      <p><a href="#" class="more-arrow">Business</a></p>
    </div>
    
  <div class="p-2 flex-fill">
      <a class="mb-1" href="#"><img class="rounded" src="{{ $page->baseUrl }}/resources/img/stock/stefan-stefancik-257625-unsplash.jpg" /></a>
      <p><a href="#" class="more-arrow">Health & Wellness</a></p>
    </div>
    
  <div class="p-2 flex-fill">
      <a class="mb-1" href="#"><img class="rounded" src="{{ $page->baseUrl }}/resources/img/stock/alexis-brown-82988-unsplash.jpg" /></a>
      <p><a href="#" class="more-arrow">Art & Communication</a></p>
    </div>
    
  <div class="p-2 flex-fill">
      <a class="mb-1" href="#"><img class="rounded" src="{{ $page->baseUrl }}/resources/img/stock/alexis-brown-85793-unsplash.jpg" /></a>
      <p><a href="#" class="more-arrow">Social Sciences & Education</a></p>
    </div>
</div>
<p>&nbsp;</p>

<h2>What type of student are you?</h2>
<div class="row">
  <div class="col-12 col-sm-4">
      <ul class="card-links">
        <li><a href="#" class="more-arrow">International</a></li>
        <li><a href="#" class="more-arrow">Honors</a></li>
      </ul>
    </div> 
    <div class="col-12 col-sm-4">
      <ul class="card-links">
          <li><a href="#" class="more-arrow">Veteran</a></li>
          <li><a href="#" class="more-arrow">High school student</a></li>
      </ul>
    </div> 
    <div class="col-12 col-sm-4">
      <ul class="card-links">
          <li><a href="#" class="more-arrow">ESL</a></li>
          <li><a href="#" class="more-arrow">Post-bacc</a></li>
      </ul>
    </div> 
    
</div>


@endsection

@section('sectionals')


    @include('_partials/hugbox') 
@endsection 

 
 
@section('content-header-inverse') 
  true
@endsection 