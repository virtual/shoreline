@extends('_layouts.master')

@section('breadcrumb')
<ol>
    <li><a href="#">Home</a></li>
    <li><a href="#">Explore Programs</a></li>
    <li><a class="active" aria-current="page" href="#">Visual Communications Technology</a></li>
  </ol>
@endsection

@section('content-header-img-backup')
<div class="center-cropped" 
     style="background-image: url('{{ $page->baseUrl }}/resources/img/stock/image.jpg');">
     <img alt="" src="{{ $page->baseUrl }}/resources/img/stock/image.jpg"/>
</div>


@endsection


@section('left-nav')
@include('_partials.left-nav')
@endsection


 
@section('content')
           
<h1>Snippet Glossary</h1>
<p class="large-text"></p>
<p>
   <!-- generic two column snippet more complex below -->
</p>

<p style="text-align: left;">Welcome to the Snippet Glossary. This resource is intended to be a visual reference
   that displays how Snippets will look and operate on the page.
</p>

<p style="text-align: left;">
   <!-- Three Column List -->
</p>

<div class="row">
   <div class="col-md-4">
      <ul>
         <li><a href="#two-column">50/50 Two Column Text Snippet</a></li>
         <li><a href="#two-column-reverse">50/50 Two Column Text Snippet (Reverse Layout on Mobile)</a></li>
         <li><a title="Three Column Text Snippet" href="#three-column">Three Column Text Snippet</a></li>
         <li><a title="Three Column Text Snippet" href="#three-column-list">Three Column List Snippet</a></li>
         <li><a title="Accordion Snippet" href="#accordion">Accordion Snippet</a></li>
         <li><a title="Image with Overlay Snippet" href="#image-overlay">Image with Overlay Snippet</a></li>
         <li><a title="Contact Info Snippet" href="#contact">Contact Info Two Column Snippet</a></li>
         <li><a href="#OneColumnContact">Contact Info One Column Snippet</a></li>
         <li><a href="#button">Button Snippet</a></li>
         <li><a title="Single Event Snippet" href="#single-event">Single Event Snippet</a></li>
         <li><a title="Multiple Events Snippet" href="#multi-event">Multiple Events Snippet</a></li>
      </ul>
   </div>
   <div class="col-md-4">
      <ul>
         <li><a title="News Feed Snippet" href="#news-feed">News Feed Snippet</a></li>
         <li><a href="#newstwo">OmniUpdate Support</a></li>
         <li><a title="Green line on Left Snippet" href="#green-line">Green line on Left&nbsp;Snippet</a></li>
         <li><a title="Two Column Snippet with 1/3 to 2/3 Width Ratio" href="#two-column-wide-right">Two Column Snippet with 1/3 to 2/3 Width Ratio</a></li>
         <li><a title="Two Column Snippet with 2/3 to 1/3 Width Ratio" href="#two-colum-wide-left">Two Column Snippet with 2/3 to 1/3 Width Ratio</a></li>
         <li><a title="Two Columns with Quote on Right Side" href="#two-column-quote">Two Columns with Quote on Right Side</a></li>
         <li><a href="#OneColumnQuote">One Column Quote</a></li>
         <li><a title="Rectangular Announcement with Button" href="#announcement">Rectangular Announcement with Button</a></li>
         <li><a title="Square&nbsp;News/Announcement" href="#square-announce">Square News/Announcement</a></li>
      </ul>
   </div>
   <div class="col-md-4">
      <ul>
         <li><a title="Table Snippet" href="#gen_table">Table (Simple)</a></li>
         <li><a href="#table-pinned">Table (Pinned)</a></li>
         <li><a href="#table">Table (Responsive Stacked)</a></li>
         <li><a title="Tabs Snippet" href="#tabs">Tabs Snippet</a></li>
         <li><a title="Twitter Feed Snippet" href="#twitter">Twitter Feed Snippet</a></li>
         <li><a title="Two images with Captions Snippet" href="#two-images">Two images with Captions Snippet</a></li>
         <li><a title="Two Column Video Overlay Image with Caption Snippet" href="#video">Video—Two Column Video Overlay Image with Caption Snippet</a></li>
         <li><a href="#video-caption-below">Video with Caption Below</a></li>
         <li><a href="#youtube-embed-4x3">YouTube Embed (4x3)</a></li>
         <li><a href="#youtube-embed-widescreen">YouTube Embed (Widescreen)</a></li>
      </ul>
   </div>
