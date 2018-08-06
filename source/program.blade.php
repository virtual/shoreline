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

<div class="header-info">
  <h1>Video Game Design</h1>

  <dl class="dl-inline dl-small-header">
    <dt>Department</dt>
    <dd><a href="#">VCT</a></dd>
  </dl>
  <dl class="dl-inline dl-small-header">
    <dt>Program</dt>
    <dd><a href="#">Visual Arts</a></dd>
  </dl>
</div>

@endsection

@section ('lead') 
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
@endsection

@section('content')
 x
@endsection

@section('sectionals')
<section class="sectional sectional-padded">
  <div class="container-fluid">
      <div class="layout-has-sidenav">
          <div class="content-container"> 

    <div class="video-container">
      @include('_partials.video', [
      'heading' => 'Video Title',
      'desc' => 'Video description Earum omnis reiciendis aut quasi id ea exercitationem dolorum. Asperiores aut dicta odit.',
      'youtubeID' => 'dPr287p0cdw',
      'img' => '/resources/img/videos/Video-Snippet.jpg'
      ]) 
  </div>
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
 
@endsection

 