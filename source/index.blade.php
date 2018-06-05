@extends('_layouts.master')

@section('content')


<div class="alert alert-primary alert-padded" role="alert">
  <h2>Financial Aid office will be closed early on January 20, 2016</h2>
  <p>This is where further info about your announcement goes. This text can be hyperlinked if necessary, or there could be an
    optional button that links to something with more information about the announcement.</p>
</div>
<p>Announcement: For important, but temporary information about things like planned schedule changes or upcoming deadlines.</p>

<div class="alert alert-warning alert-padded" role="alert">
  <h2>Snow Closure: January 20, 2016</h2>
  <p>This is where further info about your announcement goes. This text can be hyperlinked if necessary, or there could be an
    optional button that links to something with more information about the alert.</p>
</div>
<p>Alert: For urgent, unplanned schedule changes or campus-wide alerts</p>
  
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  This is a warning alert—check it out!
</div>

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
        @include('_partials.quote', [ 
          'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/stock/stefan-stefancik-257625-unsplash.jpg',          
          'link' => 'https://www.youtube.com/watch?v=YkLwzgPoQcA'
          ]) 
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