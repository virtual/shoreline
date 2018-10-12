@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

 


@section('content')
<h1>Current Students</h1>

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