@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection
 
@section('main-sidebar-content')  
<div class="card callout card-program-heading">
    <div class="card-body">
       <h2>On this page</h2>
       <ul class="list-unstyled">
          <li><a class="scrollable" href="#link1">Link1</a></li>
          <li><a class="scrollable" href="#link2">Link2</a></li>
          <li><a class="scrollable" href="#link3">Link3</a></li>
          <li><a class="scrollable" href="#link4">Link4</a></li>
       </ul>
       
    </div>
 </div>

 
 <h2>Horizontal</h2>
 <div class="news-horizontal news-no-description">
   <div class="row">
     <div class="col-sm-4">
       <article class="news-article">
         <div class="image-container"><a
             href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Seattle International Film Festival Returns to Shoreline for Fourth Year"></a></div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="May 22, 2019">May 22, 2019</time></p>
           <h3><a
               href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/">Seattle
               International Film Festival Returns to Shoreline for Fourth Year</a></h3>
           <p class="description">For the fourth consecutive year, the City of Shoreline and Shoreline Community
             College are pleased to announce the Seatt...</p>
         </div>
       </article>
     </div>
     <div class="col-sm-4">
       <article class="news-article">
         <div class="image-container"><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Seattle International Film Festival returns to Shoreline with 26 international films over nine days"></a>
         </div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="May 24, 2018">May 24, 2018</time></p>
           <h3><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/">Seattle International Film Festival
               returns to Shoreline with 26 international films over nine days</a></h3>
           <p class="description">The City of Shoreline and Shoreline Community College are pleased to announce the
             Seattle International Film Festival (S...</p>
         </div>
       </article>
     </div>
     <div class="col-sm-4">
       <article class="news-article">
         <div class="image-container"><a
             href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Local colleges collaborate to debut September 11 play at Erickson Theatre"></a></div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="Nov 01, 2017">Nov 01, 2017</time></p>
           <h3><a href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/">Local colleges
               collaborate to debut September 11 play at Erickson Theatre</a></h3>
           <p class="description">Theatrum Orbis and a collective of theater and film artists from Shoreline Community
             College, Seattle Central College, a...</p>
         </div>
       </article>
     </div>
   </div>
 </div>

<h2>Vertical (Small)</h2>
 <div class="news-feed">
   <div class="row">
     <div class="col-12">
       <article class="news-article">
         <div class="image-container"><a
             href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Seattle International Film Festival Returns to Shoreline for Fourth Year"></a></div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="May 22, 2019">May 22, 2019</time></p>
           <h3><a
               href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/">Seattle
               International Film Festival Returns to Shoreline for Fourth Year</a></h3>
           <p class="description">For the fourth consecutive year, the City of Shoreline and Shoreline Community College
             are pleased to announce the Seatt...</p>
         </div>
       </article>
     </div>
     <div class="col-12">
       <article class="news-article">
         <div class="image-container"><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Seattle International Film Festival returns to Shoreline with 26 international films over nine days"></a>
         </div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="May 24, 2018">May 24, 2018</time></p>
           <h3><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/">Seattle International Film Festival
               returns to Shoreline with 26 international films over nine days</a></h3>
           <p class="description">The City of Shoreline and Shoreline Community College are pleased to announce the
             Seattle International Film Festival (S...</p>
         </div>
       </article>
     </div>
     <div class="col-12">
       <article class="news-article">
         <div class="image-container"><a
             href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Local colleges collaborate to debut September 11 play at Erickson Theatre"></a></div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="Nov 01, 2017">Nov 01, 2017</time></p>
           <h3><a href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/">Local colleges
               collaborate to debut September 11 play at Erickson Theatre</a></h3>
           <p class="description">Theatrum Orbis and a collective of theater and film artists from Shoreline Community
             College, Seattle Central College, a...</p>
         </div>
       </article>
     </div>
     <div class="col-12">
       <article class="news-article">
         <div class="image-container"><a
             href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/"><img
               src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
               alt="Jellyfish at Shoreline? 3-D Design class brings art into public spaces around campus"></a></div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="Mar 14, 2016">Mar 14, 2016</time></p>
           <h3><a href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/">Jellyfish at Shoreline?
               3-D Design class brings art into public spaces around campus</a></h3>
           <p class="description">Members of the campus community may have noticed some new public art around campus,
             most visibly the archway just southw...</p>
         </div>
       </article>
     </div>
     <div class="col-12">
       <article class="news-article">
         <div class="image-container"><a
             href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/"><img
               src="https://i0.wp.com/news.shoreline.edu/wp-content/uploads/2017/11/steel_newscover.jpg?fit=300%2C169&ssl=1"
               alt="Sculptor Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students"></a>
         </div>
         <div class="article-info-container">
           <p class="datetime"><time datetime="Apr 01, 2015">Apr 01, 2015</time></p>
           <h3><a
               href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/">Sculptor
               Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students</a></h3>
           <p class="description">Jean Behnke's exhibit, 'The Geisha and the Hawthorn Stump,' is on display in the
             Shoreline gallery in the Administration...</p>
         </div>
       </article>
     </div>
   </div>
   <p class="text-center xl pt-3"><a href="https://dev.shoreline.edu/_z-test/jeanine/test-complete.xml"
       class="more-arrow">View all News</a></p>
 </div>

<hr/>
<h2>Vertical (Large)</h2>
<div class="news-row">
 <div class="row">
   <div class="col-12">
     <article class="news-article">
       <div class="image-container"><a
           href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/"><img
             src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
             alt="Seattle International Film Festival Returns to Shoreline for Fourth Year"></a></div>
       <div class="article-info-container">
         <p class="datetime"><time datetime="May 22, 2019">May 22, 2019</time></p>
         <h3><a
             href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/">Seattle
             International Film Festival Returns to Shoreline for Fourth Year</a></h3>
         <p class="description">For the fourth consecutive year, the City of Shoreline and Shoreline Community College
           are pleased to announce the Seatt...</p>
       </div>
     </article>
   </div>
   <div class="col-12">
     <article class="news-article">
       <div class="image-container"><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/"><img
             src="https://i2.wp.com/news.shoreline.edu/wp-content/uploads/2018/05/siff-at-shoreline_news.png?fit=300%2C170&amp;ssl=1"
             alt="Seattle International Film Festival returns to Shoreline with 26 international films over nine days"></a>
       </div>
       <div class="article-info-container">
         <p class="datetime"><time datetime="May 24, 2018">May 24, 2018</time></p>
         <h3><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/">Seattle International Film Festival
             returns to Shoreline with 26 international films over nine days</a></h3>
         <p class="description">The City of Shoreline and Shoreline Community College are pleased to announce the
           Seattle International Film Festival (S...</p>
       </div>
     </article>
   </div>
   <div class="col-12">
     <article class="news-article">
       <div class="image-container"><a
           href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/"><img
             src="https://i0.wp.com/news.shoreline.edu/wp-content/uploads/2017/11/steel_newscover.jpg?fit=300%2C169&amp;ssl=1"
             alt="Local colleges collaborate to debut September 11 play at Erickson Theatre"></a></div>
       <div class="article-info-container">
         <p class="datetime"><time datetime="Nov 01, 2017">Nov 01, 2017</time></p>
         <h3><a href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/">Local colleges
             collaborate to debut September 11 play at Erickson Theatre</a></h3>
         <p class="description">Theatrum Orbis and a collective of theater and film artists from Shoreline Community
           College, Seattle Central College, a...</p>
       </div>
     </article>
   </div>
   <div class="col-12">
     <article class="news-article">
       <div class="image-container"><a
           href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/"><img
             src="https://i0.wp.com/news.shoreline.edu/wp-content/uploads/2016/03/jellyfish_crop.jpg?fit=300%2C167&amp;ssl=1"
             alt="Jellyfish at Shoreline? 3-D Design class brings art into public spaces around campus"></a></div>
       <div class="article-info-container">
         <p class="datetime"><time datetime="Mar 14, 2016">Mar 14, 2016</time></p>
         <h3><a href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/">Jellyfish at Shoreline?
             3-D Design class brings art into public spaces around campus</a></h3>
         <p class="description">Members of the campus community may have noticed some new public art around campus,
           most visibly the archway just southw...</p>
       </div>
     </article>
   </div>
   <div class="col-12">
     <article class="news-article">
       <div class="image-container"><a
           href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/"><img
             src="https://i2.wp.com/news.shoreline.edu/wp-content/uploads/2015/04/geisha-formatted.jpg?fit=300%2C173&amp;ssl=1"
             alt="Sculptor Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students"></a>
       </div>
       <div class="article-info-container">
         <p class="datetime"><time datetime="Apr 01, 2015">Apr 01, 2015</time></p>
         <h3><a
             href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/">Sculptor
             Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students</a></h3>
         <p class="description">Jean Behnke's exhibit, 'The Geisha and the Hawthorn Stump,' is on display in the
           Shoreline gallery in the Administration...</p>
       </div>
     </article>
   </div>
 </div>
 <p class="text-center xl pt-3"><a href="https://dev.shoreline.edu/_z-test/jeanine/test-complete.xml"
     class="more-arrow">View all News</a></p>
</div>










  <hr/>
  <h2>Previous Style</h2>

 <h2 id="link1">Link1</h2>
<div class="news-no-description">

    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])
    <p>&nbsp;</p>
@include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students including how to sharpen a pencil',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])

    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])

    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])
  </div>
  <h2 id="link2">Link2</h2>
  <h3>Feed</h3>
  <div class="news-feed news-no-description news-no-date2">
      @include('_partials.article', [
      'heading' => 'Seven back-to-school tips for college students',
      'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
      'alt' => 'students at a table',
      'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
      'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
      'datetime' => '2018-09-13 11:31'
      ])
      
      @include('_partials.article', [
      'heading' => 'Seven back-to-school tips for college stavida diam at ex pudents',
      'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Duis nec consequat dui. Praesent gravida diam at ex pharetra porta.  Vivamus at nisi massa. Nam porta…',
      'alt' => 'students at a table',
      'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
      'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
      'datetime' => '2018-09-13 11:31'
      ])
      
      @include('_partials.article', [
      'heading' => 'Seven back-to-school tips for college students',
      'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
      'alt' => 'students at a table',
      'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
      'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
      'datetime' => '2018-09-13 11:31'
      ])
        </div>
  <hr/>
