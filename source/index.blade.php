@extends('_layouts.home')

@section('hero1')
<section class="hero left bg-primary">
    <div class="hero-image-wrapper"></div><style type="text/css">
 .homepage-banner.hero-1{
   /* background-image: url(./resources/img/homepage/top/large2.jpg); */
   background-image: url(./resources/img/stock/shoreline.williams185.jpg);
 }
 
 /* @media screen and (max-width: 900px) { 						
  .homepage-banner.hero-1 {
   background-image: url(./resources/img/homepage/top/medium.jpg);
   }
 } 
 
 @media screen and (max-width: 500px) {  
  .homepage-banner.hero-1 {
   background-image: url(./resources/img/homepage/top/small.jpg);
   }
 } 						 */
</style>
<div class="hero-caption">
       <h2 class="heading">What type of student are you?</h2>
       <p class="desc">Shoreline has programs for all stages of life</p>
       <div class="expand-wrapper"><a href="/" class="expand-button btn btn-primary">Expand</a></div>
    </div>
 </section>
@endsection


@section('hero2')
<section class="hero left bg-primary">
    <div class="hero-image-wrapper"></div><style type="text/css">
 .homepage-banner.hero-2{
   background-image: url(./resources/img/stock/shoreline.williams292.jpg);
 }
 
 /* @media screen and (max-width: 900px) { 						
  .homepage-banner.hero-2 {
   background-image: url(./resources/img/homepage/bottom/medium.jpg);
   }
 } 
 
 @media screen and (max-width: 500px) {  
  .homepage-banner.hero-2 {
   background-image: url(./resources/img/homepage/bottom/small.jpg);
   }
 } 						 */
</style>
<div class="hero-caption">
       <h2 class="heading">Build a career and community</h2>
       <p class="desc">Forming partnerships for a healthy human, economic, and natural environment</p>
       <div class="expand-wrapper"><a href="/" class="expand-button btn btn-primary">Expand</a></div>
    </div>
 </section>
@endsection

@section('content')
 

<div class="row">

  <div class="col-12 col-md-6 col-lg-4">
      <ul class="card-links">
          <li><a href="#" class="more-arrow">College/University Transfer</a></li>
          <li><a href="#" class="more-arrow">Professional & Technical</a></li>
          <li><a href="#" class="more-arrow">International Students</a></li>
          <li><a href="#" class="more-arrow">Transitional (ESL, HS21, I-Best GED…)</a></li>
        </ul>
  </div>
  <div class="col-12 col-md-6 col-lg-4">
      <ul class="card-links">
          <li><a href="#" class="more-arrow">Continuing Education</a></li>
          <li><a href="#" class="more-arrow">Learn Online</a></li>
          <li><a href="#" class="more-arrow">Veteran</a></li>
          <li><a href="#" class="more-arrow">Browse All Programs</a></li>
        </ul>
  </div>
  <div class="col-12 col-lg-4">
    <a class="btn btn-important btn-block" href="/apply-and-aid/apply.aspx">Apply Now</a>
    <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Ask a Question</a>
    <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Visit Campus</a>
  </div>

</div>

  
@endsection


@section ('icons1') 

<div class="row">
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '100%',
        'desc' => 'Transfer and professional/technical areas of study',
        'iconalt' => 'book',     
        'icon' => './resources/img/icons/homepage/book.png',          
        'buttontext' => 'See all Programs',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '900+',
        'desc' => 'International students from around the world',
        'iconalt' => 'globe',          
        'icon' => './resources/img/icons/homepage/globe.png',          
        'buttontext' => 'Join Us',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '140+',
        'desc' => 'Scholarships awarded annually',
        'iconalt' => 'quote',
        'icon' => './resources/img/icons/homepage/badge.png',          
        'buttontext' => 'Find Scholarships',
        'link' => '#'
        ])
  
    </div>
</div>
@endsection

 

  @section('sectionals')
 
      @include('_partials/hugbox')  
  @endsection 
  