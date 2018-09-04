@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a href="#">Transfer Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Arts</a></li>
  </ol>
@endsection

 


@section('content')
<h1>Current Students</h1>
<h2>What is your goal?</h2>

<div class="d-sm-flex">
  <div class="flex-fill">
    <div class="card-icon">
      <div class="icon"><a href="#"><img src="../resources/img/icons/homepage/book.png" alt="book"></a></div>
      <p><a href="#">Email</a></p>
    </div>
  </div>
  
  <div class="flex-fill">
      <div class="card-icon">
        <div class="icon"><a href="#"><img src="../resources/img/icons/homepage/book.png" alt="book"></a></div>
        <p><a href="#">Email</a></p>
      </div>
    </div>
    
  <div class="flex-fill">
      <div class="card-icon">
        <div class="icon"><a href="#"><img src="../resources/img/icons/homepage/book.png" alt="book"></a></div>
        <p><a href="#">Email</a></p>
      </div>
    </div>
    
  <div class="flex-fill">
      <div class="card-icon">
        <div class="icon"><a href="#"><img src="../resources/img/icons/homepage/book.png" alt="book"></a></div>
        <p><a href="#">Email</a></p>
      </div>
    </div>
    
  <div class="flex-fill">
      <div class="card-icon">
        <div class="icon"><a href="#"><img src="../resources/img/icons/homepage/book.png" alt="book"></a></div>
        <p><a href="#">Email</a></p>
      </div>
    </div>
</div>
<p>&nbsp;</p>

<div class="row">
  <div class="col-12 col-sm-6">
      <button class="btn-toggle btn collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          Classes </button>
        <div class="collapse" id="collapse1">
          <p>Classes info Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Obcaecati culpa doloremque soluta? Perspiciatis at nulla id. Odio unde exercitationem blanditiis molestias laborum iusto nostrum doloribus, <a href="#">voluptatibus a totam</a> rem! Laudantium.</p>
  
        </div>
  </div>
</div>
 


@endsection

@section('sectionals')
 
@endsection 

 
 
@section('content-header-inverse3') 
  true
@endsection 