@endsection

@section('content')
<h1>News</h1>


<table class="ou-event-feed">
    <tr><td><a href="../resources/json/trumba.json">Loading...</a></td></tr>
  </table>

  <h2>Horizontal</h2>
  <div class="news-horizontal news-no-description">
    <div class="row">
      <div class="col-sm-4">
        <article class="news-article">
          <div class="image-container"><a
              href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Seattle International Film Festival Returns to Shoreline for Fourth Year"></a></div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="May 22, 2019">May 22, 2019</time></p>
            <h3><a
                href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/">Seattle
                International Film Festival Returns to Shoreline for Fourth Year</a></h3>
            <p class="description">For the fourth consecutive year, the City of Shoreline and Shoreline Community
              College are pleased to announce the Seatt...</p>
          </div>
        </article>
      </div>
      <div class="col-sm-4">
        <article class="news-article">
          <div class="image-container"><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Seattle International Film Festival returns to Shoreline with 26 international films over nine days"></a>
          </div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="May 24, 2018">May 24, 2018</time></p>
            <h3><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/">Seattle International Film Festival
                returns to Shoreline with 26 international films over nine days</a></h3>
            <p class="description">The City of Shoreline and Shoreline Community College are pleased to announce the
              Seattle International Film Festival (S...</p>
          </div>
        </article>
      </div>
      <div class="col-sm-4">
        <article class="news-article">
          <div class="image-container"><a
              href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Local colleges collaborate to debut September 11 play at Erickson Theatre"></a></div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="Nov 01, 2017">Nov 01, 2017</time></p>
            <h3><a href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/">Local colleges
                collaborate to debut September 11 play at Erickson Theatre</a></h3>
            <p class="description">Theatrum Orbis and a collective of theater and film artists from Shoreline Community
              College, Seattle Central College, a...</p>
          </div>
        </article>
      </div>
    </div>
  </div>

<h2>Vertical (Small)</h2>
  <div class="news-feed">
    <div class="row">
      <div class="col-12">
        <article class="news-article">
          <div class="image-container"><a
              href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Seattle International Film Festival Returns to Shoreline for Fourth Year"></a></div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="May 22, 2019">May 22, 2019</time></p>
            <h3><a
                href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/">Seattle
                International Film Festival Returns to Shoreline for Fourth Year</a></h3>
            <p class="description">For the fourth consecutive year, the City of Shoreline and Shoreline Community College
              are pleased to announce the Seatt...</p>
          </div>
        </article>
      </div>
      <div class="col-12">
        <article class="news-article">
          <div class="image-container"><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Seattle International Film Festival returns to Shoreline with 26 international films over nine days"></a>
          </div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="May 24, 2018">May 24, 2018</time></p>
            <h3><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/">Seattle International Film Festival
                returns to Shoreline with 26 international films over nine days</a></h3>
            <p class="description">The City of Shoreline and Shoreline Community College are pleased to announce the
              Seattle International Film Festival (S...</p>
          </div>
        </article>
      </div>
      <div class="col-12">
        <article class="news-article">
          <div class="image-container"><a
              href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Local colleges collaborate to debut September 11 play at Erickson Theatre"></a></div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="Nov 01, 2017">Nov 01, 2017</time></p>
            <h3><a href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/">Local colleges
                collaborate to debut September 11 play at Erickson Theatre</a></h3>
            <p class="description">Theatrum Orbis and a collective of theater and film artists from Shoreline Community
              College, Seattle Central College, a...</p>
          </div>
        </article>
      </div>
      <div class="col-12">
        <article class="news-article">
          <div class="image-container"><a
              href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/"><img
                src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
                alt="Jellyfish at Shoreline? 3-D Design class brings art into public spaces around campus"></a></div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="Mar 14, 2016">Mar 14, 2016</time></p>
            <h3><a href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/">Jellyfish at Shoreline?
                3-D Design class brings art into public spaces around campus</a></h3>
            <p class="description">Members of the campus community may have noticed some new public art around campus,
              most visibly the archway just southw...</p>
          </div>
        </article>
      </div>
      <div class="col-12">
        <article class="news-article">
          <div class="image-container"><a
              href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/"><img
                src="https://i0.wp.com/news.shoreline.edu/wp-content/uploads/2017/11/steel_newscover.jpg?fit=300%2C169&ssl=1"
                alt="Sculptor Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students"></a>
          </div>
          <div class="article-info-container">
            <p class="datetime"><time datetime="Apr 01, 2015">Apr 01, 2015</time></p>
            <h3><a
                href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/">Sculptor
                Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students</a></h3>
            <p class="description">Jean Behnke's exhibit, 'The Geisha and the Hawthorn Stump,' is on display in the
              Shoreline gallery in the Administration...</p>
          </div>
        </article>
      </div>
    </div>
    <p class="text-center xl pt-3"><a href="https://dev.shoreline.edu/_z-test/jeanine/test-complete.xml"
        class="more-arrow">View all News</a></p>
  </div>

<hr/>
<h2>Vertical (Large)</h2>
<div class="news-row">
  <div class="row">
    <div class="col-12">
      <article class="news-article">
        <div class="image-container"><a
            href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/"><img
              src="{{ $page->baseUrl }}/resources/img/news/studying-in-library_news-crop.jpg"
              alt="Seattle International Film Festival Returns to Shoreline for Fourth Year"></a></div>
        <div class="article-info-container">
          <p class="datetime"><time datetime="May 22, 2019">May 22, 2019</time></p>
          <h3><a
              href="https://news.shoreline.edu/2019/05/22/2019-seattle-international-film-festival-at-shoreline/">Seattle
              International Film Festival Returns to Shoreline for Fourth Year</a></h3>
          <p class="description">For the fourth consecutive year, the City of Shoreline and Shoreline Community College
            are pleased to announce the Seatt...</p>
        </div>
      </article>
    </div>
    <div class="col-12">
      <article class="news-article">
        <div class="image-container"><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/"><img
              src="https://i2.wp.com/news.shoreline.edu/wp-content/uploads/2018/05/siff-at-shoreline_news.png?fit=300%2C170&amp;ssl=1"
              alt="Seattle International Film Festival returns to Shoreline with 26 international films over nine days"></a>
        </div>
        <div class="article-info-container">
          <p class="datetime"><time datetime="May 24, 2018">May 24, 2018</time></p>
          <h3><a href="https://news.shoreline.edu/2018/05/24/siff-shoreline-2018/">Seattle International Film Festival
              returns to Shoreline with 26 international films over nine days</a></h3>
          <p class="description">The City of Shoreline and Shoreline Community College are pleased to announce the
            Seattle International Film Festival (S...</p>
        </div>
      </article>
    </div>
    <div class="col-12">
      <article class="news-article">
        <div class="image-container"><a
            href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/"><img
              src="https://i0.wp.com/news.shoreline.edu/wp-content/uploads/2017/11/steel_newscover.jpg?fit=300%2C169&amp;ssl=1"
              alt="Local colleges collaborate to debut September 11 play at Erickson Theatre"></a></div>
        <div class="article-info-container">
          <p class="datetime"><time datetime="Nov 01, 2017">Nov 01, 2017</time></p>
          <h3><a href="https://news.shoreline.edu/2017/11/01/steel-play-erickson-theatre-2017/">Local colleges
              collaborate to debut September 11 play at Erickson Theatre</a></h3>
          <p class="description">Theatrum Orbis and a collective of theater and film artists from Shoreline Community
            College, Seattle Central College, a...</p>
        </div>
      </article>
    </div>
    <div class="col-12">
      <article class="news-article">
        <div class="image-container"><a
            href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/"><img
              src="https://i0.wp.com/news.shoreline.edu/wp-content/uploads/2016/03/jellyfish_crop.jpg?fit=300%2C167&amp;ssl=1"
              alt="Jellyfish at Shoreline? 3-D Design class brings art into public spaces around campus"></a></div>
        <div class="article-info-container">
          <p class="datetime"><time datetime="Mar 14, 2016">Mar 14, 2016</time></p>
          <h3><a href="https://news.shoreline.edu/2016/03/14/3-d-design-public-art-winter-2016/">Jellyfish at Shoreline?
              3-D Design class brings art into public spaces around campus</a></h3>
          <p class="description">Members of the campus community may have noticed some new public art around campus,
            most visibly the archway just southw...</p>
        </div>
      </article>
    </div>
    <div class="col-12">
      <article class="news-article">
        <div class="image-container"><a
            href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/"><img
              src="https://i2.wp.com/news.shoreline.edu/wp-content/uploads/2015/04/geisha-formatted.jpg?fit=300%2C173&amp;ssl=1"
              alt="Sculptor Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students"></a>
        </div>
        <div class="article-info-container">
          <p class="datetime"><time datetime="Apr 01, 2015">Apr 01, 2015</time></p>
          <h3><a
              href="https://news.shoreline.edu/2015/04/01/sculptor-jean-behnke-qa-talks-making-unreasonable-art-and-career-advice-for-art-students/">Sculptor
              Jean Behnke Q+A: Talks Making “Unreasonable” Art and Career Advice for Art Students</a></h3>
          <p class="description">Jean Behnke's exhibit, 'The Geisha and the Hawthorn Stump,' is on display in the
            Shoreline gallery in the Administration...</p>
        </div>
      </article>
    </div>
  </div>
  <p class="text-center xl pt-3"><a href="https://dev.shoreline.edu/_z-test/jeanine/test-complete.xml"
      class="more-arrow">View all News</a></p>
</div>










   <hr/>
   <h2>Previous Style</h2>
  
  





 
    @include('_partials.article', [
    'class' => 'news-article-stacked',
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])  
<div class="news-no-description">
<div class="row">
  <div class="col-sm-4">@include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])</div>
    <div class="col-sm-4">@include('_partials.article', [
      'heading' => 'Seven back-to-school tips for college students. Vivamus at nisi massa.',
      'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
      'alt' => 'students at a table',
      'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
      'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
      'datetime' => '2018-09-13 11:31'
      ])</div>
      <div class="col-sm-4">@include('_partials.article', [
        'heading' => 'Seven back-to-school tips for college students',
        'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
        'alt' => 'students at a table',
        'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
        'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
        'datetime' => '2018-09-13 11:31'
        ])</div>
        
</div>
</div>
<p class="text-center xl pt-3"><a href="#" class="more-arrow">View all News</a></p>
        <hr/>
        <h2 id="link3">Link3</h2>
<h3>Feed</h3>
<div class="news-feed news-no-description news-no-date2">
    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])
    
    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college stavida diam at ex pudents',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Duis nec consequat dui. Praesent gravida diam at ex pharetra porta.  Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])
    
    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])
      </div>
