<?php $uniqueID = 'searchmenu'; ?>
<li id="{{$uniqueID}}sub" class="dropdown-list collapse">
  <div class="dropdown-menu ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <div class="d-flex">
            @include ('_partials.searchform') 
            <button class="btn btn-link ml-3" data-toggle="collapse" data-target="#searchmenusub" aria-controls="searchmenusub" aria-expanded="true">Cancel</button>
          </div>
          <div class="pb-3">
            <h2>Frequently Searched</h2>
            <ul class="list-unstyled list-inline btn-tags">
              <li><a class="btn btn-link btn-sm" href="#">Canvas</a></li>
              <li><a class="btn btn-link btn-sm" href="#">Library</a></li>
              <li><a class="btn btn-link btn-sm" href="#">Class Schedule</a></li>
              <li><a class="btn btn-link btn-sm" href="#">Planning Guides</a></li>
              <li><a class="btn btn-link btn-sm" href="#">Transcripts</a></li>
              <li><a class="btn btn-link btn-sm" href="#">Calendars</a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

  </div>
</li>