</div>

<p style="text-align: left;">
   <!-- Three Column List -->
</p>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="two-column"></a>50/50 Two Column Snippet</span></h4>

<div class="row two-col module">
   <div class="col-md-6">
      <div class="col-inner">
         
         <p>Insert Column One Content.</p>
         
         <p>This is the first (or left-side) column of a two-column snippet where content can
            be placed.<br><br><span>In the page's responsive design, this column will </span><span>scale</span><span> down and be placed above the second(or right-hand) column.</span></p>
         
      </div>
   </div>
   <div class="col-md-6">
      <div class="col-inner">
         
         <p>Insert Column Two Content.<br><br>This is the second (or right-side) column of a two-column snippet where content can
            be placed.<br><br>In the page's responsive design, this column will scale down and be placed under the
            first (or left-hand) column.
         </p>
         
      </div>
   </div>
</div>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="two-column-reverse"></a>50/50 Two Column Snippet (Reverse Layout on Mobile)</span><br>
   <!-- generic two column snippet more complex below --></h4>

<div class="row two-col module reverse-mobile">
   <div class="col-md-6">
      <div class="col-inner">
         
         <p>This is the first (or left-side) column of a two-column snippet where content can
            be placed.
         </p>
         
         <p>In the page's responsive design, this column will scale down and be placed <em>under the second</em> (or right-hand) column.
         </p>
         
      </div>
   </div>
   <div class="col-md-6">
      <div class="col-inner">
         
         <p>This is the second (or right-side) column of a two-column snippet where content can
            be placed.
         </p>
         
         <p>In the page's responsive design, this column will scale down and be placed <em>above the first</em> (or left-hand) column.
         </p>
         
      </div>
   </div>
</div>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="three-column"></a>Three Column Snippet</span></h4>

<p>
   <!-- Three Column Content -->
</p>

<div class="three-items module">
   <div class="module-inner">
      <div class="row three-col">
         <div class="col-md-4">
            
            <p>Insert Column One Content.</p>
            
            <p><span>This is the first (or left-side) column of a three-column snippet where content can
                  be placed.<br><br>In the page's responsive design, this column will <span>scale</span><span> down and be placed above the second (or middle) column.</span><br></span></p>
            
         </div>
         <div class="col-md-4">
            
            <p>Insert Column Two Content.</p>
            
            <p><span>This is the second (or middle) column of a three-column snippet where content can
                  be placed.<br><br>In the page's responsive design, this column will scale and be placed under the first
                  (or left-hand) column<br></span></p>
            
         </div>
         <div class="col-md-4">
            
            <p>Insert Column Three Content.</p>
            
            <p><span>This is the third (or right-side) column of a three-column snippet where content can
                  be placed.</span></p>
            
            <p><span>In the page's responsive design, this column will shrink down and be placed under
                  the middle column.</span></p>
            
         </div>
      </div>
   </div>
</div>

<p>
   <!-- Three Column List -->
</p>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="three-column-list"></a>Three Column List Snippet</span></h4>

<div class="row">
   <div class="col-md-4">
      <ul>
         <li>Replace content when a bulleted list is needed.</li>
         <li>This is the first (or left-side) column of a three-column snippet where content can
               be placed.</li>
         <li>To add a bullet, simply hit the "Return" key.</li>
      </ul>
   </div>
   <div class="col-md-4">
      <ul>
         <li>This is the second (or middle) column of a three-column snippet.</li>
         <li>In the page's responsive design, this column will scale down and be placed under the
               first (or left-hand) column</li>
         <li>To add a bullet, simply hit the "Return" key.</li>
      </ul>
   </div>
   <div class="col-md-4">
      <ul>
         <li>This is the third (or right-side) column of a three-column snippet.</li>
         <li>In the page's responsive design, this column will scale down and be placed under the
               middle column.</li>
         <li>To add a bullet, simply hit the "Return" key.</li>
      </ul>
   </div>
</div>

<hr>

<h4 style="text-align: center;">&nbsp;<a id="accordion"></a><span style="text-decoration: underline;">Accordion Snippet</span>
   <!-- accordion content --></h4>

