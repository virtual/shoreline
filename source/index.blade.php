@extends('_layouts.home')


@section('hero')
<div class="hero-bg-container">
  <div class="hero-bg-offset">
    <div class="bg-offset-bottom-right bg-offset-primary-wave">
      <picture>
        <source srcset="{{ $page->baseUrl }}/resources/img/homepage/hero/large.jpg" media="(min-width: 768px)">
        <source srcset="{{ $page->baseUrl }}/resources/img/homepage/hero/medium.jpg" media="(min-width: 480px)">
        <img srcset="{{ $page->baseUrl }}/resources/img/homepage/hero/small.jpg" alt="two students look at books in a library">
      </picture>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-5">
    <div class="bg-light pt-5 px-5 pb-3 primary">
      <h2 class="h1">Reimagine Possible</h2>
      <p class="primary xl">Wherever you want to go,<br/>we'll help you get there.</p>
      <p class="pb-2"><a href="#" class="btn btn-primary">Explore Programs</a></p>
      <p class="pt-3 pb-4"><a href="#" class="more-arrow"><strong>Find a class</strong></a></p>

      <div class="row">
        <div class="col-12 col-md-6">
          <p class="primary medium">
            <strong>Fall Quarter Starts</strong><br />
            Sept 23, 2020
          </p>
        </div>
        <div class="col-12 col-md-6">

          <p class="primary medium">
            <strong>Winter Quarter Starts</strong><br />
            Jan 6, 2021
          </p>
        </div>
      </div>
    </div>
  </div>
</div> 

@endsection

@section('content')
<div class="container-fluid mt-3">

  <section class="primary sectional sectional-padded-lg">
    <p class="primary text-center xl pt-5 pb-4">A short sentence that sets up the following benefits</p>

    <div class="row">
      <div class="col-6 col-md-3">
        @include('_partials.card-icon-image-round', [
        'buttontext' => 'On-campus housing',
        'img' => '/stock/square/shoreline.williams185.jpg',
        'alt' => 'housing',
        'link' => 'https://wts.shoreline.edu/waci002.html',
        'addclass' => 'p-5'
        ])
      </div>
      <div class="col-6 col-md-3">
        @include('_partials.card-icon-image-round', [
        'buttontext' => 'Small class sizes',
        'img' => '/stock/square/shoreline.williams292.jpg',
        'alt' => 'housing',
        'link' => 'https://wts.shoreline.edu/waci002.html',
        'addclass' => 'p-5'
        ])
      </div>
      <div class="col-6 col-md-3">
        @include('_partials.card-icon-image-round', [
        'buttontext' => 'On-campus housing',
        'img' => '/stock/square/shoreline.williams73.jpg',
        'alt' => 'housing',
        'link' => 'https://wts.shoreline.edu/waci002.html',
        'addclass' => 'p-5'
        ])
      </div>
      <div class="col-6 col-md-3">
        @include('_partials.card-icon-image-round', [
        'buttontext' => 'Close to Seattle',
        'img' => '/stock/square/shoreline.williams224.jpg',
        'alt' => 'housing',
        'link' => 'https://wts.shoreline.edu/waci002.html',
        'addclass' => 'p-5'
        ])
      </div>
    </div>

  </section>


  <section class="primary sectional sectional-padded-lg">
    <div class="row">
      <div class="col-12 col-md-6">
        <p class="text-center"><img src="{{ $page->baseUrl }}/resources/img/homepage/grad-cap.png" alt="grad cap" /></p>
        
      </div>
      <div class="col-12 col-md-6">
        <h2 class="h1">Don’t let money hold you back</h2>
        <p class="primary xl">Get help with tuition, fees, food, housing, and transportation</p>
        <p><a href="#" class="btn btn-primary">Find Funding &amp; Aid</a></p>
        <p><a href="#" class="more-arrow"><strong>How much does it cost?</strong></a></p>
      </div>
    </div>


  </section>

</div>

@endsection




@section('sectionals')



