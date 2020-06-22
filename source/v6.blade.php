@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Communications Technology</a></li>
  </ol>
@endsection
   
@section('headcode')
<style>
  .fbo-extra { display:none;}
  @media (max-width: 767px) {
    .filtered-box h3 { font-size: 1rem !important; }
  .fbo-extra { display:block;}
  .filtered-box .accordion .accordion-card {
  border:0 !important;
  display:inline-block;
  }
  .filtered-box .accordion .accordion-header,
  .filtered-box .accordion .accordion-header.active {
  background-color: transparent;
  color: #000;
  display: inline;
  }

  .filtered-box .accordion .accordion-header.active h3 {
  color:#0074b3;
  }
  .filtered-box .accordion .accordion-header .btn-toggle:before {
  display:none;
  }

  .filtered-box .collapse {
  box-shadow:0 0 3px #a0a8b1;
  width: auto;
  }
  .filtered-box-options { text-align: center;
  border-top: 1px solid #ccc; margin-top: 1rem;
  padding-top: 2rem;}
  .filtered-box-options ul {
  display:none;
  }
  /* arrow */

  .filtered-box .accordion .accordion-header.active {
  display: block;
  }
  .filtered-box .accordion .accordion-header, .filtered-box .accordion .accordion-header h3 {
  display:inline-block;
  position: relative;
  z-index: 0;
  }
  .filtered-box .accordion .accordion-body {
  z-index: 0;
  position: relative;
  background: #fff;
  }
  .filtered-box .accordion .accordion-header h3::before {
  display: none;
  content: "";
  position: absolute;
  left: 50%;
  width: 1rem;
  height: 1rem;
  bottom: 0;
  background-color: #fff;
  border-color: transparent;
  z-index: 2;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  margin-bottom: -.5rem;
  margin-left: -.5rem;
  box-shadow:0 0 3px #a0a8b1;
  z-index:0;
  }
  .filtered-box .accordion .accordion-header.active h3::before {
  display:block;
  }
  /* end arrow */
  }
</style>
@endsection
 
@section('content')
      <h1>Not much here</h1>
      <p>Empty template, looks nice on newer (not IE 11) browsers</p>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <hr/>

<div class="filtered-box">
    <div class="sort-by">
        <p>Sort by: <span class="sort-by-selected">Program Option</span></p>
      </div>
    
      <div class="accordion" id="accordion-d17e1">
        <div class="accordion-card">
           <div class="accordion-header" id="heading-d18e1">
              <h3><button class="btn btn-toggle" type="button" data-toggle="collapse" data-target="#collapse-d18e1" aria-expanded="false" aria-controls="collapse-d18e1">Search Filters</button></h3>
           </div>
           <div id="collapse-d18e1" class="collapse" aria-labelledby="heading-d18e1">
              <div class="accordion-body">
                 
                 <p>
                    <!-- Three Column Content -->
                 </p>
                 
                 <div class="three-items module">
                    <div class="module-inner">
                       <div class="row three-col">
                          <div class="col-md-4">
                             
                             <p class="dark"><strong>Areas of Study</strong></p>
                             
                             <div class="custom-control custom-checkbox"><input id="aos-art" class="custom-control-input" name="aos" type="checkbox" value="aos-art"> <label class="custom-control-label" for="aos-art">Arts &amp; Communication</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="aos-biz" class="custom-control-input" name="aos" type="checkbox" value="aos-biz"> <label class="custom-control-label" for="aos-biz">Business</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="aos-hm" class="custom-control-input" name="aos" type="checkbox" value="aos-hm"> <label class="custom-control-label" for="aos-hm"> Health &amp; Medical</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="aos-stem" class="custom-control-input" name="aos" type="checkbox" value="aos-stem"> <label class="custom-control-label" for="aos-stem">Science, Technology, Engineering &amp; Math</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="aos-sse" class="custom-control-input" name="aos" type="checkbox" value="aos-sse"> <label class="custom-control-label" for="aos-sse">Social Sciences &amp; Education</label></div>
                             
                          </div>
                          <div class="col-md-4">
                             
                             <p class="dark"><strong>Program Type</strong></p>
                             
                             <div class="custom-control custom-checkbox"><input id="program-type-pt2" class="custom-control-input" name="program-type" type="checkbox" value="program-type-pt2"> <label class="custom-control-label" for="program-type-pt2">Professional / Technical 2-Year</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="program-type-transfer" class="custom-control-input" name="program-type" type="checkbox" value="program-type-transfer"> <label class="custom-control-label" for="program-type-transfer">College / University Transfer</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="program-type-cert" class="custom-control-input" name="program-type" type="checkbox" value="program-type-cert"> <label class="custom-control-label" for="program-type-cert">Professional / Technical Certificate</label></div>
                             
                             <p class="pt-3 dark"><strong>Learning Format</strong></p>
                             
                             <div class="custom-control custom-checkbox"><input id="online-ol-only" class="custom-control-input" name="online-ol" type="checkbox" value="online-ol-only"> <label class="custom-control-label" for="online-ol-only">100% Online</label></div>
                             
                             <div class="custom-control custom-checkbox"><input id="on-campus" class="custom-control-input" name="online-ol" type="checkbox" value="on-campus"> <label class="custom-control-label" for="on-campus">On-campus</label></div>
                             
                          </div>
                          <div class="col-md-4">
                             <div class="filtered-box-options">
                             <p class="dark"><strong>Looking for something else?</strong></p>
                             
                             <ul class="list-unstyled">
                                
                                <li><a href="#">Pre-health planning</a></li>
                                
                                <li><a href="#">College preparation</a></li>
                                
                                <li><a href="#">Highschool completion</a></li>
                                
                                <li><a href="#">Honors College</a></li>
                                
                                <li><a href="#">English &amp; Math skills</a></li>
                                
                                <li><a href="#">ESL</a></li>
                                
                             </ul>
                             <p class="fbo-extra"><a href="#">See other program options</a></p>
                             </div>
                             
                          </div>
                       </div>
                    </div>
                 </div>
                 
              </div>
           </div>
        </div>
     </div>
     </div>
@endsection
  