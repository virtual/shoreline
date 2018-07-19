@extends('_layouts.master')




@section('content-interior')

<div class="breadcrumb" aria-label="breadcrumb">
  <ol>
    <li>
      <a href="http://www.example.com/books">Home</a> 
    </li>
    <li>
      <a href="http://www.example.com/sciencefiction">Science Fiction</a>
    </li>
    <li>
      <a class="active" aria-current="page" href="http://www.example.com/books/sciencefiction/awardwinners">Award Winners</a>
    </li>
  </ol>
</div>
<div class="breadcrumb" aria-label="breadcrumb">
    <ol class="condensed">
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
        <a class="active" aria-current="page" href="http://www.example.com/books/sciencefiction/awardwinners">Award Winners</a>
      </li>
    </ol>
  </div>
  <div class="breadcrumb" aria-label="breadcrumb">
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
          <a class="active" aria-current="page" href="http://www.example.com/books/sciencefiction/awardwinners">Award Winners</a>
        </li>
      </ol>
    </div>

<h1>Default Header Colors</h1>
    <p>Lorem  n commodo ligula eget dolor. Aenean massa 
    <strong>strong</strong>. Cum sociis natoque penatibus 
    et magnis dis  ede justo, fringilla vel, aliquet nec, 
    vulputate eget, arcu. In enim justo, rhoncus ut, 
    imperdiet a, venenatis vitae, justo. Nullam dictum 
    felis eu pede <a class="external ext" href="#">link</a> 
    mollis pretium. Integer tincidunt. Cras dapibus. 
    Vivamus ele  ultricies nisi vel augue. 
    Curabitur ullamcorper ultricies nisi.</p>
     
<h2>Aenean commodo <a href="#">link</a> ligula eget </h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing  
montes, nascetur ridiculus mus. Donec quam felis, 
ultricies nec, pellentesque eu, pretium quis, sem.</p> 
<h3>Associate of Typography</h3>
<p>Lorem ipsum dolor sit amet.</p>
<h4>Associate of Typography</h4>
<p>Lorem ipsum dolor sit amet.</p>
<h5>Associate of Typography</h5>
<p>Lorem ipsum dolor sit amet.</p>
<h6>Associate of Typography</h6> 
<p>Lorem ipsum dolor sit amet.</p>
<p class="small">Default / Hover</p>
<p>Stand out as a competitive applicant to four-year schools by
<a href="#">graduating with Honors</a> on your transcript and diploma. Specialized seminars enhance the transfer process.</p>


<div class="row py-3">
  <div class="col-md-4 col-12 py-3">
    <div class="p-3 dark">
      <p class="small">Dark</p> 
      @include('_partials.headers')
    </div>
  </div>
  <div class="col-md-4 col-12 py-3">
    <div class="p-3 primary">
      <p class="small">Green</p>
      @include('_partials.headers')
    </div>
  </div>
  <div class="col-md-4 col-12 py-3">
    <div class="bg-primary p-3">
      <p class="small">White</p>
      @include('_partials.headers')
    </div>
  </div>
</div>
  
<hr/>
<div class="row py-3">
  <div class="col-md-4 col-12 py-3">
    <div class="p-3">
      <p class="small">Dark</p>
        @include('_partials.text')
    </div>
  </div>
  <div class="col-md-4 col-12 py-3">
    <div class="p-3 gray">
      <p class="small">Mid-Gray</p>
        @include('_partials.text')
    </div>
  </div>
  <div class="col-md-4 col-12 py-3">
    <div class="bg-primary p-3">
      <p class="small">White</p>
        @include('_partials.text')
    </div>
  </div>
</div>


    <hr/>
      
    <ul>
      <li>Lorem ipsum dolor sit amet consectetuer.</li>
      <li>Aenean commodo ligula eget dolor.</li>
      <li>Aenean massa cum sociis natoque penatibus.</li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
    elit. Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient 
    montes, nascetur ridiculus mus. Donec quam felis, 
    ultricies nec, pellentesque eu, pretium quis, sem.</p>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
    elit. Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient 
    montes, nascetur ridiculus mus. Donec quam felis, 
    ultricies nec, pellentesque eu, pretium quis, sem.</p>


    @include('_partials.address')

    <div class="row">
      <div class="col-md-8">
    <h3 class="primary">Summer 2018 online payment plan enrollment opens May 11, 2018</h3>
    <p>Payment plan must be in place by your tuition due date.</p>
    @include('_partials.table')
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
    elit. Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient 
    montes, nascetur ridiculus mus. Donec quam felis, 
    ultricies nec, pellentesque eu, pretium quis, sem.</p>
  </div>
  <div class="col-md-4 address-sidebar">
      @include('_partials.address')
  </div>
  </div>
  
@endsection


  