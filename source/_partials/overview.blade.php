<section class="">
  <dl class="list-inline">
    <dt class="icon-bg-certificate-solid">Completion Award </dt>
    <dd> Transfer</dd>
    <dt class="icon-bg-clock-o">Length of Study</dt>
    <dd> 90</dd>
    <dt class="icon-bg-calendar">Starting Quarter</dt>
    <dd> Fall, Spring </dd>
    <dt class="icon-bg-book">Application Deadline </dt>
    <dd> N/A</dd>
    <dt class="icon-bg-map-marker">Location </dt>
    <dd> On Campus</dd>
    <dt class="icon-bg-dollar">Tuition &amp; Fees </dt>
    <dd>
      <button class="btn-toggle verbose btn collapsed" type="button" data-toggle="collapse" data-target="#tuitionfees" aria-expanded="false" aria-controls="tuitionfees">
        See
        <span class="sr-only">tuition and fees</span> details </button>
      <div class="collapse" id="tuitionfees">
        <div class="table-wrapper-inner">

          @include('_partials.table-stacked')

          @include('_partials.card', [
          'heading' => 'Ways to pay for college',
          'iconalt' => '',
          'icon' => '',   
          'desc' => 'Learn how you can fund your education including financial aid, scholarships, workforce and more.',
          'link' => '#'
          ]) 
        </div>

      </div>
    </dd>
  </dl> 
</section>