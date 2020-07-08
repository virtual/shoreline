<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="theme-color" content="#00685e">
  <title>Shoreline Community College</title>
  <meta name="description" content="Shoreline Community College...">
  <meta property="og:title" content="Shoreline Community College" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="{{ $page->baseUrl }}/resources/images/meta/thumbnail.jpg" />
  <meta property="og:url" content="http://www.Shorelinecollege.edu/" />
  <meta property="og:site_name" content="Shoreline Community College" />
  <meta property="og:description" content="Shoreline Community College..." />
  <meta property="og:locale" content="en_us" />
  <link rel="image_src" href="{{ $page->baseUrl }}/resources/images/meta/thumbnail.jpg" />
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/bootstrap.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css?v=3">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/resources/fonts/fa-subset/fontawesome.min.css?v=101" />

  <!-- Analytics -->
</head>
<!-- * add class navbar-overlay to body if overlay wanted instead of inline -->
<body class="homepage navbar-overlay-unused">
  @include('_partials.topbar') @include('_partials.header')
  <main id="maincontent">
 
    <h2>Reimagine Possible</h2>
<p>Wherever you want to go, we'll help you get there.</p>
<p><a href="#" class="btn btn-primary">Explore Programs</a></p>
<p><a href="#" class="more-arrow">Find a class</a></p>

<div class="row">
  <div class="col-12 col-md-6">
    <p>
      <strong>Fall Quarter Starts</strong><br/>
      Sept 18, 2020
    </p>
  </div>
  <div class="col-12 col-md-6">
    
    <p>
      <strong>Winter Quarter Starts</strong><br/>
      Jan 1, 2021
</p>
  </div>
</div>


@yield('content')

</main>



  <!-- all pages can have sectionals after main content -->
  @if (trim($__env->yieldContent('sectionals'))) @yield('sectionals') @endif



    <!-- FOOTER -->
    <div id="footer">
      @include('_partials/footer')
    </div>
    <script src="{{ $page->baseUrl }}/assets/js/jquery-3.5.1.min.js" defer="defer"></script>
    <script src="{{ $page->baseUrl }}/assets/js/bootstrap.bundle.min.js" defer="defer"></script>
    <script src="{{ $page->baseUrl }}/assets/js/main.js" defer="defer"></script>  
    <script src="{{ $page->baseUrl }}/assets/js/lazyload.min.js" defer="defer"></script>  
    <script>
      (function() {
        var css = document.createElement('link');
        css.href = '//pro.fontawesome.com/releases/v5.13.0/css/all.css';
        css.rel = 'stylesheet';
        css.type = 'text/css';
        css.integrity = "sha384-IIED/eyOkM6ihtOiQsX2zizxFBphgnv1zbe1bKA+njdFzkr6cDNy16jfIKWu4FNH";
        css.crossOrigin = "anonymous";
        document.getElementsByTagName('head')[0].appendChild(css);
      })();
    </script>
</body>

</html>