<div class="module-inner module">
   @include('_partials/accordion')   
</div>

<p>&nbsp;Use this snippet to provide additional content to pages without creating exceedingly
   long Web pages.
</p>

<hr>

<h4 style="text-align: center;">&nbsp;<a id="image-overlay"></a><span style="text-decoration: underline;">Image with Overlay Snippet</span><br>
   <!--Image with an Overlay --></h4>

<div class="large-image-with-overlay module"><img src="{{ $page->baseUrl }}/resources/img/stock/old/photo-977x431-1.jpg" alt="woman"><div class="image-overlay">
      
      <p class="heading"><span class="small-text">What type of student</span><span class="big-text">are you?</span></p>
      
      <p><a class="btn btn-secondary" href="#">Button Over Image</a></p>
      
   </div>
</div>

<hr>

<h4 style="clear: left; text-align: center;"><span style="text-decoration: underline;"><a id="button"></a>Button Snippet (left and right justified)<br></span></h4>

<p><a class="btn btn-primary" href="/default.aspx">Click me</a></p>

<p><a class="btn btn-primary float-md-right" href="/default.aspx">Click me</a></p>

<p style="clear: left;">&nbsp;</p>

<p style="clear: left;">&nbsp;</p>

<p style="clear: left;">&nbsp;</p>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="contact"></a>Contact Info Two Column Snippet</span></h4>

<p>
   <!-- Generic Table -->
</p>
<div class="row">
  <div class="col-md-8">
    <p>Example usage. Place the contact snippet within a 2-col or 3-col snippet as needed. </p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
      elit. Aenean commodo ligula eget dolor. Aenean massa.
      Del sociis natoque penatibus et magnis dis parturient
      montes, nascetur ridiculus mus. Donec quam felis,
      ultricies nec, pellentesque eu, pretium quis, sem.</p>
  </div>
  <div class="col-md-4 address-sidebar">
    @include('_partials.address')
  </div>
</div>

<hr>

<h4 style="text-align: center;"><a id="OneColumnContact"></a><a id="threeCellContact"></a>Contact Info One Column
</h4>

<p>
   <!-- Generic Table -->
</p>

@include('_partials.address')

<p>
   <!--Generic Three Cell Contact Block -->
</p>

<hr>

<h4 style="text-align: center;">&nbsp;<a id="single-event"></a><span style="text-decoration: underline;">Single Event Snippet</span>
   <!-- generic event layout --></h4>

<div class="col-inner">
   <h6><a href="/">Transfer Planning</a></h6><span class="date">Tuesday, January 20</span><p class="detail-text">4:00pm - 5:00pm</p>
   <p class="detail-text">Building | Room 101</p>
</div>

<hr>

<p>
   <!-- Events Feed Snippet -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="multi-event"></a>Multiple Events Snippet</span></h4>

<div class="three-items module">
   <div class="module-inner">
      <div class="section three-col events"><div class="col-md-4" style="height: 132px;">	<div class="col-inner">    	<h6><a href="http://www.shoreline.edu/calendars/default.aspx?trumbaEmbed=view%3devent%26eventid%3d127656783#">First Day of Instruction</a></h6>  	<span class="date">All Day Event</span>       <p class="detail-text">12:00 AM to 11:59 PM</p>       <p class="detail-text">Campus - Wide</p>	</div></div><div class="col-md-4" style="height: 132px;">	<div class="col-inner">    	<h6><a href="http://www.shoreline.edu/calendars/default.aspx?trumbaEmbed=view%3devent%26eventid%3d129478585#">Bloodworks NW Blood Drive</a></h6>  	<span class="date">Sep 26, 2018</span>       <p class="detail-text"> 10am&nbsp;–&nbsp;2pm <br></p>       <p class="detail-text">PUB - Quiet Dining Room </p>	</div></div><div class="col-md-4" style="height: 132px;">	<div class="col-inner">    	<h6><a href="http://www.shoreline.edu/calendars/default.aspx?trumbaEmbed=view%3devent%26eventid%3d128611890#">Women's Soccer vs. Peninsula</a></h6>  	<span class="date">Sep 26, 2018</span>       <p class="detail-text"> 2pm <br></p>       <p class="detail-text">Shoreline, WA </p>	</div></div>
      </div>
   </div>
   <p><a class="cta" href="/calendar">View all events page</a></p>
