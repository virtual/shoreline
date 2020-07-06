<div class="py-5 bg-light">
  <div class="container-fluid">
    <section class="sectional sectional-padded">
      <div class="container-fluid">
        <h2>Not sure where to start?</h2>
        <p class="lead">We can help point you in the right direction</p>
        <div class="row">
          <div class="col-12 col-sm-6">
            @include('_partials.card', [
            'heading' => 'Get help with enrollment',
            'iconalt' => 'comment',
            'icon' => 'far fa-comment',
            'desc' => 'Our enrollment services team is here to help with financial aid, how to apply, and all the things
            that make Shoreline a great place to study and pursue any of our more than 100 degrees and certificates!',
            'link' => '#'
            ])
          </div>

          <div class="col-12 col-sm-6">
            @include('_partials.card', [
            'heading' => 'Visit Campus',
            'iconalt' => '',
            'icon' => 'far fa-map',
            'desc' => 'Outdoor areas are generally open to the public to walk through and experience the inviting
            environment, or with a reservation, a college staff member will take you and your friends and family for a
            guided tour of campus.',
            'link' => '#'
            ])
          </div>
        </div>
      </div>

    </section>
    <section class="sectional sectional-padded">
      <h2>Lazy load image</h2>
      <img class="lazy" data-src="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams260.jpg"
        alt="a big image" />
    </section>
  </div>
</div>


<section class="sectional sectional-padded bg-primary lazy"
  data-bg="{{ $page->baseUrl }}/resources/img/stock/shoreline.williams73.jpg">
  <div class="container-fluid">
    <h2>Lazy load background</h2>
    <div class="card">
      <div class="card-body">
        <ul>
          <li>Lorem ipsum </li>
          <li>Dolor sit amet</li>
          <li>Consectetur adipiscing</li>
          <li>Elit nunc nec ex</li>
          <li>Id felis </li>
        </ul>
      </div>
    </div>
  </div>
</section>