@extends('_layouts.master')

@section('content-header')
<div class="breadcrumb" aria-label="breadcrumb">
  <ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a href="#">Direct Transfer</a></li>
    <li><a class="active" aria-current="page" href="#">Video Game Design</a></li>
  </ol>

</div>

<h1>Video Game Design</h1>

<dl class="dl-inline dl-small-header">
  <dt>Department</dt>
  <dd><a href="#">VCT</a></dd>
</dl>
<dl class="dl-inline dl-small-header">
  <dt>Program</dt>
  <dd><a href="#">Visual Arts</a></dd>
</dl>

@endsection

@section('content')
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>

@include('_partials.overview')
@endsection

@section('sectionals')
<section class="sectional sectional-padded">
  <div class="container-fluid">
      <div class="layout-has-nav">
    <div class="content-container"> 
     <h2 tabindex="-1" id="outcomes" class="primary">Outcomes &amp; Careers</h2>
     
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

     <h3>Career Opportunities</h3>
     <p class="text-muted">* These are potential careers. Shoreline Community College does not guarantee graduates will obtain a specific job/career.</p>
     </div>
     <div class="sidebar-container">
        @include('_partials.card', [
        'heading' => 'Course Descriptions',
        'icon-alt' => '',
        'icon' => '',   
        'desc' => 'Browse the course descriptions to explore classes available in this subject',
        'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
        ])
        @include('_partials.card', [
        'heading' => 'Sample Schedule',
        'desc' => 'Get a glimpse at what your quarterly schedule might look like in this program option',
        'icon-alt' => 'map',
        'icon' => 'far fa-map',      
        'link' => 'http://jigsaw.tighten.co/docs/blade-templates-and-partials/'          
        ])

     </div>
     </div>
    </div>
</section>
<section class="sectional sectional-padded theme-04">
  <div class="container-fluid">
     <h2 tabindex="-1" id="reqs">Eligiblity &amp; Requirements</h2>
     <ul>
     <li>Earned grades of at least 2.0 in college level required non-nursing courses</li>
     <li>Placement test scores taken no more than one year prior to the first day of the application period with the following minimum test scores: Math placement above intermediate algebra (MATH 099); English Reading and Writing placement into ENGL& 101</li>
     <li>BIOL 211 (required if taking biology courses at Shoreline)</li>
     <li>CHEM 121* (General Chemistry) - 5 credits, completed within 10 years of application to the program</li>
     <li>ENGL 101* (English Composition) - 5 credits</li>
     <li>BIOL 241* (Anatomy & Physiology I) - 5 credits, completed within 5 years of application to the program</li>
     <li>BIOL 242* (Anatomy & Physiology II) - 5 credits, completed within 5 years of application to the program</li>
     <li>BIOL 260 (Microbiology) – 5 credits, completed within 5 years of application to the program</li>
     <li>NUTR 101 (Human Nutrition) – 5 credits, must be completed prior to entering the Nursing Program</li>
     <li>PSYC 200 (Lifespan Development) – 5 credits</li>
     <li>MATH 146* (Statistics) – 5 credits</li>
    </ul>
  </div>
</section>
<section class="sectional sectional-padded">
  <div class="container-fluid">
     <h2 tabindex="-1" id="apply">How to Apply</h2>
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
  </div>
</section>
<section class="sectional sectional-padded theme-04">
  <div class="container-fluid">
     <h2 tabindex="-1" id="related">Related Programs</h2>
     <ul>
        <li><a href="https://test.shoreline.edu//programs/visual-communication-technology/web-design.aspx">Web Design AAAS</a></li>
     </ul>
  </div>
</section>
@endsection

@section('nav')
<div class="card card-program-heading">
    <h2>On this page</h2>
    <ul class="list-unstyled">
       <li><a class="scrollable" href="#overview">Overview</a></li>
       <li><a class="scrollable" href="#outcomes">Outcomes &amp; Careers</a></li>
       <li><a class="scrollable" href="#reqs">Eligibility &amp; Requirements</a></li>
       <li><a class="scrollable" href="#apply">How to Apply</a></li>
    </ul>
 </div>

 <a class="btn btn-important btn-block" href="/apply-and-aid/apply.aspx">Apply Now</a>
 <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Ask a Question</a>
 <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Visit Campus</a>

@endsection