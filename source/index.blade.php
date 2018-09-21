@extends('_layouts.home')

@section('hero1')
<section class="hero left bg-primary">
    <div class="hero-image-wrapper"></div>
    <style type="text/css">
 .homepage-banner.hero-1{
   background-image: url(./resources/img/homepage/a1/large.jpg);
 }
 
 @media screen and (max-width: 900px) { 						
  .homepage-banner.hero-1 {
   background-image: url(./resources/img/homepage/a1/medium.jpg);
   }
 } 
 
 @media screen and (max-width: 479px) {  
  .homepage-banner.hero-1 {
   background-image: url(./resources/img/homepage/a1/small.jpg);
   }
 } 						 
</style>
<div class="hero-caption">
       <h2 class="heading">What type of student are you?</h2>
       <p class="desc">Shoreline has programs for all stages of life</p>
       <div class="expand-wrapper"><button aria-expanded="false" class="expand-button btn btn-primary">Expand</button></div>
    </div>
 </section>
@endsection


@section('hero2')
<section class="hero left bg-primary">
    <div class="hero-image-wrapper"></div>
    <style type="text/css">
      .homepage-banner.hero-2{
        background-image: url(./resources/img/homepage/a2/large.jpg);
      }
      
      @media screen and (max-width: 900px) { 						
       .homepage-banner.hero-2 {
        background-image: url(./resources/img/homepage/a2/medium.jpg);
        }
      } 
      
      @media screen and (max-width: 479px) {  
       .homepage-banner.hero-2 {
        background-image: url(./resources/img/homepage/a2/small.jpg);
        }
      } 						 
     </style>
<div class="hero-caption">
       <h2 class="heading">Fully invest in 
        your future</h2>
       <p class="desc">We help you inside and outside the classroom</p>
       <div class="expand-wrapper"><button aria-expanded="false" class="scrollable expand-button btn btn-primary">Expand</button></div>
    </div>
 </section>
@endsection

@section('hero3')
<section class="hero left bg-primary">
    <div class="hero-image-wrapper"></div>
    <style type="text/css">
      .homepage-banner.hero-3{
        background-image: url(./resources/img/homepage/a3/large.jpg);
      }
      
      @media screen and (max-width: 900px) { 						
       .homepage-banner.hero-3 {
        background-image: url(./resources/img/homepage/a3/medium.jpg);
        }
      } 
      
      @media screen and (max-width: 479px) {  
       .homepage-banner.hero-3 {
        background-image: url(./resources/img/homepage/a3/small.jpg);
        }
      } 						 
     </style>
<div class="hero-caption">
       <h2 class="heading">Build a career and community</h2>
       <p class="desc">Forming partnerships for a healthy human, economic, and natural environment</p>
       <div class="expand-wrapper"><button aria-expanded="false" class="expand-button btn btn-primary">Expand</button></div>
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
        'iconalt' => 'badge',
        'icon' => './resources/img/icons/homepage/badge.png',          
        'buttontext' => 'Find Scholarships',
        'link' => '#'
        ])
  
    </div>
</div>
@endsection


@section ('icons2') 

<div class="row">
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '14.4m',
        'desc' => 'Average amount of financial air awarded annually',
        'iconalt' => 'dollar',     
        'icon' => './resources/img/icons/homepage/dollar.png',          
        'buttontext' => 'Apply for Financial Aid',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '178+',
        'desc' => 'Universities to which our students have transferred',
        'iconalt' => 'arrows',          
        'icon' => './resources/img/icons/homepage/arrows.png',          
        'buttontext' => 'See Transfer Destinations',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '60+',
        'desc' => 'Shows & events in the campus theater each year',
        'iconalt' => 'mask',
        'icon' => './resources/img/icons/homepage/mask.png',          
        'buttontext' => 'More about the Theater',
        'link' => '#'
        ])
  
    </div>
</div>
@endsection
 

  @section('sectionals')
 
      @include('_partials/hugbox')  
  @endsection 
  