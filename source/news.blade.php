@extends('_layouts.master')

@section('breadcrumb')
@include('_partials.breadcrumbs')
@endsection
 

@section('content')
<h1>News</h1>


@include('_partials.article', [
'heading' => 'Seven back-to-school tips for college students',
'desc' => 'When you think back-to-school prep, shopping for fresh highlighters and notebooks might come to mind. But starting college brings life changes beyond nabbing a new backpack. If you’re like 70% of c…',
'alt' => 'students at a table',
'img' => '/resources/img/news/studying-in-library_news-crop.jpg',           
'link' => 'https://news.shoreline.edu/2018/09/13/seven-back-to-school-tips-for-college-students/',
'datetime' => '2018-09-13 11:31'
])
  
@endsection
   
 