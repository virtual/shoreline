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
<p>Dept & prog</p> 
@endsection

@section('content')
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>

@endsection

@section('sectionals')

<section class="sectional sectional-padded">
  <div class="container-fluid"><!-- change .inner to .container-fluid -->
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
     <div class="card"><a href="/programs/documents/catalog-2014-2015.pdf">Course Descriptions</a><div class="card-body">
           <h3 class="more-arrow card-title">Course Descriptions</h3>
           <p class="card-text">Browse the course descriptions to explore classes available in this subject</p>
        </div>
     </div>
     <div class="card"><a href="/programs/documents/catalog-2014-2015.pdf">Sample Schedule</a><div class="card-body">
           <h3 class="more-arrow card-title">Sample Schedule</h3>
           <p class="card-text">Get a glimpse at what your quarterly schedule might look like in this program option</p>
        </div>
     </div>
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

@endsection