@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection

 
@section('main-sidebar-content') 
@include('_partials.address', [ 
'style' => 'icons',
'hours' => 'show',
'cols' => '2',
'class' => 'contact-us-box-valign-center'
])

@endsection

@section('content')
<h1>Current Students</h1>
<p class="lead">View <a href="../current">sized columns and accordions</a></p>


<h2>Icon Box Grid</h2>
<h3>2 Rows, 2 Cols</h3>
<div class="icon-box-grid rows-2 cols-2">
  @include('_partials.card-icon-box-grid')
</div>
<h3>2 Rows, 4 Cols</h3>
<p>Note: doesn't wrap 4th card under sidebar at 1050px window</p>
<div class="icon-box-grid rows-2 cols-4">
  @include('_partials.card-icon-box-grid')
</div>
<h3>2 Rows, 3 Cols</h3>
<div class="icon-box-grid rows-2 cols-3">
  @include('_partials.card-icon-box-grid')
</div>

<h3>2 Rows, 2 Cols</h3>
<div class="icon-box-grid rows-2 cols-2">
  <div class="div1">
    @include('_partials.card-icon-button', [
    'heading' => 'Facebook',
    'icon' => 'fab fa-facebook',
    'alt' => 'Facebook',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div2">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-pdf',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div3">
    @include('_partials.card-icon-button', [
    'heading' => 'Twitter',
    'icon' => 'fab fa-twitter',
    'alt' => 'Twitter',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div4">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-word',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
</div>
<h3>1 Row, 3 Cols</h3>
<div class="icon-box-grid rows-1 cols-3">
  <div class="div1">
    @include('_partials.card-icon-button', [
    'heading' => 'Facebook',
    'icon' => 'fab fa-facebook',
    'alt' => 'Facebook',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div2">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-pdf',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div3">
    @include('_partials.card-icon-button', [
    'heading' => 'Twitter',
    'icon' => 'fab fa-twitter',
    'alt' => 'Twitter',     
    'link' => '#',
    'addclass' => ''
    ])
  </div>  
</div>
<h3>1 Rows, 4 Cols</h3>
<div class="icon-box-grid rows-1 cols-4">
  <div class="div1">
    @include('_partials.card-icon-button', [
    'heading' => 'Facebook',
    'icon' => 'fab fa-facebook',
    'alt' => 'Facebook',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div2">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-pdf',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div3">
    @include('_partials.card-icon-button', [
    'heading' => 'Twitter',
    'icon' => 'fab fa-twitter',
    'alt' => 'Twitter',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
  <div class="div4">
    @include('_partials.card-icon-button', [
    'heading' => 'Read this document',
    'icon' => 'fal fa-file-word',
    'alt' => 'pdf',     
    'link' => '#',
    'addclass' => ''
    ])
  </div> 
</div>
 

@endsection

@section('sectionals')
<h3>2 Rows, 5 Cols</h3>
<div class="icon-box-grid rows-2 cols-5">
  @include('_partials.card-icon-box-grid')
</div>
<h3>3 Rows, 2 Cols</h3>
<div class="icon-box-grid rows-3 cols-2">
  @include('_partials.card-icon-box-grid')
</div>
<h3>2 Rows, 4 Cols</h3>
<div class="icon-box-grid rows-1 cols-4">
  @include('_partials.card-icon-box-grid')
</div>
<h3>2 Rows, 3 Cols</h3>
<div class="icon-box-grid rows-2 cols-3">
  @include('_partials.card-icon-box-grid')
</div>
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 

@section('left-nav')
@include('_partials.left-nav')
@endsection
