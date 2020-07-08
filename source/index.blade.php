@extends('_layouts.home')


@section('hero')
<div class="row">
  <div class="col-12 col-md-5">
    <div class="bg-light py-3 px-5 primary">
      <h2 class="h1">Reimagine Possible</h2>
      <p class="primary xl">Wherever you want to go, we'll help you get there.</p>
      <p><a href="#" class="btn btn-primary">Explore Programs</a></p>
      <p><a href="#" class="more-arrow">Find a class</a></p>

      <div class="row">
        <div class="col-12 col-md-6">
          <p class="primary medium">
            <strong>Fall Quarter Starts</strong><br />
            Sept 18, 2020
          </p>
        </div>
        <div class="col-12 col-md-6">

          <p class="primary medium">
            <strong>Winter Quarter Starts</strong><br />
            Jan 1, 2021
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <section class="primary sectional sectional-padded-lg">
    <p class="primary text-center xl pt-3 pb-5">A short sentence that sets up the following benefits</p>

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
        <p class="text-center">cap graphic</p>
      </div>
      <div class="col-12 col-md-6">
        <h2 class="h1">Don’t let money hold you back</h2>
        <p class="primary xl">Get help with tuition, fees, food, housing, and transportation</p>
        <p><a href="#" class="btn btn-primary">Find Funding &amp; Aid</a></p>
        <p><a href="#" class="more-arrow">How much does it cost?</a></p>
      </div>
    </div>


  </section>

</div>

@endsection




@section('sectionals')



<section class="sectional sectional-padded-lg bg-primary lazy"
  data-bg="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams73.jpg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h2 class="h1 text-center">Reimagine your path // Lazy load background</h2>
        <p class="text-center xl pb-5">Shoreline offers more than 100 areas of study and Lorem ipsum, dolor sit amet
          consectetur adipisicing elit. Molestias qui molestiae natus.</p>
        <div class="bg-offset-yellow-wave bg-offset-bottom-right">
          <div class="bg-light py-3 px-5">
            <div class="toc-links-icons">
              <ul class="list-unstyled">
                <li><a href="#">Arts & Communication</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Health & Medical</a></li>
                <li><a href="#">Science, Technology, Engineering & Math</a></li>
                <li><a href="#">Social Sciences & Education</a></li>
              </ul>
            </div>
            <p class="text-center"><a href="#" class="more-arrow">Browse all degrees &amp; certificates</a></p>
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
          <h2 class="h1">Reimagine Community</h2>
          <p class="primary xl">We're more than just educators - we're your success squard, supporting you every step of
            the way.</p>
          <p><a href="#" class="more-arrow">Find support services</a></p>
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
  </div>
</div>

<div class="container-fluid">
  <section class="sectional sectional-padded-lg primary">
    <h2 class="h1">Campus News</h2>
    <p class="primary py-3 xl">Things are happening at Shoreline</p>

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
              <h3 class="h4"><a
                  href="https://news.shoreline.edu/2020/06/24/physical-education-classes-boost-immune-system-help-de-stress-during-covid-19/">Physical
                  education classes boost immune system, help de-stress during COVID-19</a></h3>
              <ul class="list-inline news-labels labels mb-0">
                <li><a href="https://news.shoreline.edu/category/in-the-classroom/"
                    class="badge badge-primary badge-sm"><span class="fa fa-tag" aria-hidden="true"></span><span
                      class="sr-only">tag</span> In the Classroom</a></li>
              </ul>
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
              <h3 class="h4"><a
                  href="https://news.shoreline.edu/2020/06/19/commencement-speaker-travis-tribble-finds-long-awaited-success-at-shoreline/">Commencement
                  speaker Travis Tribble finds long-awaited success at Shoreline</a></h3>
              <ul class="list-inline news-labels labels mb-0">
                <li><a href="https://news.shoreline.edu/category/alumni-and-student/"
                    class="badge badge-primary badge-sm"><span class="fa fa-tag" aria-hidden="true"></span><span
                      class="sr-only">tag</span> Alumni &amp; Student Spotlight</a></li>
              </ul>
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
              <h3 class="h4"><a
                  href="https://news.shoreline.edu/2020/06/18/shoreline-community-college-celebrates-its-first-virtual-commencement/">Shoreline
                  Community College celebrates its first virtual Commencement</a></h3>
              <ul class="list-inline news-labels labels mb-0">
                <li><a href="https://news.shoreline.edu/category/awards/" class="badge badge-primary badge-sm"><span
                      class="fa fa-tag" aria-hidden="true"></span><span class="sr-only">tag</span> Awards &amp;
                    Scholarships</a></li>
              </ul>
            </div>
          </article>
        </div>
      </div>
    </div>
    <!-- end ref -->
  </section>

  <section class="sectional sectional-padded-lg primary">
    <h2 class="h1">Lazy load image</h2>
    <img class="lazy" data-src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg" alt="a big image" />
  </section>
</div>

@endsection


@section('homepage')
true
@endsection