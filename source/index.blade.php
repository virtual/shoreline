@extends('_layouts.home')
 


@section('content')
 <div class="container-fluid">
<section>
  On-campus housing

  Small class sizes
  
  Close to Seattle
</section>
 

<section>
  <div class="row">
    <div class="col-12 col-md-6">cap graphic</div>
    <div class="col-12 col-md-6">
      <h2>Don’t let money hold you back</h2>
      <p>Get help with tuition, fees, food, housing, and transportation</p>
      <p><a href="#" class="btn btn-primary">Explore Programs</a></p>
  <p><a href="#" class="more-arrow">Find a class</a></p>
    </div>
  </div>

 
</section>


<section>
  
  <div class="row">
    <div class="col-12 col-md-6">
      <h2>Reimagine Community</h2>
      <p>We're more than just educators - we're your success squard, supporting you every step of the way.</p>
      <p><a href="#" class="more-arrow">Find a class</a></p>
    </div>
    <div class="col-12 col-md-6">
      @include('_partials.quote', [ 
          'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/testimonials/shoreline-williams72.jpg',          
          'link' => '#'
          ]) 
    </div>
  </div>

</section>

<section class="sectional sectional-padded">
  <h2>Lazy load image</h2>
  <img class="lazy" data-src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg"
    alt="a big image" />
</section>
</div>

<section class="sectional sectional-padded bg-primary lazy"
  data-bg="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams73.jpg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h2 class="text-center">Reimagine your path // Lazy load background</h2>
        <p class="lead text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae iusto amet atque
          laborum
          voluptatibus deserunt eius, minima pariatur praesentium, beatae maiores optio quo totam voluptates omnis
          libero eaque nesciunt nulla!</p>
        <div class="bg-offset-yellow-wave bg-offset-bottom-right">
          <div class="bg-light py-3 px-5">
            <h3>Things</h3>
            <div class="toc-links-icons">
              <ul class="list-unstyled"> 
                <li><a href="#">Arts & Communication</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Health & Medical</a></li>
                <li><a href="#">Science, Technology, Engineering & Math</a></li>
                <li><a href="#">Social Sciences & Education</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
@endsection

  
 

  @section('sectionals')
 
      @include('_partials/hugbox')  
  @endsection 
  
  
@section('homepage')  
true
@endsection
