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
<h3>3 Rows, 2 Cols</h3>
<div class="icon-box-grid rows-3 cols-2">
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
<h3>1 Row, 6 Cols (Full width pages only)</h3>
<div class="icon-box-grid rows-1 cols-6">
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
<h3>1 Row, 6 Cols (Full width pages only)</h3>
<div class="icon-box-grid rows-1 cols-6">
  @include('_partials.card-icon-box-grid')
</div>
<h3>5 Rows, 5 Cols</h3>
<div class="icon-box-grid rows-5 cols-5">
  @include('_partials.card-icon-box-grid') 

  <div class="div7">MyDiv 7</div>
<div class="div8">MyDiv 8</div>
<div class="div9">MyDiv 9</div>
<div class="div10">MyDiv 10</div>
<div class="div11">MyDiv 11</div>
<div class="div12">MyDiv 12</div>
<div class="div13">MyDiv 13</div>
<div class="div14">MyDiv 14</div>
<div class="div15">MyDiv 15</div>
<div class="div16">MyDiv 16</div>
<div class="div17">MyDiv 17</div>
<div class="div18">MyDiv 18</div>
<div class="div19">MyDiv 19</div>
<div class="div20">MyDiv 20</div>
<div class="div21">MyDiv 21</div>
<div class="div22">MyDiv 22</div>
<div class="div23">MyDiv 23</div>
<div class="div24">MyDiv 24</div>
<div class="div25">MyDiv 25</div>
</div>
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 

@section('left-nav')
@include('_partials.left-nav')
@endsection
