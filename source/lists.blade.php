@extends('_layouts.master')



@section('content')

  @include('_partials.lists')
 
  

@endsection




@section('feature')
my feature!9
@endsection

@section('homepage')  
true
@endsection

@section('nav')
<ul>
  <li class="apply-now">
    <a href="/apply-and-aid/apply.aspx" class="cta">Apply Now</a>
  </li>
  <li>
    <a href="/apply-and-aid/campus-tour.aspx" class="cta">Visit Us</a>
  </li>
  <li>
    <a href="/ask-us.aspx" class="cta">Request Info</a>
  </li>
  <li>
    <a href="https://www.shoreline.edu/foundation/donations.aspx" class="cta">Donate Now</a>
  </li>
</ul>
@endsection