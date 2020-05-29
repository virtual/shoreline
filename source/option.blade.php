@extends('_layouts.master')

@section('breadcrumb')
<ol vocab="http://schema.org/" typeof="BreadcrumbList">
  <li property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage" href="{{ $page->baseUrl }}/">
      <span property="name">Home</span></a>
  </li>
  <li property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage" href="https://www.shoreline.edu/areas-of-study/programs.aspx">
      <span property="name">Explore Programs</span></a>
  </li>
  <li property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage" aria-current="page" href="{{ $page->baseUrl }}/program">
      <span property="name">Visual Communications Technology</span></a>
  </li>
  <li property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage" class="active" aria-current="page" href="#">
      <span property="name">Video Game Design AAAS</span></a>
  </li>
</ol>
@endsection

@section('content-header')
<div class="header-info">
  <h1>Program Option that may really long, like really long</h1>
  <!-- no empty space between div opening and closing to use :empty -->
  <div class="header-info-editable">
    <kbd class="ouc">Edit Overview (Sidebar) -> Edit Header Content</kbd>
    <p><a class="btn btn-secondary" href="/apply-and-aid/apply.aspx">Ask Questions</a></p></div>
</div>

@endsection

@section('content-header-unused')
<dl class="dl-inline dl-small-header">
  <dt>Department</dt>
  <dd><a href="/">Visual Arts</a></dd>
</dl>
<dl class="dl-inline dl-small-header">
  <dt>Program</dt>
  <dd><a href="{{ $page->baseUrl }}/program">Visual Communications Technology</a></dd>
</dl>
@endsection

@section('content')

<h2 id="overview" tabindex="-1">Summary</h2>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida
  dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. <a href="{{ $page->baseUrl }}/option-prev">View previous Option page</a> </p>
@endsection

