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
        @include ('_partials.logo') 
      <div class="flex-button flex-button-right">
      <button id="mobile-search-button" class="navbar-toggler primary" type="button" data-toggle="collapse" data-target="#searchCollapse" aria-controls="searchCollapse"
        aria-expanded="false" aria-label="Toggle search">
        <span aria-hidden="true" class="fas fa-search"></span>
        <span class="menubartext">Search</span>
      </button>
      <!-- <p><a href="#" class="btn btn-sm btn-important">Get Started</a></p> -->
      </div>
    </div>
    <div class="collapse navbar-collapse" id="searchCollapse">
      <div class="container">
        <div class="searchform-mobile"> 
          @include ('_partials.searchform2')         
          @include ('_partials.search-frequent')
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse"> 
      <ul class="menu">

        @include ('_partials.menu-content-all')   
     
      </ul> 
      <div class="d-block d-lg-none"> 
        @include ('_partials.quicklinks', [
          'id' => 'searchtoggler2'
        ]) 
      </div>
    </div>
  </div>
</nav>
 