</div>

<hr>

<p>
   <!-- News Feed -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="news-feed"></a>News Feed Snippet</span></h4>

<div class="module">
  <div class="news-no-description">
      <div class="row">
        <div class="col-sm-4">@include('_partials.article', [
          'heading' => 'Seven back-to-school tips for college students',
          'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam
          porta…',
          'alt' => 'students at a table',
          'img' => '/resources/img/news/studying-in-library_news-crop.jpg',
          'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
          'datetime' => '2018-09-13 11:31'
          ])</div>
        <div class="col-sm-4">@include('_partials.article', [
          'heading' => 'Seven back-to-school tips for college students',
          'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam
          porta…',
          'alt' => 'students at a table',
          'img' => '/resources/img/news/studying-in-library_news-crop.jpg',
          'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
          'datetime' => '2018-09-13 11:31'
          ])</div>
        <div class="col-sm-4">@include('_partials.article', [
          'heading' => 'Seven back-to-school tips for college students. Vivamus at nisi massa.',
          'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam
          porta…',
          'alt' => 'students at a table',
          'img' => '/resources/img/news/studying-in-library_news-crop.jpg',
          'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
          'datetime' => '2018-09-13 11:31'
          ])</div>
    
      </div>
    </div>
    <p class="text-center xl pt-3"><a href="#" class="more-arrow">View all News</a></p>
</div>

<hr>

<h4>
   <!-- Two Column with 1/3 to 2/3 Width Ratio -->
</h4>

<h4 style="text-align: center;">&nbsp;<a id="newstwo"></a><span style="text-decoration: underline;">Under Construction - Consulting with OmniUpdate</span></h4>

<p>
   <!-- generic news item -->
</p>

<h4 style="text-align: center;">
   <!-- Two Column with 1/3 to 2/3 Width Ratio -->
</h4>

<div class="row">
   <div class="col-md-4">
      
      <p>
         <!-- generic news item -->
      </p>
      
      <div class="news-single-wide">
         <div class="image" style="background-image: url(&quot;/_resources/img/graphics/photo-310x230-2.jpg&quot;);"></div>
         <div class="news-details" style=""><span class="detail-text">Monday January 1</span><h6><a href="/">Aenean Euismond Bibendum</a></h6>
         </div>
      </div>
      
   </div>
   <div class="col-md-8">
      
      <div class="news-double-wide">
         <div class="image" style="background-image: url(&quot;/_resources/img/graphics/photo-310x230-2.jpg&quot;); height: 231px;"></div>
         <div class="news-details" style="height: 231px;"><span class="detail-text">Monday, January 1</span><h6><a href="/">Aenean Euismond Bibendum</a></h6>
            <p class="detail-text">Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi
               massa. Nam porta urna a dui
            </p>
         </div>
      </div><a href="/" class="cta">View all news</a>
      
   </div>
</div>

<hr>

<h4 style="text-align: center;"><br><span style="text-decoration: underline;"><a id="green-line"></a>Green Line on Left Snippet</span></h4>

<p>This creates two columns. In the right column is an area with a green border on the
   left. This acts as a way to "call out" an image or information.
</p>

<p>
   <!-- Two Column with 2/3 to 1/3 Width Ratio -->
</p>

<div class="row">
   <div class="col-md-8">
      <p>Place your content here</p>     
   </div>
   <div class="col-md-4">
      <div class="RightCallOutGreenBorder">
         <p>Place your content here</p>         
      </div>      
   </div>
</div>

<p>&nbsp;&nbsp;</p>

<hr>

<h4 style="text-align: center;">&nbsp;<a id="two-column-wide-right"></a><span style="text-decoration: underline;">Two Column Snippet with 1/3 to 2/3 Width Ratio</span>
   <!-- Two Column with 1/3 to 2/3 Width Ratio --></h4>
