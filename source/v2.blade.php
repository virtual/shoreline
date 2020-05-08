@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Communications Technology</a></li>
  </ol>
@endsection

@section('content-header-img-backup')
<div class="center-cropped" 
     style="background-image: url('{{ $page->baseUrl }}/resources/img/stock/image.jpg');">
     <img alt="" src="{{ $page->baseUrl }}/resources/img/stock/image.jpg"/>
</div>


@endsection


@section('left-nav')
<nav role="navigation" aria-label="Section Navigation"> 
    <div class="list-wrapper">
<ul class="nav nav-stacked">
    <li class="menu-heading">Future Students
<ul>
<li><a href="/international/admission/default.aspx">Apply for Admission</a></li>
<li><a href="/international/university-transfer/default.aspx">University Transfer</a></li>
<li><a href="/international/university-transfer/high-school-completion.aspx">High School Completion</a></li>
<li><a href="/international/admission/toefl-ielts.aspx">English Proficiency</a></li>
<li><a href="/international/esl/default.aspx">English Language Programs</a></li>
<li><a href="/international/admission/cost.aspx">Costs of Attendance</a></li>
<li><a href="/international/admission/once-accepted.aspx">Once Accepted</a></li>
<li><a title="International Student Ambassadors" href="/international/isa.aspx">International Student Ambassadors</a></li>
</ul>
</li>
<li>Current Students
<ul>
<li><a href="/international/advising/default.aspx">Advising</a></li>
<li><a href="/international/immigration/default.aspx">F-1 Immigration</a></li>
<li><a href="/international/ipm/default.aspx">International Peer Mentors</a></li>
</ul>
</li>
<li><a href="/international/study-abroad/">Study Abroad</a></li>
<li><a href="/international/educational-partnerships/default.aspx">Partners</a></li>
<li class="current"><a title="50th Anniversary" href="/about-shoreline/50th-anniversary/default.aspx">50th Anniversary</a>
  <ul id="subnav_child">
  <li class="current"><a href="/about-shoreline/50th-anniversary/default.aspx">Home</a></li>
  <li><a href="/about-shoreline/50th-anniversary/50th-anniversary-story.aspx">50th Anniversary History</a></li>
  <li><a href="/about-shoreline/50th-anniversary/party.aspx">Party Like it's 1965! Celebration 2015</a></li>
  </ul>
</li>
<li><a href="/international/about-us/default.aspx">About Us</a></li>
 </ul>
 </div>
 </nav>
@endsection


@section('content-header')
 
    <h1>Varient 2 has a pretty long title</h1>
    <p class="xxl">WIP with no image. The future is visual. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit unde est voluptatibus provident iure. </p>
    <kbd class="ouc">Edit</kbd>
    <a href="#" class="btn btn-primary">Primary</a>
    <a href="#" class="btn btn-tertiary">Tertiary</a>
@endsection

@section ('lead') 
<h2 class="sr-only" id="overview" tabindex="-1">Overview</h2>
<kbd class="ouc">Edit</kbd>
<p class="xl">
    The Visual Communications Technology program trains students to use their visual media skills in graphic design, video production, video game design and web design. Students learn in a cross disciplinary environment and have the opportunity to join campus clubs to put their skills to use.
</p>
@endsection

@section('content')
<kbd class="ouc">Edit</kbd>
<h2>Watch video</h2>

<div class="video-container">
  @include('_partials.video', [
  'heading' => 'Video Title',
  'desc' => 'Video description Earum omnis reiciendis aut quasi id ea exercitationem dolorum. Asperiores aut
  dicta odit.',
  'youtubeID' => 'dPr287p0cdw',
  'img' => '/resources/img/videos/Video-Snippet.jpg'
  ])
</div>

<h2 class="mt-5">Features &amp; Highlights </h2>
<ul class="icon-box">
    <li><p>Access to state of the art studio equipment and amazing very amazing things that happen way more than other schools that you should really know about such as terry taylor and all the bestest stuff ever.</p></li>
    <li><p>Access to state of the art studio equipment</p></li>
    <li><p>Faculty with industry experience and more and more and more stuff that i don't know about.</p></li>
  </ul>

  <h2>Program Options</h2>       
  <div class="row">
    <div class="col-md-4">
        @include('_partials.card', [
        'heading' => 'University Transfer',
        'iconalt' => '',
        'icon' => '',   
        'desc' => '<span>Explore our <strong>University Transfer</strong> options if you wish to continue your </span><span>studies at a four-year school. If you don\'t see an area of study you\'re interested
            in, <a href="/ask-us.aspx?source_page=https://www.shoreline.edu/areas-of-study/programs.aspx">contact us</a>. In most cases we can help you prepare for the major of your choice.</span>',
        'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
        ])
    </div>
    
    <div class="col-md-4">
        @include('_partials.card', [
        'heading' => 'Career Advancement',
        'iconalt' => '',
        'icon' => '',   
        'desc' => '<strong>"Professional/Technical"</strong> or vocational studies provide&nbsp;students with specialized knowledge and skills to either
        prepare them to enter a particular field, or enhance existing skills while already
        employed.',
        'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
        ])
    </div>
    
    <div class="col-md-4">
        @include('_partials.card', [
        'heading' => 'College Readiness',
        'iconalt' => '',
        'icon' => '',   
        'desc' => 'You can also prepare for college-level courses by enrolling in <a href="https://www.shoreline.edu/transitional-programs/esl/">English as a Second Language (ESL)</a>, <a href="https://www.shoreline.edu/adult-basic-education/">Adult Basic Education (ABE)</a> or <a href="https://www.shoreline.edu/ged/">General Education Development (GED)</a> courses, or taking part in our <a href="/high-school-programs/">high school programs. </a>',
        'link' => 'http://www.shoreline.edu/communications-marketing/identity-guidelines/default.aspx' 
        ])
    </div>
  </div>
  <hr>
  <h3>Lorem ipsum</h3>
  <p>dolor sit amet consectetur adipisicing elit. Quia voluptatibus voluptates repellendus illum doloremque aspernatur, aliquid id. Minima earum sint repellendus natus id suscipit culpa non iusto. Minima, libero itaque!</p>

@endsection

@section('main-sidebar-content-backup')  
<kbd class="ouc">Edit</kbd>
  <div class="card">
    <div class="card-body">
      <h3 class="h5"><strong>Related Program Links</strong></h3>
      <ul class="list-unstyled">
        <li><a class="scrollable" href="#info">Information Meetings</a></li>
        <li><a class="scrollable" href="#brochure">Program Brochure</a></li>
        <li><a class="scrollable" href="#guide">Planning Guide</a></li>
        <li><a class="scrollable" href="#apply">Online Application</a></li>
        <li><a class="scrollable" href="#prerequisite">Prerequisite Checklist</a></li>
        <li><a class="scrollable" href="#transcript">Transcript Evaluation</a></li>
      </ul> 
    </div>
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
 
@section('content-header-inverse') 
  true
@endsection 

@section('sectionals')
<section class="sectional sectional-padded">
  <div class="container-fluid">
    <hr />
    <h2>Sectional</h2>
    <div class="layout-has-sidebar">
      <div class="content-container">

        <div class="video-container">
          @include('_partials.video', [
          'heading' => 'Video Title',
          'desc' => 'Video description Earum omnis reiciendis aut quasi id ea exercitationem dolorum. Asperiores aut
          dicta odit.',
          'youtubeID' => 'dPr287p0cdw',
          'img' => '/resources/img/videos/Video-Snippet.jpg'
          ])
        </div>
      </div>
    </div>
  </div>
</section>

  @endsection