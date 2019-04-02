<nav class="nav nav-underline megamenu navbar-expand-lg navmenu" aria-label="Main Navigation">
  <h2 class="sr-only">Navigation</h2>
  <div class="container-fluid">
    <div class="d-flex d-block d-lg-none justify-content-between">
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
      <button id="mobile-search-button" class="navbar-toggler primary" type="button" data-toggle="collapse" data-target="#searchCollapse" aria-controls="searchCollapse"
        aria-expanded="false" aria-label="Toggle search">
        <span aria-hidden="true" class="fas fa-search"></span>
        <span class="sr-only">Search</span>
      </button>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="searchCollapse">
      <div class="container">
        <div class="searchform-mobile">
          @include ('_partials.searchform2')
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="distributed">
        <li class="dropdown">
          <a href="/about-shoreline/default.aspx">About Shoreline
            <span role="link" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </span>
          </a>

          <div class="dropdown-menu">
            <ul>
              <li class="d-lg-none"><a href="/about-shoreline/default.aspx">About Shoreline</a></li>
              <li><a href="/about-shoreline/facts.aspx">Shoreline at a Glance</a></li>
              <li><a href="/about-shoreline/community-standard-statement.aspx">Community Standard</a></li>
              <li><a href="/about-shoreline/president.aspx">Shoreline's Leadership</a></li>
              <li><a href="/faculty/">Our Faculty</a></li>
            </ul>
            <ul>
              <li><a href="/about-shoreline/contact-us.aspx">Contact Us</a></li>
              <li><a href="http://app.shoreline.edu/campus-directory/">Employee Directory</a></li>
              <li><a href="/map/">Maps &amp; Directions</a></li>
              <li><a href="/apply-and-aid/campus-tour.aspx">Schedule a Visit</a></li>
            </ul>
          </div>
        </li>

        <li class="dropdown">
            <a href="/areas-of-study/degrees-certificates.aspx">Areas of Study
            <span role="link" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </span>
          </a>

          <div class="dropdown-menu">
            <ul>
              <li class="d-lg-none"><a href="/areas-of-study/degrees-certificates.aspx">Areas of Study</a></li>
                <li><a href="/areas-of-study/what-we-offer.aspx">What We Offer</a></li>
                <li><a href="/areas-of-study/programs.aspx">Browse all Programs</a></li>
                <li><a href="/areas-of-study/programs-transfer.aspx">University Transfer</a></li>
                <li><a href="/honors/">Honors College</a></li>
                <li><a href="/areas-of-study/programs-vocational.aspx">Professional &amp; Technical</a></li>
            </ul>
            <ul>
                <li><a href="/international/">International Education</a></li>
                <li><a href="/transitional-programs/">ESL, HS21, I-BEST, GED</a></li>
                <li><a href="/virtual-campus/">Online</a></li>
                <li><a href="/high-school-programs/">High School</a></li>
                <li><a href="/workforce/plus-50/">Continuing Education</a></li>
            </ul>
          </div>
        </li>
        <li class="dropdown">
            <a href="/apply-and-aid/default.aspx">Apply &amp; Aid
            <span role="link" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </span>
          </a>

          <div class="dropdown-menu">
            <ul>
              <li class="d-lg-none"><a href="/apply-and-aid/default.aspx">Apply &amp; Aid</a></li>
                <li><a href="/apply-and-aid/apply.aspx">How to Apply</a></li>
                <li><a href="/apply-and-aid/new-student-checklist.aspx">New Student Checklist</a></li>
                <li><a href="/apply-and-aid/financial-aid/">Financial Aid</a></li>
                <li><a href="/apply-and-aid/financial-aid/sources-on-campus.aspx#vocational">Funding for Career Training</a></li>
            </ul>
            <ul>
                <li><a href="/apply-and-aid/financial-aid/sources-on-campus.aspx">Sources of Aid</a></li>
                <li><a href="/apply-and-aid/financial-aid/types.aspx">Types of Aid</a></li>
                <li><a href="/calendars/academic.aspx">Academic Calendar</a></li>
                <li><a href="/apply-and-aid/cashiering/">Tuition &amp; Fees</a></li>
            </ul>

          </div>
        </li>
        <li class="dropdown">
            <a href="/apply-and-aid/campus-life.aspx">Campus Life
            <span role="link" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </span>
          </a>

          <div class="dropdown-menu">
            <ul>
              <li class="d-lg-none"><a href="/apply-and-aid/campus-life.aspx">Campus Life</a></li>
                <li><a href="/currentstudents/default.aspx">Current Students</a></li>
                <li><a href="/athletics/">Athletics</a></li>
                <li><a href="http://asg.shoreline.edu">Student Government</a></li>
                <li><a href="http://asg.shoreline.edu/rso/">Clubs &amp; Organizations</a></li>
            </ul>
            <ul>
                <li><a href="http://www.theebbtide.com" target="_blank">Ebbtide - Student Newspaper</a></li>
                <li><a href="/athletics/intramurals.aspx">Health &amp; Wellness</a></li>
                <li><a href="http://library.shoreline.edu/home">Library &amp; Technology Center</a></li>
                <li><a href="/bookstore/">Bookstore</a></li>
                <li><a href="/oss/veterans/">Veterans Programs</a></li>
            </ul>
          </div>
        </li>
        <li class="dropdown">
            <a href="/about-shoreline/news-and-events.aspx">News &amp; Events
            <span role="link" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </span>
          </a>

          <div class="dropdown-menu">
            <ul>
              <li class="d-lg-none"><a href="/about-shoreline/news-and-events.aspx">News &amp; Events</a></li>
                <li><a href="/calendars/">Calendar of Events</a></li>
                <li><a href="/theater/default.aspx">Theater</a></li>
                <li><a href="http://news.shoreline.edu">News</a></li>
            </ul>
          </div>
        </li> 
      </ul>
      <div class="d-block d-lg-none"> 
        @include ('_partials.quicklinks') 
      </div>
    </div>
  </div>
</nav>