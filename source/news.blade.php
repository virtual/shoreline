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
