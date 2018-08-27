@extends('_layouts.master')

@section('content')
  @include('_partials.lists')
@endsection
 
@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Arts</a></li>
  </ol>
@endsection