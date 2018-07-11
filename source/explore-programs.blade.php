@extends('_layouts.master')

@section('content-header')
<div class="breadcrumb" aria-label="breadcrumb">
  <ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a href="#">Direct Transfer</a></li>
    <li><a class="active" aria-current="page" href="#">Video Game Design</a></li>
  </ol>

</div>

<h1>Video Game Design</h1>
<p>Dept & prog</p> 
@endsection

@section('content')
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
@endsection

@section('nav')
<div class="card card-program-heading">
    <h2>On this page</h2>
    <ul class="list-unstyled">
       <li><a class="scrollable" href="#overview">Overview</a></li>
       <li><a class="scrollable" href="#outcomes">Outcomes &amp; Careers</a></li>
       <li><a class="scrollable" href="#reqs">Eligibility &amp; Requirements</a></li>
       <li><a class="scrollable" href="#apply">How to Apply</a></li>
    </ul>
 </div>

 <a class="btn btn-important btn-block" href="/apply-and-aid/apply.aspx">Apply Now</a>

@endsection