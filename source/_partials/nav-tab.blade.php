<?php $uniqueID = substr(md5(rand()), 0, 3); ?>
<ul class="list-unstyled nav nav-tabs" id="navtab{{$uniqueID}}">
  <li>
    <a class="nav-link active" id="tab{{$uniqueID}}1" data-toggle="tab" href="#tab{{$uniqueID}}1-content" aria-controls="tab{{$uniqueID}}1-content" aria-selected="true">Deadlines &amp; Dates</a>
  </li>
  <li>
    <a class="nav-link" id="tab{{$uniqueID}}2" data-toggle="tab" href="#tab{{$uniqueID}}2-content" aria-controls="tab{{$uniqueID}}2-content" aria-selected="false">Start a Plan</a>
  </li>
  <li>
    <a class="nav-link" id="tab{{$uniqueID}}3" data-toggle="tab" href="#tab{{$uniqueID}}3-content" aria-controls="tab{{$uniqueID}}3-content" aria-selected="false">Questions?</a>
  </li>

</ul>
<div class="tab-content">
  <div class="tab-pane fade show active" id="tab{{$uniqueID}}1-content" aria-labelledby="tab{{$uniqueID}}1">
    <p>NOTE: All down and full payments are processed immediately!</p>
    @include('_partials.table')

  </div>

  <div class="tab-pane fade" id="tab{{$uniqueID}}2-content" aria-labelledby="tab{{$uniqueID}}2">
    @include('_partials.table2')
  </div>


  <div class="tab-pane fade" id="tab{{$uniqueID}}3-content" aria-labelledby="tab{{$uniqueID}}3">
    @include('_partials.text')
  </div>

</div>