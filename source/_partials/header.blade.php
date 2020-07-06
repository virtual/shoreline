<header id="header">
  <div id="skiptocontent">
    <a href="#maincontent" title="Skip Main Navigation">Skip Main Navigation</a>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-xl-2 header-logo d-none d-lg-block">

        @if (trim($__env->yieldContent('homepage')))
        <!-- H1 on homepage only -->
        <h1>
            @include ('_partials.logo')
        </h1>
        @else
          @include ('_partials.logo')
        @endif

      </div>
      <div class="col-lg-10 col-xl-10">
        <div class="header-actions d-none d-lg-flex">
        <div class="navbar-container">

          <nav class="navbar navbar-expand-sm navmenu utility-wrapper" role="navigation" aria-label="Ancillary Navigation">
            @include ('_partials.quicklinks')
            <ul class="quicklinks list-inline list-2">
              <li class="has-button"><a class="btn btn-important btn-sm" href="/apply-and-aid/apply.aspx">Get Started</a></li>
            </ul>
          </nav>
        </div>
        <div class="search-container ">
          @include ('_partials.searchform')
        </div>
        
      </div>

      @include ('_partials.menu')
      </div>
    </div>
    <div class="row"> 

    </div>
    
  </div>
  @include('_partials.alert')
</header>