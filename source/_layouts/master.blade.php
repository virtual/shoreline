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
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/slick.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/slick-theme.css">
  <link rel="stylesheet" href="{{ $page->baseUrl }}/resources/fonts/fa-subset/fontawesome.min.css?v=101" />

  @if (trim($__env->yieldContent('headcode')))
  @yield('headcode')
  @endif
  <!-- Analytics -->
</head>

<body>
  @include('_partials.topbar') 
  @include('_partials.header')

  <!-- PROGRAM OPTION TEMPLATE -->
  @if (trim($__env->yieldContent('layout-option')))
  <div class="layout-master program-option" id="maincontent">
    <div class="bg-primary content-header">
      <div class="container-fluid">
          <div class="breadcrumb" aria-label="breadcrumb">
            @yield('breadcrumb')
          </div> 
          @yield('content-header')
      </div>
    </div>
 
    <!-- main content -->
    <div class="container-fluid">
      <div class="flex-layout-body">
        <div class="layout-has-sidebar">
          <main class="content-container">
            <div class="content-section ">
              @yield('content')
            </div>
         </main>

          <div id="sidebar-nav" class="sidebar-container overview">
            <nav aria-label="Overview Navigation">
              <a class="sr-only show-on-focus" href="#sectionals">Skip Navigation</a>
              @yield('overview-nav')
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- END main content -->
  </div>
  <!-- end PROGRAM OPTION TEMPLATE -->

  @else
  <!-- INTERIOR TEMPLATE - Not program option template -->
  <div class="layout-master page-interior" id="maincontent">
    @if (trim($__env->yieldContent('content-header-img')) || trim($__env->yieldContent('content-header-carousel'))) <div class="content-has-header-img">@else  <div class="content-no-header-img"> @endif
    <!-- CONTENT HEADER ON -->
    @if (trim($__env->yieldContent('content-header'))) <!-- has content header -->
    @if (trim($__env->yieldContent('content-header-inverse'))) 
    <div class="content-header bg-primary bg-inverted"> @else  <div class="content-header "> @endif
     <div class="container-fluid">

        <div class="breadcrumb" aria-label="breadcrumb">
          @yield('breadcrumb')
        </div>
          
          <div class="header-info">
            
            <div class="header-content">
              @yield('content-header')
            </div>

            @if (trim($__env->yieldContent('content-header-img')))  
            <div class="header-image">
              <div class="header-image-clip">
                @yield('content-header-img')
              </div>
            </div>
            @endif

            @if (trim($__env->yieldContent('content-header-carousel')))  
            <div class="header-carousel">
                @yield('content-header-carousel')
            </div>
            @endif
            
          </div><!-- end header info -->

        </div><!-- end container-fluid -->
      </div><!-- end content-header -->
    @endif <!-- end content-header IF -->

    <div class="container-fluid">
      <div class="flex-layout-body">

        <!-- determining opening classes  -->
        @if (trim($__env->yieldContent('left-nav')))
        <!-- has content leftnav -->
          @if (trim($__env->yieldContent('main-sidebar-content')))
           <!-- has content sidebar --> 
          <div class="layout-has-left-nav layout-has-sidebar">
          @else
          <div class="layout-has-left-nav">
          @endif <!-- end check main sidebar-->
            
        @else <!-- OFF left -->
            @if (trim($__env->yieldContent('main-sidebar-content'))) <!-- check sidebar -->
            <div class="layout-has-sidebar">
            @else
            <div class="layout-no-sidebar"><!-- no sidebar, no left nav-->
            @endif 
        @endif <!-- END determining opening classes -->
                
        <!-- if left nav -->
        @if (trim($__env->yieldContent('left-nav')))
        <div class="left-nav">
          <a class="sr-only show-on-focus" href="#interior">Skip Navigation</a>
          @yield('left-nav')
        </div>
        @endif
        <!-- end if left nav -->

        <main class="content-container">
          <div class="content-section ">

            @if (trim($__env->yieldContent('lead'))) 
              @yield('lead') 
            @endif 

            @if (!trim($__env->yieldContent('content-header'))) 
            <!-- if breadcrumb not in a content-header -->
            <div class="breadcrumb" aria-label="breadcrumb">
              @yield('breadcrumb')
            </div>
            @endif

            <div id="interior">
              @yield('content')
            </div>
          </div>
        </main>

        <!-- sidebar on -->
        @if (trim($__env->yieldContent('main-sidebar-content')))
        <div id="sidebar" class="sidebar-container">
          @yield('main-sidebar-content')
        </div>                
        @endif
        <!-- end sidebar on -->

            </div> <!-- closing div for determining opening classes -->
            <!-- end layout has class-->
          </div> <!-- END .flex-layout-body -->
        </div><!-- END .container-fluid -->
      </div><!-- end content-has-header-img / content-no-header-img -->
    </div><!-- END .layout-master page-interior -->
    @endif
    <!-- end INTERIOR TEMPLATE -->

    <!-- all pages can have sectionals after main content -->
    
    @if (trim($__env->yieldContent('sectionals')))
      <div id="sectionals"> @yield('sectionals') 
    </div>
    @endif

    <!-- FOOTER -->
    @include('_partials/footer')
    <script src="{{ $page->baseUrl }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ $page->baseUrl }}/assets/js/bootstrap.bundle.min.js" defer="defer"></script>
    <script src="{{ $page->baseUrl }}/assets/js/main.js" defer="defer"></script>   
    <script src="{{ $page->baseUrl }}/assets/js/slick.min.js" defer="defer"></script>
    <script src="{{ $page->baseUrl }}/assets/js/slick-app.js?v=4" defer="defer"></script>
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
    @if (trim($__env->yieldContent('footcode'))) @yield('footcode') @endif

</body>

</html>