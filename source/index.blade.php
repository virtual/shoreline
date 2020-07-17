@extends('_layouts.home')


@section('hero')
<div class="hero-bg-container">
  <div class="hero-offset-bg bg-offset-yellow-wave">
    <div class="hero-content bg-inverted bg-primary">
      <h2 class="h1">Reimagine<br />Possible</h2>
      <p class="primary xl">Wherever you want to go,<br />we'll help you get there.</p>
      <p class="hero-cta"><a href="#" class="btn btn-primary">Explore Programs</a></p>
      <p class="hero-cta-sub"><a href="#" class="more-arrow"><strong>Find a class</strong></a></p>

      <div class="row">
        <div class="col-12 col-sm-6">
          <p class="primary medium">
            <strong>Fall Quarter</strong><br />
            starts Sept 23, 2020
          </p>
        </div>
        <div class="col-12 col-sm-6">
          <p class="primary medium">
            <strong>Winter Quarter</strong><br />
            starts Jan 6, 2021
          </p>
        </div>
      </div>
    </div>
    <div class="hero-bg-offset-image">
      <picture class="d-none">
        <source srcset="https://via.placeholder.com/1200x1200" media="(min-width: 992px)">
        <source srcset="https://via.placeholder.com/800x1200/face8d" media="(min-width: 768px)">
        <source srcset="https://via.placeholder.com/768x480/003f7f" media="(min-width: 480px)">
        <img src="https://via.placeholder.com/480x300" alt="two students look at books in a library">
      </picture>
      <picture>
        <source srcset="{{ $page->baseUrl }}/resources/img/homepage/hero/explore/xl.jpg" media="(min-width: 992px)">
        <source srcset="{{ $page->baseUrl }}/resources/img/homepage/hero/explore/lg.jpg" media="(min-width: 768px)">
        <source srcset="{{ $page->baseUrl }}/resources/img/homepage/hero/explore/med.jpg" media="(min-width: 480px)">
        <img width="1080" height="720" src="{{ $page->baseUrl }}/resources/img/homepage/hero/explore/sm.jpg"
          alt="two students walk outside in warm sunlight near trees">
      </picture>
    </div>
  </div>
</div>

@endsection

@section('content')
<div class="content-1 bg-wave-mint-top">
  <div class="container-fluid mt-5 pt-5">
    <section class="primary sectional sectional-padded">
      <p class="d-none primary text-center xl pt-5 pb-4">A short sentence that sets up the following benefits</p>

      <div class="row">
        <div class="col-6 col-md-3">
          @include('_partials.card-icon-image-round', [
          'buttontext' => 'On-Campus Housing',
          'img' => '/stock/square/housing.jpg',
          'alt' => 'housing',
          'link' => 'https://wts.shoreline.edu/waci002.html',
          'addclass' => ''
          ])
        </div>
        <div class="col-6 col-md-3">
          @include('_partials.card-icon-image-round', [
          'buttontext' => 'Small Class Sizes',
          'img' => '/stock/square/shoreline.williams292.jpg',
          'alt' => 'housing',
          'link' => 'https://wts.shoreline.edu/waci002.html',
          'addclass' => ''
          ])
        </div>
        <div class="col-6 col-md-3">
          @include('_partials.card-icon-image-round', [
          'buttontext' => '18+ Years of Online Courses',
          'img' => '/stock/square/online-learning.jpg',
          'alt' => 'housing',
          'link' => 'https://wts.shoreline.edu/waci002.html',
          'addclass' => ''
          ])
        </div>
        <div class="col-6 col-md-3">
          @include('_partials.card-icon-image-round', [
          'buttontext' => 'Close to Seattle',
          'img' => '/stock/square/seattle.jpg',
          'alt' => 'housing',
          'link' => 'https://wts.shoreline.edu/waci002.html',
          'addclass' => ''
          ])
        </div>
      </div>

    </section>
  </div>
</div>
<div class="content-2 bg-light">
  <div class="container-fluid">

    <section class="primary sectional sectional-padded-lg">
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="text-center"><img src="{{ $page->baseUrl }}/resources/img/homepage/grad-cap.png" alt="grad cap" />
          </p>

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
</div>

