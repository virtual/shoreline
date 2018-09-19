<ul class="list-unstyled nav nav-tabs">
  <li>
    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab1-content" aria-controls="tab1-content" aria-selected="true">Deadlines &amp; Dates</a>
  </li>
  <li>
    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab2-content" aria-controls="tab2-content" aria-selected="false">Start a Plan</a>
  </li>
  <li>
    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab3-content" aria-controls="tab3-content" aria-selected="false">Questions?</a>
  </li>

</ul>
<div class="tab-content">
  <div class="tab-pane fade show active" id="tab1-content" aria-labelledby="tab1">
    <p>NOTE: All down and full payments are processed immediately!</p>
    @include('_partials.table')

  </div>

  <div class="tab-pane fade" id="tab2-content" aria-labelledby="tab2">
    @include('_partials.table2')
  </div>


  <div class="tab-pane fade" id="tab3-content" aria-labelledby="tab3">
    @include('_partials.text')
  </div>

</div>