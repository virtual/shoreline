@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

@section('content-header-img')
<div class="center-cropped" 
     style="background-image: url('{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg');">
     <img alt="" src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg"/>
</div>


@endsection

@section('content-header')
 
<h1>Success Starts Here</h1>
<p class="lead">Whether you’re setting the foundation for a career, starting a degree that will take you to a
  university and beyond, or building new skills, Shoreline can help.</p>
<div class="row">
  <div class="col-12 col-sm-6">
    <p class="medium"><span class="fa-container fa-2x fas fa-graduation-cap" aria-hidden="true"></span> Top 5 Graduation Rate</p>
    <p class="medium"><span class="fa-container fa-2x fas fa-book-open" aria-hidden="true"></span> Over 200 Program Options</p>
  </div>
  <div class="col-12 col-sm-6">
    <p class="medium"><span class="fa-container fa-2x fas fa-certificate" aria-hidden="true"></span> Over 20 Certificates</p>
  </div>
</div>
@endsection


@section('content')

<h2>What is your goal? <kbd class="small">ul.card-links</kbd></h2>
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

<h2>What is your goal? <kbd class="small">p.card-link</kbd></h2>
<div class="row">
  <div class="col-12 col-md-4">
    <p class="card-link"><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</p><p class="card-link"><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</p><p class="card-link"><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</p>
    </div> 
    <div class="col-12 col-md-4">
      <p class="card-link"><a href="#" class="more-arrow">Professional & Technical</a> Multiple children = no 100% height</p>
      <p class="card-link"><a href="#" class="more-arrow">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</p>
      <p class="card-link"><a href="#" class="more-arrow">Professional & Technical</a> Adjusts based on content</p>
    </div> 
    <div class="col-12 col-md-4">
     
      <p class="card-link"><a href="#" class="more-arrow">Complete Highschool</a> Since this is the only child within the column, it is given 100% height.</p>
  
    </div> 
</div>

<h3>More information <kbd class="small">p.card-link</kbd></h3>
<div class="row">
  <div class="col-12 col-md-4">
      
        <p class="card-link"><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</p>
      
    </div> 
    <div class="col-12 col-md-4">
      
        <p class="card-link"><a href="#" class="more-arrow">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</p>
      
    </div> 
    <div class="col-12 col-md-4">
      
        <p class="card-link"><a href="#" class="more-arrow">Complete Highschool</a> Earn a high school diploma.</p>
      
    </div> 
    
</div>

<p>&nbsp;</p>
<h2>What are you interested in?</h2>
<div class="mt-4 d-md-flex md-flex-5 stack-img-links justify-content-between">
  <div class="stack-img-link">
    <div class="row flex align-items-center">
      <div class="col-4 col-sm-3 col-md-12"><a class="mb-1" href="#"><img class="rounded" alt="a student picks up a lab vial and studies it" src="{{ $page->baseUrl }}/resources/img/stock/stack-img/stem.jpg" /></a></div>
      <div class="col-8 col-sm-9 col-md-12"><p><a href="#" class="more-arrow">Science, Technology, Math & Engineering</a></p></div>
  </div>
  </div>
  
  <div class="stack-img-link">
    <div class="row flex align-items-center">
      <div class="col-4 col-sm-3 col-md-12"><a class="mb-1" href="#"><img class="rounded" alt="two students work on a project using a computer" src="{{ $page->baseUrl }}/resources/img/stock/stack-img/business.jpg" /></a></div>
      <div class="col-8 col-sm-9 col-md-12"><p><a href="#" class="more-arrow">Business</a></p></div>
    </div>
    </div>
    
  <div class="stack-img-link">
    <div class="row flex align-items-center">
      <div class="col-4 col-sm-3 col-md-12"><a class="mb-1" href="#"><img class="rounded" alt="a student and professor wearing labcoats work in a lab" src="{{ $page->baseUrl }}/resources/img/stock/stack-img/health-wellness.jpg" /></a></div>
      <div class="col-8 col-sm-9 col-md-12"><p><a href="#" class="more-arrow">Health & Wellness</a></p></div>
    </div>
    </div>
    
  <div class="stack-img-link">
    <div class="row flex align-items-center">
      <div class="col-4 col-sm-3 col-md-12"><a class="mb-1" href="#"><img class="rounded" alt="students work on a gridded mat" src="{{ $page->baseUrl }}/resources/img/stock/stack-img/art-comm.jpg" /></a></div>
      <div class="col-8 col-sm-9 col-md-12"><p><a href="#" class="more-arrow">Art & Communication</a></p></div>
    </div>
    </div>
    
  <div class="stack-img-link">
    <div class="row flex align-items-center">
      <div class="col-4 col-sm-3 col-md-12"><a class="mb-1" href="#"><img class="rounded" alt="a group of women talk while sitting at a table" src="{{ $page->baseUrl }}/resources/img/stock/stack-img/social-sciences.jpg" /></a></div>
      <div class="col-8 col-sm-9 col-md-12"><p><a href="#" class="more-arrow">Social Sciences & Education</a></p></div>
    </div>
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