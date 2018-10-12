@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection


@section('content')

<h1>Tuition Payment Plan</h1>
<p>An important step in attending college is having a solid plan for covering the cost of attendance. If you don't have money to pay your tuition all at once, review the following information on setting up a payment plan through Nelnet.</p>
<p>Start budgeting for your education today. Your payments will be lower the sooner you start. </p>

<h2>Steps for Planning your Payments</h2>
@include('_partials.accordion')
@include('_partials.nav-tab')
@include('_partials.nav-tab')

@include('_partials.buttons')

@include('_partials.alerts')



<section class="sectional section1 sectional-padded ">
  <div class="container-fluid">
    @include('_partials.card', [
      'heading' => 'Get help with enrollment',
      'desc' => 'Our enrollment services team is here to help with financial aid, how to apply, and all the things that make Shoreline a great place to study and pursue any of our more than 100 degrees and certificates!',
      'iconalt' => 'quote',
      'icon' => 'far fa-map',          
      'theme' => 'secondary',
      'link' => '#'
      ])
      @include('_partials.card', [
      'heading' => 'Visit Campus',
      'desc' => 'Outdoor areas are generally open to the public to walk through and experience the inviting environment, or with a reservation, a college staff member will take you and your friends and family for a guided tour of campus.',
      'iconalt' => 'quote',
      'icon' => 'fas fa-quote-left',     
      'theme' => 'secondary',
      'link' => '#'          
      ])
  </div>
 </section>

 <section>
    <div class="container-fluid py-5">
      <div class="slick-slider">
        @include('_partials.quote', [ 
          'desc' => "As corny as it sounds, it has been amazing to be here and have the opportunities that I've had…",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/testimonials/shoreline-williams72.jpg',          
          'link' => '#'
          ]) 
          @include('_partials.quote', [ 
          'desc' => "I have come to believe that the whole world is an enigma, a harmless enigma that is made terrible by our own mad attempt to interpret it as though it had an underlying truth.",
          'alt' => 'Pavielle Montes',
          'attribution' => 'Pavielle Montes',
          'attribution2' => 'Associate of Arts and High School Diploma',
          'img' => '/resources/img/testimonials/shoreline-williams72h.jpg',          
          'link' => '#'
          ]) 
        </div>
    </div>
 </section>

@endsection

@section('left-nav')
@include('_partials.left-nav')
@endsection




@section('main-sidebar-content-backup')  
  <div class="card card-program-heading">
    <h2 class="h4">Related Program Links</h2>
    <ul class="list-unstyled">
        <li><a class="scrollable" href="#info">Information Meetings</a></li>
        <li><a class="scrollable" href="#brochure">Program Brochure</a></li>
        <li><a class="scrollable" href="#guide">Planning Guide</a></li>
        <li><a class="scrollable" href="#apply">Online Application</a></li>
        <li><a class="scrollable" href="#prerequisite">Prerequisite Checklist</a></li>
        <li><a class="scrollable" href="#transcript">Transcript Evaluation</a></li>
    </ul> 
  </div>
 @include('_partials.card', [
     'heading' => 'Request Info',
     'iconalt' => '',
     'icon' => '',   
     'desc' => 'Get in touch with an enrollment coach to learn more about our programs, registering, financial aid, and more',
     'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
     ])

     
     @include('_partials.card', [
     'heading' => 'Apply Today',
     'iconalt' => '',
     'icon' => '',   
     'desc' => 'Your first step is to get a student ID – it\'s fast, easy, and free',
     'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
     ])

@endsection 




@section('sectionals')

<section class="sectional sectional-padded">
  <div class="container-fluid">
    @include('_partials.table')
      <hr/>
      <h2>Sectional</h2>
      <div class="layout-has-sidebar">
          <div class="content-container"> 

    <div class="video-container">
      @include('_partials.video', [
      'heading' => 'Video Title',
      'desc' => 'Video description Earum omnis reiciendis aut quasi id ea exercitationem dolorum. Asperiores aut dicta odit.',
      'youtubeID' => 'dPr287p0cdw',
      'img' => '/resources/img/videos/Video-Snippet.jpg'
      ]) 
  </div>
 
  <div class="slick-slider carousel-slider">
      
            
      @include('_partials.carousel', [ 
      'desc' => "Car1: Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
      'alt' => 'Car1: Photo Title', 
      'img' => '/resources/img/carousel/rectangle-copy-7.png',          
      'link' => '#'
      ])  
      @include('_partials.carousel', [ 
      'desc' => "Car1: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
      'alt' => 'Car1: Photo Title2', 
      'img' => '/resources/img/carousel/alexis-brown-85793-unsplash.jpg',          
      'link' => '#'
      ])   
        @include('_partials.carousel', [ 
        'desc' => "Car1: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
        'alt' => 'Car1: Photo Title3', 
        'img' => '/resources/img/carousel/rectangle-copy-7.png',          
        'link' => '#'
        ])  
      </div>
     
    </div>
  <div class="sidebar-container">

     @include('_partials.card', [
     'heading' => 'Course Descriptions',
     'iconalt' => '',
     'icon' => '',   
     'desc' => 'Browse the course descriptions to explore classes available in this subject',
     'link' => '#',
     'buttontext' => 'Request Info'
     ])
     @include('_partials.card', [
     'heading' => 'Sample Schedule',
     'desc' => 'Get a glimpse at what your quarterly schedule might look like in this program option',
     'iconalt' => 'map',
     'icon' => 'far fa-map',      
     'link' => '#',
     'buttontext' => ''          
     ])

  </div>
  </div>
</div>
</section>

<section class="sectional sectional-padded">
    <div class="container-fluid">
        <div class="slick-slider carousel-slider">
          <!-- should be same height and width; otherwise causes issues on mobile design -->
            @include('_partials.carousel', [ 
              'desc' => "Car2: Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
              'alt' => 'Car2: Photo Title', 
              'img' => '/resources/img/carousel/rectangle-copy-7.png',          
              'link' => '#'
              ])  
              @include('_partials.carousel', [ 
              'desc' => "Car2: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
              'alt' => 'Car2: Photo Title2', 
              'img' => '/resources/img/carousel/alexis-brown-85793-unsplash.jpg',          
              'link' => '#'
              ])   
                @include('_partials.carousel', [ 
                'desc' => "Car2: 2Bob Hutchinson was part of the pioneer generation of animators in Seattle who, confronted with limited resources, established a vital presence by creating their own centers of animation and film where experimentation was the norm.",
                'alt' => 'Car2: Photo Title3', 
                'img' => '/resources/img/carousel/rectangle-copy-7.png',          
                'link' => '#'
                ])  
            </div>
      </div>
</section>
@endsection