@section('sectionals')
<section class="sectional pb-3">
  <div class="container-fluid">
    <div class="layout-has-sidebar">
      <div class="content-container">

        @include('_partials.overview')

      </div>
      <div class="sidebar-container">

        <div class="card callout card-program-heading">
          <div class="card-body">
            <nav role="navigation" aria-label="Section Navigation">
              <h2 tabindex="-1" id="explore">Related Department Links</h3>
                <!-- ouc:div label="/busad/_nav.inc" path="/busad/_nav.inc"-->
                <ul class="card-links card-links-compact">
                  <li><a href="/business-dept">Visual Arts Department (dyn?)</a></li>
                  <li><a href="/business-dept/programs.aspx">Programs</a></li>
                  <li class="list-top"><a href="/business-dept/courses.aspx">Courses</a></li>
                  <li><a href="/business-dept/faculty-staff.aspx">Faculty &amp; Staff</a></li>
                </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sectional sectional-padded">
  <div class="container-fluid">
    <div class="layout-has-sidebar">
      <div class="content-container">
        <h2 id="learn" tabindex="-1">Details</h2>


        <?php $uniqueID = substr(md5(rand()), 0, 3); ?>
        <?php $class = !(empty($addclass)) ? $addclass : ''; ?>
        <div class="accordion {{$class}}" id="accordion{{$uniqueID}}">
          <div class="accordion-card">
            <div class="accordion-header" id="heading{{$uniqueID}}One">
              <h3>
                <button class="btn btn-toggle" type="button" data-toggle="collapse"
                  data-target="#collapse{{$uniqueID}}One" aria-expanded="false"
                  aria-controls="collapse{{$uniqueID}}One">
                  What You’ll Learn
                </button>
              </h3>
            </div>

            <div id="collapse{{$uniqueID}}One" class="collapse" aria-labelledby="heading{{$uniqueID}}One"
              data-parent="#accordion{{$uniqueID}}">
              <div class="accordion-body">
                <ol start="1">

                  <li>Apply basic principles, theories and procedures for recording and reporting financial
                    data
                  </li>

                  <li>Apply practical accounting practices in a variety of business structures including
                    corporations, partnerships and small businesses
                  </li>

                  <li>Prepare financial reports and analyze relevant financial data</li>

                  <li>Provide management support in the budgeting, planning and decision-making processes</li>

                  <li>Apply knowledge of payroll laws and related procedures</li>

                  <li>Apply knowledge of individual income tax laws (for A.A.A.S. degree students only)</li>

                </ol>
                <kbd class="ouc">Edit (Learning)</kbd>
                <p>Can editable region be inside accordion?</p>
              </div>
            </div>
          </div>
          <div class="accordion-card">
            <div class="accordion-header" id="heading{{$uniqueID}}Two">
              <h3><button class="btn btn-toggle collapsed" type="button" data-toggle="collapse"
                  data-target="#collapse{{$uniqueID}}Two" aria-expanded="false"
                  aria-controls="collapse{{$uniqueID}}Two">
                  Course Outlines & Requirements
                </button></h3>
            </div>
            <div id="collapse{{$uniqueID}}Two" class="collapse" aria-labelledby="heading{{$uniqueID}}Two"
              data-parent="#accordion{{$uniqueID}}">
              <div class="accordion-body">
                <p>Acalog feed</p>
                <p>Planning Guide
                  Detailed outline of required courses for this program option.</p>
              </div>
            </div>
          </div>
          <div class="accordion-card">
            <div class="accordion-header" id="heading{{$uniqueID}}Three">
              <h3><button class="btn btn-toggle collapsed" type="button" data-toggle="collapse"
                  data-target="#collapse{{$uniqueID}}Three" aria-expanded="false"
                  aria-controls="collapse{{$uniqueID}}Three">
                  Careers & Opportunities
                </button></h3>
            </div>
            <div id="collapse{{$uniqueID}}Three" class="collapse" aria-labelledby="heading{{$uniqueID}}Three"
              data-parent="#accordion{{$uniqueID}}">
              <div class="accordion-body">
                <div>
                  <p>The job outlook for accounting-related occupations is very good. Graduates may be
                    hired as an Accounts Receivable/Accounts Payable Clerk, Full-Charge Bookkeeper, Junior
                    Accountant, Ledger Clerk, Payroll Clerk or Tax Preparer.
                  </p>

                  <p><strong>Potential employers include:</strong> Many of the new accounting positions will be created
                    in small, rapidly growing businesses
                    or CPA firms. The field also provides opportunities for temporary employment, part-time
                    work or accounting services out of your home.
                  </p>
                  <kbd class="ouc">Edit (Careers)</kbd>
                  <p>Can editable region be inside accordion?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-card">
            <div class="accordion-header" id="heading{{$uniqueID}}Four">
              <h3><button class="btn btn-toggle collapsed" type="button" data-toggle="collapse"
                  data-target="#collapse{{$uniqueID}}Four" aria-expanded="false"
                  aria-controls="collapse{{$uniqueID}}Four">
                  Tuition & Fees
                </button></h3>
            </div>
            <div id="collapse{{$uniqueID}}Four" class="collapse" aria-labelledby="heading{{$uniqueID}}Four"
              data-parent="#accordion{{$uniqueID}}">
              <div class="accordion-body">
                <p>Asset?</p>
                @include('_partials.table-stacked')
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="sidebar-container">
        <kbd class="ouc">Edit (Sidebar #1)</kbd>
        <kbd class="ouc">Edit (Sidebar #2)</kbd> 
      </div>
    </div>
  </div>
</section>
<section class="sectional sectional-padded">
  <div class="container-fluid">
    <div class="layout-has-sidebar">
      <div class="content-container">
        <h2 tabindex="-1" id="start">Next Steps</h2>
        <kbd class="ouc">Edit (Get Started)</kbd>
        <div class="row">
          <div class="col-sm-4">
            @include('_partials.card', [
            'heading' => 'Ask Questions',
            'iconalt' => '',
            'icon' => '',
            'desc' => 'Need to prepare for college? Earn a GED, get your Highschool Dimploma, improve your Math &
            English',
            'link' => '#'
            ])
          </div>
          <div class="col-sm-4">
            @include('_partials.card', [
            'heading' => 'Find Funding',
            'iconalt' => '',
            'icon' => '',
            'desc' => 'Need to prepare for college? Earn a GED, get your Highschool Dimploma, improve your Math &
            English',
            'link' => '#'
            ])
          </div>
          <div class="col-sm-4">
            @include('_partials.card', [
            'heading' => 'Apply',
            'iconalt' => '',
            'icon' => '',
            'desc' => 'Need to prepare for college? Earn a GED, get your Highschool Dimploma, improve your Math &
            English',
            'link' => '#'
            ])
          </div>
        </div>


      </div>
      <div class="sidebar-container"> 
        <kbd class="ouc">Edit (Sidebar #3)</kbd>
      </div>
    </div>
  </div>
</section>


<section class="sectional sectional-padded">
  <div class="container-fluid">
    <div class="layout-has-sidebar">
      <div class="content-container">
        <h2 tabindex="-1" id="related">Related Program Options</h2> 
        <ul>
          <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Web Design
              AAAS</a></li>
          <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Graphic
              Design AAAS

            </a></li>
          <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">UX Design
              Certificate</a></li>
          <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Studio Arts
              AFA</a></li>
        </ul>


      </div>
      <div class="sidebar-container">
        <kbd class="ouc">Edit (Sidebar #4)</kbd>
      </div>
    </div>
  </div>
</section>

@endsection

@section('overview-nav')

<div class="card callout card-program-heading">
  <div class="card-body">
    <h2>On this page</h2>
    <ul class="list-unstyled">
      <li><a class="scrollable" href="#overview">Summary</a></li>
      <li><a class="scrollable" href="#learn">Details</a></li>
      <!-- <li><a class="scrollable" href="#opportunities">Careers &amp; Opportunities</a></li> -->
      <li><a class="scrollable" href="#start">Next Steps</a></li>
      <li><a class="scrollable" href="#related">Related Programs</a></li>
    </ul>
  </div>
</div>
@endsection

@section('layout-option')
true
@endsection