<div class="row">
  <div class="col-md-4">
    <p>Insert Column One Content. This column is 1/3 the width of the page.</p>
    <p>This is the first (or left-side) column of a two-column snippet where content can
      be placed.<br><br>In the page's responsive design, this column will scale down
        and be placed above the second(or right-hand) column.</p>
  </div>
  <div class="col-md-8">
    <p>Insert Column Two Content. This column is 2/3 the width of the page.<br><br>This is the
        second (or right-side) column of a two-column snippet where content can
        be placed.<br><br>In the page's responsive design, this column will scale down and be placed under
        the
        first (or left-hand) column.</p>
  </div>
</div>

<hr>

<h4 style="text-align: center;">&nbsp;<a id="two-colum-wide-left"></a><span style="text-decoration: underline;">Two Column Snippet with 2/3 to 1/3 Width Ratio</span></h4>

<p>
   <!-- Two Column with 2/3 to 1/3 Width Ratio -->
</p>

<div class="row">
  <div class="col-md-8">
    <p>Insert Column One Content. This column is 2/3 the width of the page.</p>
    <p>This is the first (or left-side) column of a two-column snippet where content can
      be placed.<br><br>In the page's responsive design, this column will scale down
        and be placed above the second(or right-hand) column.</p>
  </div>
  <div class="col-md-4">
    <p>Insert Column Two Content. This column is 1/3 the width of the page.<br><br>This is the
        second (or right-side) column of a two-column snippet where content can
        be placed.<br><br>In the page's responsive design, this column will scale down and be placed under
        the
        first (or left-hand) column.</p>
  </div>
</div>

<hr>

<p>
   <!-- generic two column snippet more complex below -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="two-column-quote"></a>Two Columns with Quote on Right Side</span></h4>

<div class="row two-col module">
   <div class="col-md-6">
      <div class="col-inner">
         
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
         
      </div>
   </div>
   <div class="col-md-6">
      <div class="col-inner">
         
          <blockquote>
              <p>Begin by typing a quote. Once the quote is done, you can rejoice.</p>
              <cite class="quote-attribution"><strong>Quote Author Name</strong>
                <br/>Job Title</cite>
           </blockquote>
         
      </div>
   </div>
</div>

<hr>

<h4 style="text-align: center;"><a id="OneColumnQuote"></a>One Column Quote
</h4>

<blockquote>
   <p>Begin by typing a quote. Once the quote is done, you can rejoice.</p>
   <cite class="quote-attribution">Quote Author</cite>
</blockquote>

<hr>

<p>
   <!-- generic two column snippet more complex below -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="announcement"></a>Rectangular News/Announcement with Button</span></h4>

<div class="news-double-wide">
   <div class="image" style="background-image: url(&quot;/_resources/img/graphics/photo-310x230-2.jpg&quot;); height: 290px;"></div>
   <div class="news-details" style="height: 290px;"><span class="detail-text">Monday, January 1</span><h6><a href="/">Aenean Euismond Bibendum</a></h6>
      <p class="detail-text">Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi
         massa. Nam porta urna a dui
      </p>
   </div>
</div><a href="/" class="cta">View all news</a>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="square-announce"></a>Square&nbsp;News/Announcement</span></h4>

<p>
   <!-- generic news item -->
</p>

<div class="news-single-wide">
   <div class="image" style="background-image: url(&quot;/_resources/img/graphics/photo-310x230-2.jpg&quot;);"></div>
   <div class="news-details" style=""><span class="detail-text">Monday January 1</span><h6><a href="/">Aenean Euismond Bibendum</a></h6>
   </div>
</div>

<hr>

<p>
   <!-- Generic Table -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="gen_table"></a>Table (Simple)</span></h4>

<div class="module-inner">
   <div class="table-wrapper standard">
      <div class="table-wrapper-inner">
         <table class="standard-table ">
            <thead>
               
               <tr>
                  
                  <th>Head</th>
                  
                  <th>Head</th>
                  
                  <th>Head</th>
                  
               </tr>
               
            </thead>
            <tbody>
               
               <tr>
                  
                  <td>Subject 1</td>
                  
                  <td>Subject 2</td>
                  
                  <td>Subject 3</td>
                  
               </tr>
               
               <tr>
                  
                  <td>Subject 1</td>
                  
                  <td>Subject 2</td>
                  
                  <td>Subject 3</td>
                  
               </tr>
               
               <tr>
                  
                  <td>Subject 1</td>
                  
                  <td>Subject 2</td>
                  
                  <td>Subject 3</td>
                  
               </tr>
               
               <tr>
                  
                  <td>Subject 1</td>
                  
                  <td>Subject 2</td>
                  
                  <td>Subject 3</td>
                  
               </tr>
               
               <tr>
                  
                  <td>Subject 1</td>
                  
                  <td>Subject 2</td>
                  
                  <td>Subject 3</td>
                  
               </tr>
               
            </tbody>
         </table>
      </div>
      <div class="table-more"></div>
   </div>
