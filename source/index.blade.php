@extends('_layouts.master')

@section('content')

@include('_partials.buttons')

@include('_partials.alerts')

<section class="sectional section1 sectional-padded theme-01 sectional-inverted ">
    <div class="inner">
        @include('_partials.card', [
          'heading' => 'Get help with enrollment',
          'desc' => 'Our enrollment services team is here to help with financial aid, how to apply, and all the things that make Shoreline a great place to study and pursue any of our more than 100 degrees and certificates!',
          'icon-alt' => 'quote',
          'icon' => 'far fa-map',          
          'theme' => 'secondary',
          'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
          ])
          @include('_partials.card', [
          'heading' => 'Visit Campus',
          'desc' => 'Outdoor areas are generally open to the public to walk through and experience the inviting environment, or with a reservation, a college staff member will take you and your friends and family for a guided tour of campus.',
          'icon-alt' => 'quote',
          'icon' => 'fas fa-quote-left',     
          'theme' => 'secondary',
          'link' => 'http://jigsaw.tighten.co/docs/blade-templates-and-partials/'          
          ])
    </div>
 </section>

 <section class="sectional theme-02 ">
    <div class="inner">
      <div class="slick-slider">
        @include('_partials.quote', [ 
          'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/testimonials/shoreline-williams72.jpg',          
          'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
          ]) 
          @include('_partials.quote', [ 
          'desc' => "I have come to believe that the whole world is an enigma, a harmless enigma that is made terrible by our own mad attempt to interpret it as though it had an underlying truth.",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/testimonials/shoreline-williams72h.jpg',          
          'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
          ]) 
        </div>
    </div>
 </section>

@endsection




@section('feature')
my feature!9
@endsection

@section('homepage')  
true
@endsection

@section('nav')
<ul>
  <li class="apply-now">
    <a href="/apply-and-aid/apply.aspx" class="cta">Apply Now</a>
  </li>
  <li>
    <a href="/apply-and-aid/campus-tour.aspx" class="cta">Visit Us</a>
  </li>
  <li>
    <a href="/ask-us.aspx" class="cta">Request Info</a>
  </li>
  <li>
    <a href="https://www.shoreline.edu/foundation/donations.aspx" class="cta">Donate Now</a>
  </li>
</ul>
@endsection