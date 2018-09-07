@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Arts</a></li>
  </ol>
@endsection

 


@section('content')
<h1>Current Students</h1>

<div class="card-icons d-md-flex d-inline-flex flex-wrap align-items-start justify-content-start justify-content-md-between">
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

<div class="row">
  <div class="col-12 col-sm-6">
    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
        aria-controls="collapse1">
        Classes</button></h4> 
      <div class="collapse" id="collapse1">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>
    
    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
        aria-controls="collapse2">
        Registration</button></h4> 
      <div class="collapse" id="collapse2">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>

    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
        aria-controls="collapse3">
        Transcripts</button></h4> 
      <div class="collapse" id="collapse3">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>

    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
        aria-controls="collapse4">
        Academic Support</button></h4> 
      <div class="collapse" id="collapse4">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>

    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
        aria-controls="collapse4">
        Policies &amp; Procedures</button></h4> 
      <div class="collapse" id="collapse4">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6">
    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
        aria-controls="collapse5">
        Calendars & Important Dates</button></h4> 
      <div class="collapse" id="collapse5">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        
        <h5>More stuff</h5>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>
    
    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false"
        aria-controls="collapse6">
        Student Services</button></h4> 
      <div class="collapse" id="collapse6">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>

    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false"
        aria-controls="collapse7">
        Online Services</button></h4> 
      <div class="collapse" id="collapse7">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>

    <div class="card-link">
        <h4><button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false"
        aria-controls="collapse8">
        Campus Life</button></h4> 
      <div class="collapse" id="collapse8">
        <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias
          laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
      </div>
    </div>
 
  </div>
</div>
 


@endsection

@section('sectionals')
 
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 