<section class="sectional bg-primary lazy bg-cover"
  data-bg="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams73.jpg">
  <div class=" bg-primary-gradient-top-down sectional-padded-lg ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h2 class="h1 text-center">Reimagine your path</h2>
        <p class="text-center xl pb-5">Shoreline offers more than 100 areas of study and ipsum, dolor sit amet
          consectetur adipisicing elit. Molestias qui molestiae natus.</p>
        <div class="bg-offset-yellow-wave bg-offset-bottom-right">
          <div class="bg-light pt-3 pb-5 px-5">
            <div class="toc-links-icons">
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa-primary fal fa-eye" aria-hidden="true"></span> Arts & Communication</a></li>
                <li><a href="#"><span class="fa-bright-green fal fa-chart-line" aria-hidden="true"></span> Business</a></li>
                <li><a href="#"><span class="fa-orange fal fa-briefcase-medical" aria-hidden="true"></span> Health & Medical</a></li>
                <li><a href="#"><span class="fa-secondary fal fa-atom" aria-hidden="true"></span> Science, Technology, Engineering & Math</a></li>
                <li><a href="#"><span class="fa-linkblue fal fa-book-open" aria-hidden="true"></span> Social Sciences & Education</a></li>
              </ul>
            </div>
            <p class="text-center"><a href="#" class="more-arrow"><strong>Browse all degrees &amp; certificates</strong></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<div class="bg-light">
  <div class="container-fluid">

    <section class="primary sectional sectional-padded-lg">

      <div class="row">
        <div class="col-12 col-md-6">
          <div class="pr-4">
            <h2 class="h1">Reimagine Community</h2>
            <p class="primary xl">We're more than just educators - we're your success squad, supporting you every step of
              the way.</p>
            <p><a href="#" class="more-arrow"><strong>Find support services</strong></a></p>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="testimonial-slider-container container-fluid py-3">
            <div class="pr-5">
              <div class="slick-slider">
              @include('_partials.quote', [ 
                'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
                'alt' => 'Pavielle Montes',
                'attribution' => 'Pavielle Montes',
                'attribution2' => 'Associate of Arts and High School Diploma',
                'img' => '',          
                'link' => '#'
                ]) 
                @include('_partials.quote', [ 
                'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
                'alt' => 'Pavielle Montes',
                'attribution' => 'Pavielle Montes',
                'attribution2' => 'Associate of Arts and High School Diploma',
                'img' => '',          
                'link' => '#'
                ]) 
                @include('_partials.quote', [ 
                'desc' => "I have come to believe that the whole world is an enigma, a harmless enigma that is made terrible by our own mad attempt to interpret it as though it had an underlying truth.",
                'alt' => 'Pavielle Montes',
                'attribution' => 'Pavielle Montes',
                'attribution2' => 'Associate of Arts and High School Diploma',
                'img' => '',          
                'link' => '#'
                ]) 
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
</div>

<div class="container-fluid">
  <section class="sectional sectional-padded-lg primary">
    <h2 class="h1">Campus News</h2>
    <p class="primary pt-3 pb-5 xl">Things are happening at Shoreline</p>

    <!-- ref https://www.shoreline.edu/_z-test/jeanine/news.aspx -->
    <div class="news-horizontal news-no-description">
      <div class="row">
        <div class="col-sm-4">
          <article class="news-article">
            <div class="image-container"><a
                href="https://news.shoreline.edu/2020/06/24/physical-education-classes-boost-immune-system-help-de-stress-during-covid-19/"><img
                  src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams81.jpg"
                  alt="Physical education classes boost immune system, help de-stress during COVID-19"></a></div>
            <div class="article-info-container">
              <ul class="list-inline news-labels labels mb-0">
                <li class="mb-0"><a class="dark medium" href="https://news.shoreline.edu/category/in-the-classroom/">In the Classroom</a></li>
              </ul>
              <h3 class="h4"><a
                  href="https://news.shoreline.edu/2020/06/24/physical-education-classes-boost-immune-system-help-de-stress-during-covid-19/">Physical
                  education classes boost immune system, help de-stress during COVID-19</a></h3>
               
            </div>
          </article>
        </div>
        <div class="col-sm-4">
          <article class="news-article">
            <div class="image-container"><a
                href="https://news.shoreline.edu/2020/06/19/commencement-speaker-travis-tribble-finds-long-awaited-success-at-shoreline/"><img
                  src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams53.jpg"
                  alt="Commencement speaker Travis Tribble finds long-awaited success at Shoreline"></a></div>
            <div class="article-info-container">
              <ul class="list-inline news-labels labels mb-0">
                <li class="mb-0"><a class="dark medium" href="https://news.shoreline.edu/category/alumni-and-student/">Alumni &amp; Student Spotlight</a></li>
              </ul>
              <h3 class="h4"><a
                  href="https://news.shoreline.edu/2020/06/19/commencement-speaker-travis-tribble-finds-long-awaited-success-at-shoreline/">Commencement
                  speaker Travis Tribble finds long-awaited success at Shoreline</a></h3>
               
            </div>
          </article>
        </div>
        <div class="col-sm-4">
          <article class="news-article">
            <div class="image-container"><a
                href="https://news.shoreline.edu/2020/06/18/shoreline-community-college-celebrates-its-first-virtual-commencement/"><img
                  src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams21.jpg"
                  alt="Shoreline Community College celebrates its first virtual Commencement"></a></div>
            <div class="article-info-container">
              <ul class="list-inline news-labels labels mb-0">
                <li class="mb-0"><a class="dark medium" href="https://news.shoreline.edu/category/awards/">Awards &amp;
                    Scholarships</a></li>
              </ul>
              <h3 class="h4"><a
                  href="https://news.shoreline.edu/2020/06/18/shoreline-community-college-celebrates-its-first-virtual-commencement/">Shoreline
                  Community College celebrates its first virtual Commencement</a></h3>
            </div>
          </article>
        </div>
      </div>
    </div>
    <!-- end ref -->
    <p class="pt-5 text-center"><a href="#" class="more-arrow"><strong>Read more campus news</strong></a></p>
  </section>

  
</div>

@endsection

@section('archive')
<section class="sectional sectional-padded-lg primary">
  <h2 class="h1">Lazy load image</h2>
  <img class="lazy" data-src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg" alt="a big image" />
</section>
@endsection


@section('homepage')
true
@endsection