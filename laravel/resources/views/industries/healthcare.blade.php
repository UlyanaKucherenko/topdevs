@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'healthcare'], 'desc' => ['Dig into the best testimony of our healthcare software development expertise reflected in our clients\' success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'healthcare solution.'], 'industry' => 'healthcare'],
    'connect' => ['desc' => ['Looking for a healthcare app development company? Let\'s create a', 'healthcare application of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Healthcare Web and Mobile Development Services | TopDevs">
  <meta property="og:description" content="Custom Healthcare Development Company ✅ Healthcare Mobile App Development ✅ IT Solutions for Healthcare ✅ EHR/EMR Systems ✅ Remote Patient Monitoring ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/healthcare/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/healthcare/hero-bg.png"/>
@endsection

@section('content')
  <healthcare></healthcare>
@endsection
