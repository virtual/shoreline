@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

 


@section('content')
<h1>Current Students</h1>
 

<h2>Using Sized Columns</h2>
<div class="alert alert-info"><p>Unsized columns are an issue in IE11</p></div>

<div class="row">
  <div class="col-12 col-md-4 col-sm-6">
    <div class="card-icon card-icon-compact">
      <a href="https://www.shoreline.edu/currentstudents/email/">Email</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-email.png" alt="email"></div>
      <p><a tabindex="-1" href="https://www.shoreline.edu/currentstudents/email/">Email</a></p>
    </div>
  </div>

  <div class="col-12 col-md-4 col-sm-6">
    <div class="card-icon card-icon-compact">
      <a href="http://app.shoreline.edu/campus-directory">Directory</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-directory.png" alt="directory"></div>
      <p><a tabindex="-1" href="http://app.shoreline.edu/campus-directory">Directory</a></p>
    </div>
  </div>

  <div class="col-12 col-md-4 col-sm-6">
    <div class="card-icon card-icon-compact">
      <a href="http://app.shoreline.edu/class-schedule">Class Schedule</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-schedule.png" alt="schedule"></div>
      <p><a tabindex="-1" href="http://app.shoreline.edu/class-schedule">Class Schedule</a></p>
    </div>
  </div>

  <div class="col-12 col-md-4 col-sm-6">
    <div class="card-icon card-icon-compact">
      <a href="https://wts.shoreline.edu/waci002.html">Grades</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-grades.png" alt="grades"></div>
      <p><a tabindex="-1" href="https://wts.shoreline.edu/waci002.html">Grades</a></p>
    </div>
  </div>

  <div class="col-12 col-md-4 col-sm-6">
    <div class="card-icon card-icon-compact">
      <a href="https://canvas.shoreline.edu/">Canvas</a>
      <div class="icon"><img src="../resources/img/icons/current/icon-canvas.png" alt="canvas"></div>
      <p><a tabindex="-1" href="https://canvas.shoreline.edu/">Canvas</a></p>
    </div>
  </div>

</div>

<div class="row">    
  <div class="col-12 col-md-4"><div class="card-icon card-icon-compact"><a href="https://www.shoreline.edu/currentstudents/email/">Facebook</a><div class="icon"><span class="fab fa-facebook" aria-hidden="true"></span><span class="sr-only">Facebook</span></div>
  <p><a tabindex="-1" href="https://www.shoreline.edu/currentstudents/email/">Facebook</a></p></div></div>
  <div class="col-12 col-md-4"><div class="card-icon card-icon-compact"><a href="https://www.shoreline.edu/currentstudents/email/">Read this document</a><div class="icon"><i class="fal fa-file-pdf"></i><span class="sr-only">Twitter</span></div>
  <p><a tabindex="-1" href="https://www.shoreline.edu/currentstudents/email/">Read this document</a></p></div></div>
  
  <div class="col-12 col-md-4"><div class="card-icon card-icon-compact"><a href="https://www.shoreline.edu/currentstudents/email/">Twitter</a><div class="icon"><span class="fab fa-twitter" aria-hidden="true"></span><span class="sr-only">Twitter</span></div>
  <p><a tabindex="-1" href="https://www.shoreline.edu/currentstudents/email/">Email</a></p></div></div>
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
 


@endsection

@section('sectionals')
 
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 