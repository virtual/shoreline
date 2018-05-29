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
  <link rel="image_src" href="images/thumbnail.jpg" />

  <link rel="stylesheet" href="/assets/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/css/main.css">

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
                <img src="images/acc-logo-black.png" alt="Shoreline Community College" />
                <span class="sr-only">Shoreline Community College</span>
              </a>
            </h1>
          @else 
          <a class="navbar-brand" href="/">
            <img src="images/acc-logo-black.png" alt="Shoreline Community College" />
            <span class="sr-only">Shoreline Community College</span>
          </a>
      @endif
 
        </div>
        <div class="col-md-9 d-flex header-actions">
          <div class="navbar-container d-flex">
            <nav class="navbar navbar-expand-sm navmenu quicklinks">
              @include ('_partials.quicklinks')
            </nav>
          </div>
          <div class="search-container d-flex">
            @include ('_partials.searchform')
          </div>
        </div>
      </div>
    </div>
 


  </header>

  <div id="maincontent" class="flex-layout-body">
    <!-- feature area -->
   if(View::hasSection('feature')) yield('feature') endif if(View::hasSection('headerfeature')) yield('headerfeature')
    endif if(View::hasSection('subfeature-text'))

    <div class="padded bg-light pb-5">
      <div class="padded bg-yellow">
        <div class="container-fluid">
          yield('subfeature-text')
        </div>
        <!-- /.container-fluid -->
      </div>
    </div>
    endif if(View::hasSection('subfeature'))
    <div class="padded bg-light">
      <div class="container-fluid">
        yield('subfeature')
      </div>
      <!-- /.container-fluid -->
    </div>
    endif if(View::hasSection('content'))if(View::hasSection('nav'))
    <div class="layout-has-nav">
      <div class="nav-container">

        <nav class="subnav navbar navbar-expand-md navbar-light">

          <h2>
            <span role="button" data-toggle="collapse" data-target="#submenu" aria-controls="submenu" aria-expanded="false"
              aria-label="Toggle navigation" aria-hidden="true" class="fas fa-bars toggle">
              <span class="sr-only">Expand Submenu</span>
            </span> yield('menuheader')</h2>
          <a class="sr-only show-on-focus" href="#interior">Skip Navigation</a>
          <div class="collapse navbar-collapse" id="submenu">
            yield('nav')
          </div>
        </nav>
      </div>
      endif

      <main id="interior">
        <div class="padded content-section ">
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>
      </main>
     if(View::hasSection('nav'))
    </div>
    endif endif if(View::hasSection('highlights-feature'))
    <section class="padded bg-white">
      <div class="container-fluid">
        yield('highlights-feature')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('spotlight'))
    <section class="padded bg-white">
      <div class="container-fluid">
        yield('spotlight')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('eventfeed'))
    <section class="eventfeed-section padded bg-lightgray">
      <div class="container-fluid">
        yield('eventfeed')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('link-module'))
    <section class="padded">
      <div class="container-fluid">
        <h2 class="sr-only">Additional Resources</h2>
        yield('link-module')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('link-module2'))
    <section class="padded bg-dark text-light">
      <div class="container-fluid">
        <h2 class="sr-only">Additional Resources</h2>
        yield('link-module2')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('visit-links'))
    <section>
      <div class="container-fluid">
        <h2 class="sr-only">Visit ACC</h2>
        yield('visit-links')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('cta-cards'))
    <section class="padded bg-white">
      <div class="container-fluid">
        <h2 class="sr-only">Visit ACC</h2>
        yield('cta-cards')
      </div>
      <!-- /.container-fluid -->
    </section>
    endif if(View::hasSection('connect')) yield('connect') endif




  </div>

  <!-- FOOTER -->
  <div id="footer">

   if(View::hasSection('contact'))
    <section class="contact-section padded bg-light">
      <div class="container-fluid">
        <h2 class="sr-only">Contact</h2>
        yield('contact')
      </div>
    </section>
    endif
     @include('_partials/footer')
  </div>
</body>

</html>