@endsection




@section('sectionals')



<section class="sectional bg-primary lazy bg-cover bg-image-mobile-none"
  data-bg="{{ $page->baseUrl }}/resources/img/stock/backgrounds/explore2.jpg">
  <div class=" bg-primary-gradient-top-down sectional-padded-lg ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <h2 class="h1 text-center">Find your path</h2>
          <p class="text-center xl pb-5">Shoreline's areas of study offer you the option to take classes in subjects you
            like to help you find a career you'll love.</p>
          <div class="bg-offset-yellow-wave bg-offset-bottom-right">
            <div class="bg-white toc-links-icons"> 
              <ul class="list-unstyled">
                <li><a href="#"><span class="toc-icon-primary svg-icon-medium">@include('_svg/aos-arts')</span> <span class="toc-title">Arts &
                    Communication</span></a></li>
                <li><a href="#"><span class="toc-icon-bright-green svg-icon-medium">@include('_svg/aos-business')</span>
<span class="toc-title">                      Business</span></a></li>
                <li><a href="#"><span class="toc-icon-orange svg-icon-medium">@include('_svg/aos-health')</span> <span class="toc-title">Health &
                    Medical</span></a></li>
                <li><a href="#"><span class="toc-icon-secondary svg-icon-medium">@include('_svg/aos-stem')</span> <span class="toc-title">Science, Technology,
                    Engineering & Math</span></a></li>
                <li><a href="#"><span class="toc-icon-linkblue svg-icon-medium">@include('_svg/aos-social')</span> <span class="toc-title">Social Sciences
                    & Education</span></a></li>
              </ul>
              <p class="text-center"><a href="#" class="more-arrow"><strong>Browse all degrees &amp;
                certificates</strong></a></p>
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
        <div class="col-12 col-lg-6">
          <div class="pr-4">
            <h2 class="h1">Reimagine Community</h2>
            <p class="primary xl">We're more than just educators - we're your success squad, supporting you every step
              of
              the way.</p>
            <p><a href="#" class="more-arrow"><strong>Find support services</strong></a></p>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="testimonial-slider-container">
              <div class="slick-slider">
                @include('_partials.quote', [
                'desc' => "I joined different clubs, worked as a student tutor, and served on ASG. These experiences
                changed my college experience and my life.",
                'alt' => 'Pavielle Montes',
                'attribution' => 'Pavielle Montes',
                'attribution2' => 'Dental Hygiene AAAS',
                'img' => '',
                'link' => '#'
                ])
                @include('_partials.quote', [
                'desc' => "Shoreline has a great atmosphere where I can focus on my academics and has great facilities
                like the computer labs.",
                'alt' => 'Jane Smith',
                'attribution' => 'Jane Smith',
                'attribution2' => 'Automotive Service Technician AAAS',
                'img' => '',
                'link' => '#'
                ])
                @include('_partials.quote', [
                'desc' => "Shoreline habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
                'alt' => 'Teri Lewis',
                'attribution' => 'Teri Lewis',
                'attribution2' => 'Geology & Earth Sciences Pre-Major',
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
                  alt="Physical education classes boost immune system, help de-stress during COVID-19" height="300" width="400"></a></div>
            <div class="article-info-container">
              <ul class="list-inline news-labels labels mb-0">
                <li class="mb-0"><a class="dark medium" href="https://news.shoreline.edu/category/in-the-classroom/">In
                    the Classroom</a></li>
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
                  alt="Commencement speaker Travis Tribble finds long-awaited success at Shoreline" height="300" width="400"></a></div>
            <div class="article-info-container">
              <ul class="list-inline news-labels labels mb-0">
                <li class="mb-0"><a class="dark medium"
                    href="https://news.shoreline.edu/category/alumni-and-student/">Alumni &amp; Student Spotlight</a>
                </li>
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
                  alt="Shoreline Community College celebrates its first virtual Commencement" height="300" width="400"></a></div>
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