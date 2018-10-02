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
      <div class="mb-0 accordion" id="accordionlist1">
          <div class="card">
            <div class="card-header" id="heading1">
              <h3>
                <button class="btn btn-toggle" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  Classes
                </button>
              </h3>
            </div>
        
            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
              <div class="card-body">
                  @include('_partials.table-stacked')
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading2">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  Registration
                </button>
              </h3>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
              <div class="card-body">
                  @include('_partials.text')
                  <ul>
                      <li><a href="">link1</a></li>
                      <li><a href="">link2</a></li>
                      <li><a href="">link3</a></li>
                      <li><a href="">link4</a></li>
                      <li><a href="">Mew</a> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil laborum beatae totam ut quis aspernatur. Earum, quo, quia aliquid adipisci placeat at tempora explicabo error dicta magni blanditiis ducimus atque? <a href="#"><strong>submit an alert report</strong></a>.</li>
                      <li><a href="">link6</a></li>
                      <li><a href="">link7</a></li>
                      <li><a href="">link8</a></li>
                      <li><a href="">link9</a></li>
                      <li><a href="">link10</a></li>
                    </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading3">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  Transcripts
                </button>
              </h3>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading4">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  Academic Support
                </button>
              </h3>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body">
                  @include('_partials.text')
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading5">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  Policies & Procedures
                </button>
              </h3>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
  </div>

  <div class="col-md-6">
      <div class="mb-0 accordion" id="accordionlist2">
          <div class="card">
            <div class="card-header" id="heading10">
              <h3>
                <button class="btn btn-toggle" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                  
        Calendars & Important Dates
                </button>
              </h3>
            </div>
        
            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
              <div class="card-body">
                  @include('_partials.table-stacked')
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading11">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                  
        Student Services
                </button>
              </h3>
            </div>
            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
              <div class="card-body">
                  @include('_partials.text')
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading12">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                  
        Online Services
                </button>
              </h3>
            </div>
            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
              <div class="card-body">
                  @include('_partials.text')
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading13">
              <h3>
                <button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                  
        Campus Life
                </button>
              </h3>
            </div>
            <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
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