<hr/>

<div class="news-row">
@include('_partials.article', [
'heading' => 'Seven back-to-school tips for college students',
'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
'alt' => 'students at a table',
'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
'datetime' => '2018-09-13 11:31'
])
  </div>
  <hr/>
  <div class="news-row">
      @include('_partials.article', [
      'heading' => 'Seven back-to-school tips for college students',
      'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
      'alt' => 'students at a table',
      'img' => '',           
      'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
      'datetime' => '2018-09-13 11:31'
      ])
        </div>
@endsection
   
 

@section('sectionals')

<div class="py-5 bg-light">
    <div class="container-fluid">
        <h2 id="link4">Link4</h2>
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
            <hr/>
    <div class="news-row">
    @include('_partials.article', [
    'heading' => 'Seven back-to-school tips for college students',
    'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
    'alt' => 'students at a table',
    'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
    'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
    'datetime' => '2018-09-13 11:31'
    ])
      </div>

      <hr/>
      <div class="news-row">
          @include('_partials.article', [
          'heading' => 'Seven back-to-school tips for college students',
          'desc' => 'Duis nec consequat dui. Praesent gravida diam at ex pharetra porta. Vivamus at nisi massa. Nam porta…',
          'alt' => 'students at a table',
          'img' => '',           
          'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
          'datetime' => '2018-09-13 11:31'
          ])
            </div>

      </div>
      </div>
@endsection 
