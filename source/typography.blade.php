@extends('_layouts.master')

@section('content')

<div class="breadcrumb bg-primary p-3" aria-label="breadcrumb">
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

    <h1>Professional &amp; Technical Programs</h1>
        <p>"Professional/Technical" or vocational studies, provide students with specialized knowledge and skills to either prepare them to enter a particular field, or enhance existing skills while already employed.</p>
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
    <form action="#" method="post">
      <fieldset>
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Enter your 
    full name" />
    
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Enter 
    your email address" />
    
        <label for="message">Message:</label>
        <textarea id="message" placeholder="What's on your 
    mind?"></textarea>
    
        <input type="submit" value="Send message" />
    
      </fieldset>
    </form>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
    elit. Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient 
    montes, nascetur ridiculus mus. Donec quam felis, 
    ultricies nec, pellentesque eu, pretium quis, sem.</p>
    <h3 class="primary">Summer 2018 online payment plan enrollment opens May 11, 2018</h3>
    <p>Payment plan must be in place by your tuition due date.</p>
    <table class="data">
      <tr>
        <th>Entry Header 1</th>
        <th>Entry Header 2</th>
        <th>Entry Header 3</th>
        <th>Entry Header 4</th>
      </tr>
      <tr>
        <td>Entry First Line 1</td>
        <td>Entry First Line 2</td>
        <td>Entry First Line 3</td>
        <td>Entry First Line 4</td>
      </tr>
      <tr>
        <td>Entry Line 1</td>
        <td>Entry Line 2</td>
        <td>Entry Line 3</td>
        <td>Entry Line 4</td>
      </tr>
      <tr>
        <td>Entry Last Line 1</td>
        <td>Entry Last Line 2</td>
        <td>Entry Last Line 3</td>
        <td>Entry Last Line 4</td>
      </tr>
    </table>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
    elit. Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient 
    montes, nascetur ridiculus mus. Donec quam felis, 
    ultricies nec, pellentesque eu, pretium quis, sem.</p>
  
@endsection


  