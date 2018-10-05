<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="theme-color" content="#00685e">
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
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css?v=2">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
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

<body class="homepage">
  @include('_partials.topbar') @include('_partials.header')
  <main id="maincontent">
<div class="homepage-banner-container">
  <div class="homepage-banner hero-1 ">
    @yield('hero1')

  </div>
  <div class="homepage-expand hero-1">
    <div class="arrow-marker"></div>
    <div class="container-fluid">

      @yield('content')
    </div>
  </div>
</div>


<div class="featureicon-container py-5 bg-light">
  <div class="container-fluid">
    @yield('icons1')
  </div>
</div>

<div class="homepage-banner-container">
  <div class="homepage-banner hero-2 ">
    @yield('hero2')
  </div>

  <div class="homepage-expand hero-2">
    <div class="arrow-marker"></div>
    <div class="container-fluid">
      @yield('content')
    </div>
  </div>
</div>

<div class="featureicon-container py-5 bg-light">
  <div class="container-fluid">
    @yield('icons2')
  </div>
</div>

<div class="homepage-banner-container">
  <div class="homepage-banner hero-3 ">
    @yield('hero3')
  </div>

  <div class="homepage-expand hero-3">
    <div class="arrow-marker"></div>
    <div class="container-fluid">
      @yield('content')
    </div>
  </div>
</div>
</main>



  <!-- all pages can have sectionals after main content -->
  @if (trim($__env->yieldContent('sectionals'))) @yield('sectionals') @endif



    <!-- FOOTER -->
    <div id="footer">
      @include('_partials/footer')
    </div>
    <script src="{{ $page->baseUrl }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ $page->baseUrl }}/assets/js/popper.min.js"></script>
    <script src="{{ $page->baseUrl }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ $page->baseUrl }}/assets/js/main.js"></script>  
</body>

</html>