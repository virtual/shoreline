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
    @include('_partials.header')

  <div class="layout-master">
 @if (trim($__env->yieldContent('content-header')))
  <div class="bg-primary content-header">
    <div class="container-fluid">
      @yield('content-header')
    </div>
  </div>
  @endif

<div id="maincontent" class="flex-layout-body">
  @if (trim($__env->yieldContent('nav')))
  <div class="layout-has-nav">
    @endif




    <main class="content-container" id="interior">
      <div class="padded content-section ">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </main>

    @if (trim($__env->yieldContent('nav')))
    <div class="sidebar-container overview">

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
    @endif @if (trim($__env->yieldContent('nav')))
  </div>
  @endif
  </div>
</div>

@if (trim($__env->yieldContent('sectionals')))
    @yield('sectionals')
@endif


<!-- FOOTER -->
<div id="footer">
  @include('_partials/footer')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="{{ $page->baseUrl }}/assets/js/main.js"></script>
<script src="{{ $page->baseUrl }}/assets/js/slick.min.js"></script>
<script src="{{ $page->baseUrl }}/assets/js/slick-app.js?v=3"></script>
</body>

</html>