@extends('_layouts.master')

@section('content')
  @include('_partials.lists')
@endsection
 
@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

@section('sectionals')
<div class="py-5 bg-light">
  <div class="container-fluid">
    <section class="sectional sectional-padded">
@include('_partials.lists')
</section>
</div>
</div>
@endsection


@section('left-nav')
@include('_partials.left-nav')
@endsection