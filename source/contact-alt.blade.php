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

@section('main-sidebar-content2')
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

<h1>Legacy Contact Boxes</h1>
<p>View styles for <a href="{{ $page->baseUrl }}/contact">updated contact us snippets.</a></p>

<div class="contact-us-box">
  <div class="content-blocks">
     <div class="content-block">
        
        <h2>Contact Us</h2>
        
        <h3>Enrollment Services</h3>
        
        <p><span>Shoreline Community College</span><br><span>16101 Greenwood Avenue N</span><br><span>Shoreline, WA 98133-5696</span></p>
        
     </div>
     <div class="content-block">
        
        <div class="contactSubgroup">
           
           <div>
              
              <div class="module dl">
                 <dl class="">
                    <dt>Email</dt>
                    <dd><a href="mailto:sccadmis@shoreline.edu">sccadmis@shoreline.edu</a></dd>
                    <dt>Phone</dt>
                    <dd><a href="tel:2065464611">(206) 546-4611</a></dd>
                 </dl>
              </div>
              
           </div>
           
           <div>&nbsp;</div>
           
        </div>
        
     </div>
     <div class="content-block">
        
        <h3>Hours</h3>
        
        <div class="module dl">
           <dl class="">
              <dt>Monday &amp; Tuesday</dt>
              <dd><span>8:00 a.m. - 5:00 p.m.</span></dd>
              <dt>Wednesday</dt>
              <dd>11:00 a.m. - 5:00 p.m.&nbsp;</dd>
              <dt>Thursday</dt>
              <dd><span>8:00 a.m. - 5:00 p.m.</span></dd>
              <dt>Friday</dt>
              <dd>8:00 a.m. - 4:30 p.m.&nbsp;</dd>
           </dl>
        </div>
        
     </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <div class="contact-us-box">
      <div class="content-blocks">
         <div class="content-block">
            
            <h2>Contact Us</h2>
            
            <h3>Enrollment Services</h3>
            
            <p><span>Shoreline Community College</span><br><span>16101 Greenwood Avenue N</span><br><span>Shoreline, WA 98133-5696</span></p>
            
         </div>
         <div class="content-block">
            
            <div class="contactSubgroup">
               
               <div>
                  
                  <div class="module dl">
                     <dl class="">
                        <dt>Email</dt>
                        <dd><a href="mailto:sccadmis@shoreline.edu">sccadmis@shoreline.edu</a></dd>
                        <dt>Phone</dt>
                        <dd><a href="tel:2065464611">(206) 546-4611</a></dd>
                     </dl>
                  </div>
                  
               </div>
               
               <div>&nbsp;</div>
               
            </div>
            
         </div>
         <div class="content-block">
            
            <h3>Hours</h3>
            
            <div class="module dl">
               <dl class="">
                  <dt>Monday &amp; Tuesday</dt>
                  <dd><span>8:00 a.m. - 5:00 p.m.</span></dd>
                  <dt>Wednesday</dt>
                  <dd>11:00 a.m. - 5:00 p.m.&nbsp;</dd>
                  <dt>Thursday</dt>
                  <dd><span>8:00 a.m. - 5:00 p.m.</span></dd>
                  <dt>Friday</dt>
                  <dd>8:00 a.m. - 4:30 p.m.&nbsp;</dd>
               </dl>
            </div>
            
         </div>
      </div>
   </div>
  </div>
  <div class="col-md-4">
     
     <div class="contact-us-box">
        <div class="content-blocks">
           <div class="content-block">
              
              <h2>Contact Us</h2>
              
              <h3>Enrollment Services</h3>
              
              <p><span>Shoreline Community College</span><br><span>16101 Greenwood Avenue N</span><br><span>Shoreline, WA 98133-5696</span></p>
              
           </div>
           <div class="content-block">
              
              <div class="contactSubgroup">
                 
                 <div>
                    
                    <div class="module dl">
                       <dl class="">
                          <dt>Email</dt>
                          <dd><a href="mailto:sccadmis@shoreline.edu">sccadmis@shoreline.edu</a></dd>
                          <dt>Phone</dt>
                          <dd><a href="tel:2065464611">(206) 546-4611</a></dd>
                       </dl>
                    </div>
                    
                 </div>
                 
                 <div>&nbsp;</div>
                 
              </div>
              
           </div>
           <div class="content-block">
              
              <h3>Hours</h3>
              
              <div class="module dl">
                 <dl class="">
                    <dt>Monday &amp; Tuesday</dt>
                    <dd><span>8:00 a.m. - 5:00 p.m.</span></dd>
                    <dt>Wednesday</dt>
                    <dd>11:00 a.m. - 5:00 p.m.&nbsp;</dd>
                    <dt>Thursday</dt>
                    <dd><span>8:00 a.m. - 5:00 p.m.</span></dd>
                    <dt>Friday</dt>
                    <dd>8:00 a.m. - 4:30 p.m.&nbsp;</dd>
                 </dl>
              </div>
              
           </div>
        </div>
     </div>
     
     <h3>Visit Campus</h3>
     
     <ul>
        
        <li class="style10">Guided&nbsp;<a href="/apply-and-aid/campus-tour.aspx">campus tours</a> are offered Monday - Friday. Call to schedule <a href="tel:2065467841">206-546-7841</a>.
        </li>
        
        <li class="style10">Group <a href="/apply-and-aid/calendar.aspx">information sessions</a> are also offered. Tours are included, along with a presentation by academic advisors.
        </li>
        
     </ul>
     
     <h4>&nbsp;</h4>
     
  </div>
</div>



@endsection