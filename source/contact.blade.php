@extends('_layouts.master')


@section('breadcrumb')
<ol>
  <li>
    <a href="http://www.example.com/books">Home</a>
  </li>
  <li>
    <a href="http://www.example.com/sciencefiction">Science Fiction</a>
  </li>
  <li>
    <a href="http://www.example.com/books">Books</a>
  </li>
  <li>
    <a href="http://www.example.com/sciencefiction">Science Fiction</a>
  </li>
  <li>
    <a class="active" aria-current="page" href="http://www.example.com/books/sciencefiction/awardwinners">Award
      Winners</a>
  </li>
</ol>
@endsection

@section('main-sidebar-content')
@include('_partials.address', [
'heading' => 'Make an Appointment',
'style' => 'icons',
'hours' => 'show' 
])

@include('_partials.address', [ 
'style' => 'icons',
'hours' => 'show',
'cols' => '2'
])
@endsection

@section('content')

<h1>Contact Boxes</h1>

@include('_partials.address', [
'heading' => 'Make an Appointment',
'style' => 'icons',
'hours' => 'show',
'cols' => '2'
])


@include('_partials.address', [
'heading' => 'Make an Appointment',
'style' => 'icons'
])


<div class="row">
  <div class="col-md-4">
    @include('_partials.address', [ 
'style' => 'icons', 
'cols' => '2'
])
  </div>
  <div class="col-md-4">
    <h3 class="primary">Summer 2018 online payment plan enrollment opens May 11, 2018</h3>
    <p>Payment plan must be in place by your tuition due date.</p>
  </div>
  <div class="col-md-4">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
      elit. Aenean commodo ligula eget dolor. Aenean massa.
      Del sociis natoque penatibus et magnis dis parturient
      montes, nascetur ridiculus mus. Donec quam felis,
      ultricies nec, pellentesque eu, pretium quis, sem.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <h3 class="primary">Summer 2018 online payment plan enrollment opens May 11, 2018</h3>
    <p>Payment plan must be in place by your tuition due date.</p>
  </div>
  <div class="col-md-4">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
      elit. Aenean commodo ligula eget dolor. Aenean massa.
      Del sociis natoque penatibus et magnis dis parturient
      montes, nascetur ridiculus mus. Donec quam felis,
      ultricies nec, pellentesque eu, pretium quis, sem.</p>
  </div>

  <div class="col-md-4">
    @include('_partials.address', [
    'heading' => 'Make an Appointment',
    'style' => 'icons',
    'hours' => 'show'
    ])
  </div>
</div>

@endsection