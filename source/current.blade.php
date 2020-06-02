@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

 


@section('content')
<h1>Current Students</h1>
<p class="lead">View <a href="../current2">icon box grid snippets</a></p>

<h2>Using Sized Columns</h2>
<div class="alert alert-info"><p>Unsized columns are an issue in IE11</p></div>

<div class="row">
  <div class="col-12 col-md-4 col-sm-6">    
    @include('_partials.card-icon-button', [
    'heading' => 'Email',
    'img' => '../resources/img/icons/current/icon-email.png',
    'alt' => 'email',     
    'link' => 'https://www.shoreline.edu/currentstudents/email/',
    'addclass' => 'card-icon-compact'
    ])
  </div>

  <div class="col-12 col-md-4 col-sm-6">    
    @include('_partials.card-icon-button', [
    'heading' => 'Directory',
    'img' => '../resources/img/icons/current/icon-directory.png',
    'alt' => 'directory',     
    'link' => 'http://app.shoreline.edu/campus-directory',
    'addclass' => 'card-icon-compact'
    ])  
  </div>

  <div class="col-12 col-md-4 col-sm-6">
    @include('_partials.card-icon-button', [
    'heading' => 'Class Schedule',
    'img' => '../resources/img/icons/current/icon-schedule.png',
    'alt' => 'schedule',     
    'link' => 'http://app.shoreline.edu/class-schedule',
    'addclass' => 'card-icon-compact'
    ])  
  </div>

  <div class="col-12 col-md-4 col-sm-6">
    @include('_partials.card-icon-button', [
    'heading' => 'Grades',
    'img' => '../resources/img/icons/current/icon-grades.png',
    'alt' => 'grades',     
    'link' => 'https://wts.shoreline.edu/waci002.html',
    'addclass' => 'card-icon-compact'
    ])   
  </div>

  <div class="col-12 col-md-4 col-sm-6">    
    @include('_partials.card-icon-button', [
    'heading' => 'Canvas',
    'img' => '../resources/img/icons/current/icon-canvas.png',
    'alt' => 'canvas',     
    'link' => 'https://wts.shoreline.edu/waci002.html',
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

<h2>Using Specific Classes</h2>
<div class="card-icons d-md-flex d-inline-flex flex-wrap align-items-start justify-content-between justify-content-sm-start justify-content-md-between">
    <div class="flex">
      <div class="card-icon card-icon-compact">
        <a href="https://www.shoreline.edu/currentstudents/email/">Email</a>
        <div class="icon"><img src="../resources/img/icons/current/icon-email.png" alt="email"></div>
        <p><a tabindex="-1" href="https://www.shoreline.edu/currentstudents/email/">Email</a></p>
      </div>
    </div>
  
    <div class="flex">
      <div class="card-icon card-icon-compact">
        <a href="http://app.shoreline.edu/campus-directory">Directory</a>
        <div class="icon"><img src="../resources/img/icons/current/icon-directory.png" alt="directory"></div>
        <p><a tabindex="-1" href="http://app.shoreline.edu/campus-directory">Directory</a></p>
      </div>
    </div>
  
    <div class="flex">
      <div class="card-icon card-icon-compact">
        <a href="http://app.shoreline.edu/class-schedule">Class Schedule</a>
        <div class="icon"><img src="../resources/img/icons/current/icon-schedule.png" alt="schedule"></div>
        <p><a tabindex="-1" href="http://app.shoreline.edu/class-schedule">Class Schedule</a></p>
      </div>
    </div>
  
    <div class="flex">
      <div class="card-icon card-icon-compact">
        <a href="https://wts.shoreline.edu/waci002.html">Grades</a>
        <div class="icon"><img src="../resources/img/icons/current/icon-grades.png" alt="grades"></div>
        <p><a tabindex="-1" href="https://wts.shoreline.edu/waci002.html">Grades</a></p>
      </div>
    </div>
  
    <div class="flex">
      <div class="card-icon card-icon-compact">
        <a href="https://canvas.shoreline.edu/">Canvas</a>
        <div class="icon"><img src="../resources/img/icons/current/icon-canvas.png" alt="canvas"></div>
        <p><a tabindex="-1" href="https://canvas.shoreline.edu/">Canvas</a></p>
      </div>
    </div>
  </div>
<div class="card-icons d-md-flex d-inline-flex flex-wrap align-items-start justify-content-between justify-content-sm-start justify-content-md-between">
  <div class="flex">
    <div class="card-icon">
      <a href="https://www.shoreline.edu/currentstudents/email/">Email</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-email.png" alt="email"></div>
      <p><a tabindex="-1" href="https://www.shoreline.edu/currentstudents/email/">Email</a></p>
    </div>
  </div>

  <div class="flex">
    <div class="card-icon">
      <a href="http://app.shoreline.edu/campus-directory">Directory</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-directory.png" alt="directory"></div>
      <p><a tabindex="-1" href="http://app.shoreline.edu/campus-directory">Directory</a></p>
    </div>
  </div>

  <div class="flex">
    <div class="card-icon">
      <a href="http://app.shoreline.edu/class-schedule">Class Schedule</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-schedule.png" alt="schedule"></div>
      <p><a tabindex="-1" href="http://app.shoreline.edu/class-schedule">Class Schedule</a></p>
    </div>
  </div>

  <div class="flex">
    <div class="card-icon">
      <a href="https://wts.shoreline.edu/waci002.html">Grades</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-grades.png" alt="grades"></div>
      <p><a tabindex="-1" href="https://wts.shoreline.edu/waci002.html">Grades</a></p>
    </div>
  </div>

  <div class="flex">
    <div class="card-icon">
      <a href="https://canvas.shoreline.edu/">Canvas</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-canvas.png" alt="canvas"></div>
      <p><a tabindex="-1" href="https://canvas.shoreline.edu/">Canvas</a></p>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<h2 class="sr-only">Resources</h2>
<div class="row">
  <div class="col-md-6">
      @include('_partials/accordion')
  </div>

  <div class="col-md-6">
      @include('_partials/accordion')
    </div>
</div>
 <hr/>
 <h2>Compact Accordion</h2>
 <div class="row">
    <div class="col-md-6">
         @include('_partials/accordion', [
        'addclass' => 'accordion-compact'
        ])
    </div>
  
    <div class="col-md-6">
         @include('_partials/accordion', [
        'addclass' => 'accordion-compact'
        ])
      </div>
  </div>


@endsection

@section('sectionals')
 
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 