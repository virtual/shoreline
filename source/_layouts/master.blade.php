<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="theme-color" content="#8d0a0a">
  <title>Shoreline Community College</title>
  <meta property="og:title" content="Shoreline Community College" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/thumbnail.jpg" />
  <meta property="og:url" content="http://www.Shorelinecollege.edu/" />
  <meta property="og:site_name" content="Shoreline Community College" />
  <meta property="og:description" content="Shoreline Community College..." />
  <meta property="og:locale" content="en_us" />
  <link rel="image_src" href="{{ $page->baseUrl }}/images/thumbnail.jpg" />

  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/bootstrap.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/slick.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/slick-theme.css">

  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <noscript>
    <style>
      .navbar-collapse,
      .collapse,
      .dropdown-menu {
        display: block !important
      }

      .subnav #submenu>ul ul {
        display: block;
      }
    </style>
  </noscript>

  <!-- Analytics -->
</head>

<body>
    @include('_partials.topbar')
<header id="header">
  <div id="skiptocontent">
    <a href="#maincontent" title="Skip Main Navigation">Skip Main Navigation</a>
  </div>
  <div class="container-fluid d-none d-md-block">
    <div class="row">
      <div class="col-sm-3 header-logo">

        @if (trim($__env->yieldContent('homepage')))
        <!-- H1 on homepage only -->
        <h1>
          <a class="navbar-brand" href="/">
            <img src="{{ $page->baseUrl }}/resources/img/logos/shoreline-color.png" alt="Shoreline Community College" />
            <span class="sr-only">Shoreline Community College</span>
          </a>
        </h1>
        @else
        <a class="navbar-brand" href="/">
          <img src="{{ $page->baseUrl }}/resources/img/logos/shoreline-color.png" alt="Shoreline Community College" />
          <span class="sr-only">Shoreline Community College</span>
        </a>
        @endif

      </div>
      <div class="col-md-9 d-flex header-actions">
        <div class="navbar-container d-flex">
          <nav class="navbar navbar-expand-sm navmenu quicklinks">
            <!-- @include ('_partials.quicklinks') -->
          </nav>
        </div>
        <div class="search-container d-flex">
          <!-- @include ('_partials.searchform') -->
        </div>
      </div>
    </div>
  </div>
</header>

<div id="maincontent" class="flex-layout-body">
  @if (trim($__env->yieldContent('nav')))
  <div class="layout-has-nav">
    <div class="nav-container">

      <nav class="subnav navbar navbar-expand-md navbar-light">
        <!--<h2>
          <span role="button" data-toggle="collapse" data-target="#submenu" aria-controls="submenu" aria-expanded="false" aria-label="Toggle navigation"
            aria-hidden="true" class="fas fa-bars toggle">
            <span class="sr-only">Expand Submenu</span>
          </span> yield('menuheader')</h2>-->
        <a class="sr-only show-on-focus" href="#interior">Skip Navigation</a>
        <div class="collapse navbar-collapse" id="submenu">
          @yield('nav')
        </div>
      </nav>
    </div>
    @endif


    <main id="interior">
      <div class="padded content-section ">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </main>
  @if (trim($__env->yieldContent('nav')))
  </div>
  @endif

</div>

<!-- FOOTER -->
<div id="footer">
  @include('_partials/footer')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="{{ $page->baseUrl }}/assets/js/main.js"></script>
<script src="{{ $page->baseUrl }}/assets/js/slick.min.js"></script>
<script src="{{ $page->baseUrl }}/assets/js/slick-app.js?v=3"></script>
</body>

</html>