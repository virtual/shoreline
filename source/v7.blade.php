@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Communications Technology</a></li>
  </ol>
@endsection
   

 
@section('content')
      <h1>Accordions</h1>
      <p>Empty template, looks nice on newer (not IE 11) browsers</p>
      @include('_partials/accordion')
      <hr/>
      @include('_partials/table-stacked')
@endsection
  