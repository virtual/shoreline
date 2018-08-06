@extends('_layouts.master')



@section('content-interior')
<div class="breadcrumb" aria-label="breadcrumb">
    <ol>
      <li><a href="#">Home</a></li>
      <li><a href="#">Enrollment Services</a></li>
      <li><a href="#">Cashier</a></li>
      <li>
        <a class="active" aria-current="page" href="#">Tuition Payment Plan</a>
      </li>
    </ol>
  </div>

<h1>Tuition Payment Plan</h1>
<p>An important step in attending college is having a solid plan for covering the cost of attendance. If you don't have money to pay your tuition all at once, review the following information on setting up a payment plan through Nelnet.</p>
<p>Start budgeting for your education today. Your payments will be lower the sooner you start. </p>

@include('_partials.nav-tab')

@include('_partials.buttons')

@include('_partials.alerts')



<section class="sectional section1 sectional-padded ">
    <div class="container-fluid">
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

@section('left-nav')
@include('_partials.left-nav')
@endsection


@section('feature')
my feature!9
@endsection

@section('homepage')  
true
@endsection

