@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'education-e-learning'], 'desc' => ['Dig into the best testimony of our custom education software development expertise reflected in our clients\' success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'educational solution.'], 'industry' => 'education-e-learning'],
    'connect' => ['desc' => ['Looking for an e-learning development company? Let\'s create a learning platform', 'of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Custom E-Learning Development Services | TopDevs">
  <meta property="og:description" content="Full-Cycle eLearning Development Company ✅ Custom Web and Mobile Solutions for Education ✅ Corporate eLearning Solutions ✅ Mobile Education Apps ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/education/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/education/hero-bg.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
@endsection

@section('content')
  <education></education>
@endsection
