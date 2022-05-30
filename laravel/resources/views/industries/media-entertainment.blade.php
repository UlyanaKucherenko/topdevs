@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'media-entertainment'], 'desc' => ['Dig into the best testimony of our entertainment software development expertise reflected in our clients\', success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'live streaming software.'], 'industry' => 'media-entertainment'],
    'connect' => ['desc' => ['Looking for a dedicated development team? Let\'s create a streaming app', 'of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Top Media & Entertainment App Development Company | TopDevs">
  <meta property="og:description" content="Custom Web and Mobile Solutions for Media and Entertainment Business ✅ Audio & Video Streaming App Development ✅ Online Media Platform Development ✅ ">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/media/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/media/hero-bg.png"/>
@endsection

@section('content')
  <media></media>
@endsection
