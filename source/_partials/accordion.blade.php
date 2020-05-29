<?php $uniqueID = substr(md5(rand()), 0, 3); ?>
<?php $class = !(empty($addclass)) ? $addclass : ''; ?>
<div class="accordion {{$class}}" id="accordion{{$uniqueID}}">
    <div class="accordion-card">
      <div class="accordion-header" id="heading{{$uniqueID}}One">
          <h3><button class="btn btn-toggle" type="button" data-toggle="collapse" data-target="#collapse{{$uniqueID}}One" aria-expanded="false" aria-controls="collapse{{$uniqueID}}One">
            Collapsible Group Item #1
          </button></h3>
      </div>
  
      <div id="collapse{{$uniqueID}}One" class="collapse" aria-labelledby="heading{{$uniqueID}}One" data-parent="#accordion{{$uniqueID}}">
        <div class="accordion-body">
          @include('_partials.table-stacked')
        </div>
      </div>
    </div>
    <div class="accordion-card">
      <div class="accordion-header" id="heading{{$uniqueID}}Two">
          <h3><button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$uniqueID}}Two" aria-expanded="false" aria-controls="collapse{{$uniqueID}}Two">
            Collapsible Group Item #2
          </button></h3>
      </div>
      <div id="collapse{{$uniqueID}}Two" class="collapse" aria-labelledby="heading{{$uniqueID}}Two" data-parent="#accordion{{$uniqueID}}">
        <div class="accordion-body">
          <ul>
            <li><a href="#">Anim pariatur cliche reprehenderit,</a></li>
            <li><a href="#">          enim eiusmod high life accusamus terry </a></li>
            <li><a href="#">          richardson ad squid. 3 wolf moon officia aute, non cupidatat </a></li>
          </ul> 
          <p>skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
        </div>
      </div>
    </div>
    <div class="accordion-card">
      <div class="accordion-header" id="heading{{$uniqueID}}Three">
          <h3><button class="btn btn-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$uniqueID}}Three" aria-expanded="false" aria-controls="collapse{{$uniqueID}}Three">
            Collapsible Group Item #3
          </button></h3>
      </div>
      <div id="collapse{{$uniqueID}}Three" class="collapse" aria-labelledby="heading{{$uniqueID}}Three" data-parent="#accordion{{$uniqueID}}">
        <div class="accordion-body">
          <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
        </div>
      </div>
    </div>
  </div>