</div>

<hr>

<p>
   <!-- Generic Table -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="table-pinned"></a>Table (Pinned)</span></h4>
@include('_partials.table-pinned')

<hr>

<p>
   <!-- Generic Table -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="table"></a>Table (Responsive Stacked)</span></h4>

<div class="ou-help">
   
   <p>Right click a table cell to select deletion of a row or column in order to size the
      table according to your needs.
   </p>
   
</div>

@include('_partials.table-stacked')

<hr>

<h4 style="text-align: center;">&nbsp;<a id="tabs"></a><span style="text-decoration: underline;">Tabs Snippet</span></h4>

<p>
   <!-- tabs -->
</p>

<div class="tabs module">
   <ul class="tabs-nav">
      <li class="tabs-nav-1"><a class="current" href="#tabs-1">Tab One</a></li>
      <li class="tabs-nav-2"><a href="#tabs-2">Tab Two</a></li>
      <li class="tabs-nav-3"><a href="#tabs-3">Tab Three</a></li>
      <li class="tabs-nav-4"><a href="#tabs-4">Tab Four</a></li>
      <li class="tabs-nav-5"><a href="#tabs-5">Tab Five</a></li>
   </ul>
   <div class="list-wrap">
      <ul id="tabs-1">
         <li>
            
            <p>Tab 1 -- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum nisi
               arcu, vitae tempus nisl mattis ut.
            </p>
            
            <p>Tab 1 -- Quisque sollicitudin ex quis sapien imperdiet, a ultricies elit laoreet.
               Duis nec consequat dui lorem.
            </p>
            
         </li>
      </ul>
      <ul id="tabs-2" class="hide" style="position: relative; top: 0px; left: 0px; display: none;">
         <li>
            
            <p>Tab 2 -- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum nisi
               arcu, vitae tempus nisl mattis ut.
            </p>
            
            <p>Tab 2 -- Quisque sollicitudin ex quis sapien imperdiet, a ultricies elit laoreet.
               Duis nec consequat dui lorem.
            </p>
            
         </li>
      </ul>
      <ul id="tabs-3" class="hide" style="position: relative; top: 0px; left: 0px; display: none;">
         <li>
            
            <p>Tab 3 -- Lorem ipsum dolor sit amet, elit. Donec dictum nisi arcu, vitae tempus nisl
               mattis ut. Tab 3 -- Quisque sollicitudin ex quis sapien imperdiet, a ultricies elit
               laoreet. Duis nec consequat dui lorem.
            </p>
            
         </li>
      </ul>
      <ul id="tabs-4" class="hide" style="position: relative; top: 0px; left: 0px; display: none;">
         <li>
            
            <p>Tab 4 -- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum nisi
               arcu, vitae tempus nisl mattis ut.
            </p>
            
            <p>Tab 4 -- Quisque sollicitudin ex quis sapien imperdiet, a ultricies elit laoreet.
               Duis nec consequat dui lorem.
            </p>
            
         </li>
      </ul>
      <ul id="tabs-5" class="hide" style="position: relative; top: 0px; left: 0px; display: none;">
         <li>
            
            <p>Tab 5 -- Lorem ipsum dolor sit amet, consectetur. Donec dictum nisi arcu, vitae tempus
               nisl mattis ut. Tab 5 -- Quisque sollicitudin ex quis sapien imperdiet, a ultricies
               elit laoreet. Duis nec consequat dui lorem.
            </p>
            
         </li>
      </ul>
   </div>
</div>
<div class="mobile-accordions"></div>

<hr>

<p>
   <!-- Twitter Snippet -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="twitter"></a>Twitter Feed Snippet</span></h4>

<div class="twitter-module module">
   <div class="twitter-feed"><span>Loading...</span></div><a href="/_resources/snippets/" class="cta">Follow</a></div>

