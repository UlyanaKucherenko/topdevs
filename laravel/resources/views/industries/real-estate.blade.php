@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'real-estate'], 'desc' => ['Dig into the best testimony of our real estate software development expertise reflected in our clients\' success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'real estate solution.'], 'industry' => 'real-estate'],
    'connect' => ['desc' => ['Looking for real estate app developers?', 'Let\'s create a real estate app of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Real Estate Software Development Services | TopDevs">
  <meta property="og:description" content="Real Estate App Development ✅ Custom Web and Mobile Software for Real Estate ✅ Property Management Systems ✅ Apps For Real Estate Agents ✅ Booking Apps ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/estate/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/estate/hero-bg.png"/>
@endsection

@section('content')
  <estate></estate>
@endsection
