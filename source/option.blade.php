@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

@section('content-header')
<div class="header-info">
  <h1>Video Game Design</h1>
</div>

@endsection

@section('content-header-unused') 
<dl class="dl-inline dl-small-header">
  <dt>Department</dt>
  <dd><a href="/">VCT</a></dd>
</dl>
<dl class="dl-inline dl-small-header">
  <dt>Program</dt>
  <dd><a href="{{ $page->baseUrl }}/program">Visual Arts</a></dd>
</dl>
@endsection

@section ('lead') 
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
@endsection

@section('content')
@include('_partials.overview')
@endsection

@section('sectionals')
<section class="sectional sectional-padded">
  <div class="container-fluid">
      <div class="layout-has-sidebar">
    <div class="content-container"> 
     <h2 tabindex="-1" id="learn" class="primary">What You'll Learn</h2>
     
     <h3>What you'll learn</h3>
     <ul>
        
        <li>Effectively use concept development procedures in visual communication problem solving.</li>
        
        <li>Select and organize design elements including letter forms, illustrations, typography
           and other graphic images and effectively use art elements such as line, shape, color,
           value, texture and form in the development of visual images for a variety of media.
        </li>
        
        <li>Apply principles of audience and market analysis, conduct research and develop resources
           in the production of desktop publishing, graphic design, illustration, electronic
           paste-up, scanning and manipulation of images, and multimedia productions.
        </li>
        
     </ul>

     </div>
     <div class="sidebar-container">
        @include('_partials.card', [
        'heading' => 'Course Descriptions',
        'iconalt' => '',
        'icon' => '',   
        'desc' => 'Browse the course descriptions to explore classes available in this subject',
        'link' => '#'
        ])
        @include('_partials.card', [
        'heading' => 'Sample Schedule',
        'desc' => 'Get a glimpse at what your quarterly schedule might look like in this program option',
        'iconalt' => 'map',
        'icon' => 'far fa-map',      
        'link' => '#'          
        ])

     </div>
     </div>
    </div>
</section>
<section class="sectional sectional-padded">
  <div class="container-fluid">
      <div class="content-container"> 
     <h2 tabindex="-1" id="opportunities">Careers &amp; Opportunities</h2>
     <p>There are expanding opportunities within this field for creating visual images for multimedia product development including game artistry and animation. Graduates are hired as game level designers, game artists, modelers, animators, riggers, lighting artists, texture artists, character artists, storyboard artists, promotional artists and assistant project managers in design and production.</p>



     <p><strong>Potential employers include:</strong> Game studios, video studios, advertising agencies, publication houses, visual support departments, news and sales agencies, public relations firms and multimedia firms. For more, please visit career information and resources at <a href="http://www.shoreline.edu/counseling-center/career-counseling.aspx" target="_blank">http://www.shoreline.edu/counseling-center/career-counseling.aspx</a>.</p>
  </div>
  </div>
</section>
<section class="sectional sectional-padded">
  <div class="container-fluid">
      <div class="layout-has-sidebar">
          <div class="content-container"> 
     <h2 tabindex="-1" id="start">Get Started</h2>
     <p>Uniquely optimize resource sucking outsourcing through user friendly methods of empowerment.
        Credibly maintain premium methods of empowerment for enterprise-wide channels. Proactively
        seize cutting-edge methodologies through reliable core competencies. Continually pursue
        flexible ideas vis-a-vis open-source materials. Globally implement dynamic networks
        vis-a-vis premium quality vectors.
     </p>
     
     <p>Dynamically conceptualize team building interfaces whereas end-to-end technology.
        Synergistically synergize user-centric models for sticky catalysts for change. Rapidiously
        seize process-centric action items via best-of-breed initiatives. Assertively exploit
        business.
     </p>
     <p><a class="btn btn-important" href="/apply-and-aid/apply.aspx">Apply Now</a></p>

     <h3 class="mt-5" tabindex="-1" id="related">Related Programs</h3>
     <ul>
        <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Web Design AAAS</a></li>
        <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Graphic Design AAAS

        </a></li>
        <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">UX Design Certificate</a></li>
        <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Studio Arts  AFA</a></li>
     </ul>

     <h3 class="mt-5" tabindex="-1" id="explore">Explore the Visual Arts Department</h3>
     <div class="card">
      <div class="card-body"> 
        <div class="row">
          <div class="col-sm-6">
            <ul class="card-links card-links-compact">
              <li><a href="#">Programs</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Faculty & Staff</a></li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="card-links card-links-compact">
              <li><a href="#">Student Clubs</a></li>
              <li><a href="#">Planning Guides</a></li>
              <li><a href="#">Student Work</a></li>
            </ul>
          </div>
        </div>
      </div>
     </div>
     </div>
     <div class="sidebar-container">
        @include('_partials.card', [
        'heading' => 'Prepare for college',
        'iconalt' => '',
        'icon' => '',   
        'desc' => 'Need to prepare for college? Earn a GED, get your Highschool Dimploma, improve your Math & English',
        'link' => '#'
        ]) 

     </div>
     </div>
  </div>
</section>
 



@endsection

@section('overview-nav')
<div class="card card-program-heading">
  <div class="card-body">
    <h2>On this page</h2>
    <ul class="list-unstyled">
        <li><a class="scrollable" href="#overview">Overview</a></li>
        <li><a class="scrollable" href="#learn">What You'll Learn</a></li>
        <li><a class="scrollable" href="#opportunities">Careers &amp; Opportunities</a></li>
        <li><a class="scrollable" href="#start">Get Started</a></li>
    </ul>
  </div>
 </div>

 <a class="btn btn-important btn-block" href="/apply-and-aid/apply.aspx">Apply Now</a>
 <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Ask a Question</a>
 <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Visit Campus</a>

@endsection

@section('layout-option')  
true
@endsection
 