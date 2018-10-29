@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection


@section('content')

<h1>Cards</h1>
<p class="lead">Cards are like large buttons or links with an optional icon and supporting text.</p>
<p>An important step in attending college is having a solid plan for covering the cost of attendance. If you don't have money to pay your tuition all at once, review the following information on setting up a payment plan through Nelnet.</p>
<p class="card-link"><a class="more-arrow" href="#">Get started</a></p>
<p>Start budgeting for your education today. Your payments will be lower the sooner you start. </p>
<ul class="card-links more-arrow">
    <li><a href="#">More Arrow on UL</a> Gain specialized knowledge and skills for a career in a particular field.</li>
    <li><a href="#">College/University Transfer</a> For students who intend to continue their studies at a college or university.</li>
    <li><a href="#">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</li>
  </ul>
<div class="row">
  <div class="col-12 col-sm-6">
      <p class="card-link"><a class="more-arrow" href="#">Get started</a> Got some other text here</p>
  </div>
  <div class="col-12 col-sm-6">
      <p class="card-link"><a class="more-arrow" href="#">Learn more</a> our payments will be lower the sooner you start. our payments will be lower the sooner you start.</p>
  </div>
</div>
<p>Start budgeting for your education today. Your payments will be lower the sooner you start. </p>
 <h2>Links in cols</h2>
<div class="row">
  <div class="col-12 col-sm-6">
    <ul class="card-links">
      <li><a href="#" class="more-arrow">University Transfer</a> Gain specialized knowledge and skills for a career in a particular field.</li>
      <li><a href="#" class="more-arrow">College/University Transfer</a> For students who intend to continue their studies at a college or university.</li>
      <li><a href="#" class="more-arrow">Professional & Technical</a> Gain specialized knowledge and skills for a career in a particular field.</li>
    </ul>
  </div>
  <div class="col-12 col-sm-6"> 
    <ul class="card-links">
      <li><a href="#" class="more-arrow">University Transfer</a> </li>
      <li><a href="#" class="more-arrow">College/University Transfer</a> </li>
      <li><a href="#" class="more-arrow">Professional & Technical</a> </li>
    </ul></div> 
</div>
<h2>Fall 2018</h2>
<p> Fall 2018 quarter starts on Wednesday, September 26, 2018. Check individual section footnotes for starting and ending dates of Late Starting / Fast Track Classes.</p>
    <div class="row">
        <div class="col-12 col-md-6">
      <ul class="card-links card-links-compact">
          <li><a href="#">University Transfer</a></li>
          <li><a href="#">College/University Transfer</a></li>
          <li><a href="#">Professional & Technical</a></li>
          <li><a href="#">University Transfer</a></li>
          <li><a href="#">College/University Transfer</a></li>
          <li><a href="#">Professional & Technical</a></li>
          <li><a href="#">University Transfer</a></li>
          <li><a href="#">College/University Transfer</a></li>
          <li><a href="#">Professional & Technical</a></li>
          <li><a href="#">University Transfer</a></li>
          <li><a href="#">College/University Transfer</a></li>
          <li><a href="#">Professional & Technical</a></li>
          <li><a href="#">University Transfer</a></li>
          <li><a href="#">College/University Transfer</a></li>
          <li><a href="#">Professional & Technical</a></li>
      </ul>
    </div> 
  </div>

<div class="row">
  <div class="col-12 col-sm-6">   
      @include('_partials.card', [
      'heading' => 'Apply Today',
      'iconalt' => '',
      'icon' => '',   
      'desc' => 'Your first step is to get a student ID – it\'s fast, easy, and free',
      'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx',
      'callout' => ''
      ])
 </div>
  <div class="col-12 col-sm-6">   
    @include('_partials.card', [
      'heading' => 'Get help with enrollment',
      'desc' => 'These call for a font-awesome 5 icon class; eg. "far fa-map"',
      'iconalt' => 'quote',
      'icon' => 'far fa-map',          
      'theme' => 'secondary',
      'link' => '#',
      'callout' => 'true'
      ])
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">  
        @include('_partials.card', [
        'heading' => 'Get help with enrollment',
        'desc' => 'Our enrollment services team is here to help with financial aid, how to apply, and all the things that make Shoreline a great place to study and pursue any of our more than 100 degrees and certificates!',
        'iconalt' => 'quote',
        'icon' => 'far fa-map',          
        'theme' => 'secondary',
        'link' => '#'
        ])
   </div>
    <div class="col-12 col-sm-6">  
       
        @include('_partials.card', [
        'heading' => 'Apply Today',
        'iconalt' => '',
        'icon' => '',   
        'desc' => 'Your first step is to get a student ID – it\'s fast, easy, and free',
        'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx',
        'buttontext' => 'Request Info',
        ])
       </div>
  </div>
<div class="row">
<div class="col-12 col-sm-6 col-md-6 col-lg-8">@include('_partials.card', [
    'heading' => 'Course Descriptions',
    'iconalt' => '',
    'icon' => '',   
    'desc' => 'Browse the course descriptions to explore classes available in this subject',
    'link' => '#',
    'buttontext' => 'Request Info',
    'img' => '../resources/img/stock/image.jpg'
    ])</div>
<div class="col-12 col-sm-6 col-md-6 col-lg-4">@include('_partials.card', [
    'heading' => 'Course Descriptions',
    'iconalt' => '',
    'icon' => '',   
    'desc' => 'Browse the course descriptions to explore classes available in this subject',
    'link' => '#',
    'buttontext' => 'Request Info',
    'img' => '../resources/img/stock/image.jpg'
    ])</div>
</div>

@include('_partials.card', [
'heading' => 'Course Descriptions',
'iconalt' => '',
'icon' => '',   
'desc' => 'Browse the course descriptions to explore classes available in this subject',
'link' => '#',
'buttontext' => 'Request Info',
'img' => '../resources/img/stock/image.jpg'
])


@endsection


@section('left-nav')
@include('_partials.left-nav')
@endsection