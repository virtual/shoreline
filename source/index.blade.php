@extends('_layouts.home')

@section('content')

big image

<div class="row">

  <div class="col-12 col-sm-6 col-md-4">
      <ul class="card-links">
          <li><a href="#" class="more-arrow">College/University Transfer</a></li>
          <li><a href="#" class="more-arrow">Professional & Technical</a></li>
          <li><a href="#" class="more-arrow">International Students</a></li>
          <li><a href="#" class="more-arrow">Transitional (ESL, HS21, I-Best GED…)</a></li>
        </ul>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
      <ul class="card-links">
          <li><a href="#" class="more-arrow">Continuing Education</a></li>
          <li><a href="#" class="more-arrow">Learn Online</a></li>
          <li><a href="#" class="more-arrow">Veteran</a></li>
          <li><a href="#" class="more-arrow">Browse All Programs</a></li>
        </ul>
  </div>
  <div class="col-12 col-sm-12 col-md-4">
    <a class="btn btn-important btn-block" href="/apply-and-aid/apply.aspx">Apply Now</a>
    <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Ask a Question</a>
    <a class="btn btn-secondary btn-block" href="/apply-and-aid/apply.aspx">Visit Campus</a>
  </div>

</div>

  
@endsection


@section ('icons1') 

<div class="row">
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '100%',
        'desc' => 'Transfer and professional/technical areas of study',
        'icon-alt' => 'book',     
        'icon' => '../../resources/img/icons/homepage/book.png',          
        'buttontext' => 'See all Programs',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '900+',
        'desc' => 'International students from around the world',
        'icon-alt' => 'globe',          
        'icon' => '../../resources/img/icons/homepage/globe.png',          
        'buttontext' => 'Join Us',
        'link' => '#'
        ])
  
    </div>
    <div class="col-12 col-sm-4">
        @include('_partials.featureicon', [
        'heading' => '140+',
        'desc' => 'Scholarships awarded annually',
        'icon-alt' => 'quote',
        'icon' => '../../resources/img/icons/homepage/badge.png',          
        'buttontext' => 'Find Scholarships',
        'link' => '#'
        ])
  
    </div>
</div>
@endsection

 

@section('hugbox')  
<h2>Not sure where to start?</h2>
<p class="lead">We can help point you in the right direction</p>
<div class="row">
    <div class="col-12 col-sm-6">
        @include('_partials.card', [
        'heading' => 'Get help with enrollment',
        'icon-alt' => 'comment',
        'icon' => 'far fa-comment',   
        'desc' => 'Our enrollment services team is here to help with financial aid, how to apply, and all the things that make Shoreline a great place to study and pursue any of our more than 100 degrees and certificates!',
        'link' => '#'
        ]) 
    </div>
    
  <div class="col-12 col-sm-6">
      @include('_partials.card', [
      'heading' => 'Visit Campus',
      'icon-alt' => '',
      'icon' => 'far fa-map',   
      'desc' => 'Outdoor areas are generally open to the public to walk through and experience the inviting environment, or with a reservation, a college staff member will take you and your friends and family for a guided tour of campus.',
      'link' => '#'
      ]) 
  </div>
</div>
@endsection
 