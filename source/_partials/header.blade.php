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
      <div class="col-md-9 header-actions d-flex">
        <div class="navbar-container">

          <nav class="navbar navbar-expand-sm navmenu utility-wrapper" role="navigation" aria-label="Ancillary Navigation">
            @include ('_partials.quicklinks')
          </nav>
        </div>
        <div class="search-container ">
          @include ('_partials.searchform')
        </div>

      </div>
    </div>
    
  </div>
  @include ('_partials.menu')
</header>