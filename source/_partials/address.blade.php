<div class="contact-us-box">
  @if((!empty($heading)))
  <h2>{{ $heading }}</h2>
  @else
  <h2>Contact Us</h2>
  @endif
  <div class="content-blocks">
    <div class="content-block">
      <div class="content-block-interior">
        <h3>Advising Services</h3>
        <p>1111 Greenwood Ave. (Blg 2000)<br />
          Shoreline, Wa. 98111</p>
        @if((!empty($style)) && ($style = 'icons'))
        <dl class="list-icons">
          <dt><span class="fa fa-phone-alt" aria-hidden="true"></span><span class="sr-only">Phone</span></dt>
          <dd><a href="tel:+206-546-4559">(206) 546-4559</a></dd>
          <dt><span class="far fa-envelope" aria-hidden="true"></span><span class="sr-only">Email</span></dt>
          <dd><a href="mailto:contact@shoreline.edu">contact@shoreline.edu</a></dd>
          <dt><span class="far fa-fax" aria-hidden="true"></span><span class="sr-only">Fax</span></dt>
          <dd>(206) 533-5101</dd>
          <dt><span class="fas fa-map-marker-alt" aria-hidden="true"></span><span class="sr-only">Location</span></dt>
          <dd><a href="#">FOSS (5000) Building</a></dd>

          <dt class="unformatted"></dt>
          <dd>Room 411</dd>
        </dl>
        @else
        <dl>
          <dt>Email</dt>
          <dd><a href="mailto:contact@shoreline.edu">contact@shoreline.edu</a></dd>
          <dt>Phone</dt>
          <dd><a href="tel:+206-546-4559">(206) 546-4559</a></dd>
          <dt>Fax</dt>
          <dd><a href="tel:+206-533-5101">(206) 533-5101</a></dd>
        </dl>
        @endif
        @if((!empty($style)))
        <dl class="list-icons">
          <dt><span class="far fa-clock" aria-hidden="true"></span><span class="sr-only">Hours</span></dt>
          <dd>
            <dl class="contact-hours">
              <dt class="contact-hours-Monday" style="display: none;">Mon</dt>
              <dd class="contact-hours-Monday" style="display: none;">8a - 5p</dd>
              <dt class="contact-hours-Tuesday" style="display: none;">Tues</dt>
              <dd class="contact-hours-Tuesday" style="display: none;">8a - 5p</dd>
              <dt class="contact-hours-Wednesday" style="display: none;">Wed</dt>
              <dd class="contact-hours-Wednesday" style="display: none;">8a - 5p</dd>
              <dt class="contact-hours-Thursday" style="">Thurs</dt>
              <dd class="contact-hours-Thursday" style="">8a - 5p<button type="button"
                  class="btn btn-link contact-hours-expand py-0 text-dark"><span class="fas fa-caret-down"
                    aria-hidden="true"></span><span class="sr-only">Expand</span></button></dd>
              <dt class="contact-hours-Friday" style="display: none;">Fri</dt>
              <dd class="contact-hours-Friday" style="display: none;">Closed</dd>
              <dt class="contact-hours-Saturday" style="display: none;">Sat</dt>
              <dd class="contact-hours-Saturday" style="display: none;">7a - 3p</dd>
              <dt class="contact-hours-Sunday" style="display: none;">Sun</dt>
              <dd class="contact-hours-Sunday" style="display: none;">Closed</dd>
            </dl>
          </dd>

        </dl>
        @endif
      </div>
    </div>
    @if((empty($cols)) || ($cols != '2'))
    <div class="content-block">
      <div class="content-block-interior">
        <ul class="list-unstyled">
          <li><a href="#">Department Directory</a></li>
          <li><a href="#">Campus Directory</a></li>
          <li><a class="btn btn-sm btn-secondary" href="#">Visit Campus</a></li>
          <li><a class="btn btn-sm btn-primary" href="#">Get Started</a> </li>
        </ul>
      </div>
    </div>
    @endif
    @if((!empty($map)))
    <div class="content-block content-block-iframe">
      <div class="content-block-interior">
        @include('_partials/map')
      </div>
    </div>
    @else
    <div class="content-block">
      <div class="content-block-interior">
        <a href="#"><img src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
            alt="students"></a>
      </div>
    </div>
    @endif

  </div>
</div>