<p>&nbsp;Simply insert the proper Handle before the "@" symbol.</p>

<hr>

<p>
   <!-- Images with Captions -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;">Image With Caption</span></h4>

<div class="two-col-blocks image-right module">
   <div class="image" style="background-image: url(&quot;/_resources/img/graphics/photo-488x322-1.jpg&quot;); height: 187px;"></div>
   <div class="image-caption" style="height: 187px;">
      <h3>Title H3</h3>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”
      <p class="attribution"><strong>Kerry Fields ‘16, </strong>Soccer
      </p>
   </div>
</div>

<hr>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="two-images"></a>Two Images With Captions</span></h4>

<div class="built-in-captions module">
   <div class="section">
      <div class="col-md-8">
         <figure class="built-in-caption"><img src="/_resources/img/graphics/photo-644x335-1.jpg" alt="woman"><figcaption><a href="/">Built-in Caption example</a></figcaption>
         </figure>
      </div>
      <div class="col-md-4">
         <figure class="built-in-caption"><img src="/_resources/img/graphics/photo-313x335-1.jpg" alt="woman playing soccer"><figcaption><a href="/">Built-in Caption example</a></figcaption>
         </figure>
      </div>
   </div>
</div>

<p>Image dimensions: Left Image should be no wider&nbsp;than <span style="text-decoration: underline;"><strong>644 pixels</strong></span> by any height. <br>Right Image (one-column image) should by no wider than <span style="text-decoration: underline;"><strong>313 pixels</strong></span> by any height.
</p>

<hr>

<h4 style="text-align: center;">&nbsp;<a id="video"></a><span style="text-decoration: underline;">Two Column Video Overlay Image with Caption Snippet</span>
   <!--Left Image with Video and Caption --></h4>

<div class="two-col-blocks image-left video module">
   <div class="image" style="background-image: url(&quot;http://placehold.it/488x322.jpg&quot;); height: 213px;"><a href="https://www.youtube.com/embed/Yh89hVoHboA?rel=0&amp;autoplay=1" class="video-lightbox cboxElement"></a></div>
   <div class="image-caption" style="height: 213px;">
      <h3>
         Title H3 
         
      </h3>
      <p>
         
         </p><p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
         
      <p></p>
      <p class="attribution"><strong>Kerry Fields ‘16, </strong>Soccer
      </p>
   </div>
</div>

<hr>

<p>
   <!-- Generic Table -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="video-caption-below"></a>Video with Caption Below</span></h4>

<p>
   <!-- Video and Caption Below -->
</p>

<div class="video-full-width two-col-blocks image-left video module">
   <div class="image" style="background-image: url('http://placehold.it/488x322.jpg');"><a href="https://www.youtube.com/embed/Yh89hVoHboA?rel=0&amp;autoplay=1" class="video-lightbox cboxElement"></a></div>
   <div class="image-caption" style="">
      <h3>
         Title 
         
      </h3>
      <p>
         
         </p><p>“Lorem”</p>
         
      <p></p>
      <p class="attribution"><strong>Name, </strong>Title
      </p>
   </div>
</div>

<hr>

<p>
   <!-- Generic Table -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="youtube-embed-4x3"></a>YouTube Embed (4x3)</span></h4>

<div class="flex-video"><iframe title="The Shoreline Community College Experience" width="560" height="420" src="https://www.youtube.com/embed/HVVUzKrlJyQ?rel=0&amp;controls=1&amp;fs=1" frameborder="0" allowfullscreen="allowfullscreen">This video is also available at https://youtu.be/HVVUzKrlJyQ</iframe></div>

<hr>

<p>
   <!-- Generic Table -->
</p>

<h4 style="text-align: center;"><span style="text-decoration: underline;"><a id="youtube-embed-widescreen"></a>YouTube Embed (Widescreen)</span></h4>

<div class="flex-video widescreen"><iframe title="The Shoreline Community College Experience" width="560" height="315" src="https://www.youtube.com/embed/HVVUzKrlJyQ?rel=0&amp;controls=1&amp;fs=1" frameborder="0" allowfullscreen="allowfullscreen">This video is also available at https://youtu.be/HVVUzKrlJyQ</iframe></div>

<hr>
@endsection
  