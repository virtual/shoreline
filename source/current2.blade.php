@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

 
@section('main-sidebar-content') 
@include('_partials.address', [ 
'style' => 'icons',
'hours' => 'show',
'cols' => '2',
'class' => 'contact-us-box-valign-center'
])

@endsection

@section('content')
<h1>Current Students</h1>
<p class="lead">View <a href="../current">sized columns and accordions</a></p>


<h2>Icon Box Grid</h2>

<div class="icon-box-grid rows-2 cols-2">
  <div class="div1">
    @include('_partials.card-icon-button', [
    'heading' => 'Email',
    'img' => '../resources/img/icons/current/icon-email.png',
    'alt' => 'email',     
    'link' => 'https://www.shoreline.edu/currentstudents/email/',
    'addclass' => 'card-icon-compact'
    ])
  </div>
  <div class="div2">
    @include('_partials.card-icon-button', [
    'heading' => 'Directory',
    'img' => '../resources/img/icons/current/icon-directory.png',
    'alt' => 'directory',     
    'link' => 'http://app.shoreline.edu/campus-directory',
    'addclass' => 'card-icon-compact'
    ])
  </div>
  <div class="div3">
    @include('_partials.card-icon-button', [
    'heading' => 'Class Schedule',
    'img' => '../resources/img/icons/current/icon-schedule.png',
    'alt' => 'schedule',     
    'link' => 'http://app.shoreline.edu/class-schedule',
    'addclass' => 'card-icon-compact'
    ])  
  </div>
  <div class="div4">
    @include('_partials.card-icon-button', [
    'heading' => 'Grades',
    'img' => '../resources/img/icons/current/icon-grades.png',
    'alt' => 'grades',     
    'link' => 'https://wts.shoreline.edu/waci002.html',
    'addclass' => 'card-icon-compact'
    ]) 
  </div>
  <div class="div5">
    @include('_partials.card-icon-button', [
    'heading' => 'Canvas',
    'img' => '../resources/img/icons/current/icon-canvas.png',
    'alt' => 'canvas',     
    'link' => 'https://canvas.shoreline.edu/',
    'addclass' => 'card-icon-compact'
    ])  
  </div>
  <div class="div6"> </div>
  <div class="div7"> </div>
  <div class="div8"> </div>
  <div class="div9"> </div>
  <div class="div10"> </div>
  <div class="div11"> </div>
  <div class="div12"> </div>
  <div class="div13"> </div>
  <div class="div14"> </div>
  <div class="div15"> </div>
  <div class="div16"> </div>
  <div class="div17"> </div>
  <div class="div18"> </div>
  <div class="div19"> </div>
  <div class="div20"> </div>
  </div>
 

<div class="row">    
  <div class="col-12 col-md-4">    
    @include('_partials.card-icon-button', [
    'heading' => 'Facebook',
    'icon' => 'fab fa-facebook',
    'alt' => 'Facebook',     
    'link' => '#',
    'addclass' => 'card-icon-compact'
    ])
  </div>
  <div class="col-12 col-md-4">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-pdf',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => 'card-icon-compact'
    ])
  </div>
  <div class="col-12 col-md-4">
    @include('_partials.card-icon-button', [
    'heading' => 'Twitter',
    'icon' => 'fab fa-twitter',
    'alt' => 'Twitter',     
    'link' => '#',
    'addclass' => 'card-icon-compact'
    ])
  </div>
   
</div>

<div class="row">    
  <div class="col-12 col-md-4">    
    @include('_partials.card-icon-button', [
    'heading' => 'Facebook',
    'icon' => 'fab fa-facebook',
    'alt' => 'Facebook',     
    'link' => '#',
    'addclass' => ''
    ])
  </div>
  <div class="col-12 col-md-4">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-pdf',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => ''
    ])
  </div>
  <div class="col-12 col-md-4">
    @include('_partials.card-icon-button', [
    'heading' => 'Twitter',
    'icon' => 'fab fa-twitter',
    'alt' => 'Twitter',     
    'link' => '#',
    'addclass' => ''
    ])
  </div>
</div>


 

@endsection

@section('sectionals')
 
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 

@section('left-nav')
@include('_partials.left-nav')
@endsection
