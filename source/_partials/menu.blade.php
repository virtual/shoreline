<nav class="nav nav-underline megamenu navbar-expand-lg navmenu" aria-label="Main Navigation">
  <div class="container-fluid">
    <div class="d-flex d-block d-lg-none justify-content-between align-items-center">
      <div  class="flex-button">
      <button id="mobile-menu-button" class="navbar-toggler primary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        @include ('_svg.menu') 
      <span class="menubartext">Menu</span>
      </button>
    </div>
      <a class="navbar-brand" href="/">
        <img src="{{ $page->baseUrl }}/resources/img/logos/logo-full-mobile.png" srcset="{{ $page->baseUrl }}/resources/img/logos/logo-full-mobile2x.png 2x, {{ $page->baseUrl }}/resources/img/logos/logo-full-mobile3x.png 3x, {{ $page->baseUrl }}/resources/img/logos/logo-full-mobile4x.png 4x" alt="Shoreline Community College" />
      </a>
      <div class="flex-button flex-button-right">
      <!-- <button id="mobile-search-button" class="navbar-toggler primary" type="button" data-toggle="collapse" data-target="#searchCollapse" aria-controls="searchCollapse"
        aria-expanded="false" aria-label="Toggle search">
        <span aria-hidden="true" class="fas fa-search"></span>
        <span class="sr-only">Search</span>
      </button> -->
      <p><a href="#" class="btn btn-sm btn-important">Get Started</a></p>
      </div>
    </div>
    <!-- <div class="collapse navbar-collapse" id="searchCollapse">
      <div class="container">
        <div class="searchform-mobile">
          @include ('_partials.searchform2')
        </div>
      </div>
    </div> -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="container-fluid d-block d-lg-none">
        <div class="searchform-mobile">
          @include ('_partials.searchform2')
        </div>
      </div>

      <ul class="menu">

        @include ('_partials.menu-content-all')   
     
      </ul>
      <!-- <ul class="menu">
        _partials.menu-content-search
      </ul> -->
      <div class="d-block d-lg-none"> 
        @include ('_partials.quicklinks') 
      </div>
    </div>
  </div>
</nav>
 