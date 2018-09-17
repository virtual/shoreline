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

<body>
  @include('_partials.topbar') 
  @include('_partials.header')

  <!-- PROGRAM OPTION TEMPLATE -->
  @if (trim($__env->yieldContent('layout-option')))
  <span class="debug">!!!! content</span>
  <div class="layout-master program-option" id="maincontent">
    <div class="bg-primary content-header">
      <span class="debug">!!!! PROGRAM OPTION</span>
      <div class="container-fluid">
          <div class="breadcrumb" aria-label="breadcrumb">
            @yield('breadcrumb')
          </div> 
          @yield('content-header')
      </div>
    </div>
    <div class="py-3 lead-content container-fluid">
      <div class="layout-has-sidebar">
        <span class="debug">!!!! Layout has sidenav</span>
        <div class="content-container">
          @yield('lead')
        </div>
      </div>
    </div>

    <!-- main content -->
    <div class="container-fluid">
      <div class="flex-layout-body">
        <div class="debug">Main content</div>
        <div class="layout-has-sidebar">
          <main class="content-container">
            <div class="content-section ">
              @yield('content')
            </div>
          </main>

          <div id="sidebar-nav" class="sidebar-container overview">
            <nav>
              <!--<h2>
              <span role="button" data-toggle="collapse" data-target="#submenu" aria-controls="submenu" aria-expanded="false" aria-label="Toggle navigation"
                aria-hidden="true" class="fas fa-bars toggle">
                <span class="sr-only">Expand Submenu</span>
              </span> yield('menuheader')</h2>-->
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
  <span class="debug">!!!! interior template</span>
  <div class="layout-master page-interior" id="maincontent">

    <!-- CONTENT HEADER ON -->
    @if (trim($__env->yieldContent('content-header')))
    <span class="debug">!!!! content-header</span>
    @if (trim($__env->yieldContent('content-header-inverse'))) 
    <div class="content-header bg-primary"> @else  <div class="content-header "> @endif
      <div class="container-fluid">
          <div class="breadcrumb" aria-label="breadcrumb">
              @yield('breadcrumb')
            </div>
          <div class="header-info">
              <div class="header-content">
                  
                    
                @yield('content-header')
              </div>
              <div class="header-image">
                <div class="header-image-clip">
                  @yield('content-header-img')
                  
                </div>
              </div>
              
            </div>
      </div>
    </div>
    @endif

    <span class="debug">!!!! lead</span>
    <div class="container-fluid">
      <div class="flex-layout-body">

        <!-- determining opening classes  -->
        @if (trim($__env->yieldContent('left-nav')))
        <span class="debug">!!!! Layout has leftnav</span>
            
          @if (trim($__env->yieldContent('main-sidebar-content')))
          <span class="debug">!!!! Layout has sidebar</span>
          <div class="layout-has-left-nav layout-has-sidebar">
          @else
          <div class="layout-has-left-nav">
          @endif <!-- end check main sidebar-->
            
        @else <!-- OFF left -->

            @if (trim($__env->yieldContent('main-sidebar-content'))) <!-- check sidebar -->
            <div class="layout-has-sidebar">
            @else
            <div class="x"><!-- no sidebar, no left nav-->
            @endif 
                
        @endif <!-- END determining opening classes -->
                
        <!-- if left nav -->
        @if (trim($__env->yieldContent('left-nav')))
        <nav class="left-nav">
          <a class="sr-only show-on-focus" href="#interior">Skip Navigation</a>
          @yield('left-nav')
        </nav>
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
          <span class="debug">!!!! SIDEBAR ON</span>
          @yield('main-sidebar-content')
        </div>                
        @endif
        <!-- end sidebar on -->

          </div> <!-- closing div for determining opening classes -->
          <!-- end layout has class-->
        </div> <!-- END .flex-layout-body -->
      </div><!-- END .container-fluid -->
    </div><!-- END .layout-master page-interior -->
    @endif
    <!-- end INTERIOR TEMPLATE -->

    <!-- all pages can have sectionals after main content -->
    
    @if (trim($__env->yieldContent('sectionals')))
      <div id="sectionals"> @yield('sectionals') 
    </div>
    @endif

    <!-- FOOTER -->
    <div id="footer">
      @include('_partials/footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>
    <script src="{{ $page->baseUrl }}/assets/js/main.js"></script>
    <script src="{{ $page->baseUrl }}/assets/js/slick.min.js"></script>
    <script src="{{ $page->baseUrl }}/assets/js/slick-app.js?v=4"></script>
</body>

</html>