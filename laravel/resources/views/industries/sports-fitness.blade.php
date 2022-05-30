@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'sports-fitness'], 'desc' => ['Dig into the best testimony of our sports software development expertise reflected in our clients\' success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'sports solution.'], 'industry' => 'sports-fitness'],
    'connect' => ['desc' => ['Looking for a sports app development company? Let\'s create a fitness app', 'of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Sports and Fitness App Development Services | TopDevs">
  <meta property="og:description" content="Sports & Fitness App Development Company ✅ Custom Web and Mobile Solutions for Sports and Fitness Business ✅Fitness Tracker Apps ✅ Custom Sports Software ✅ ">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/sports/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/sports/hero-bg.png"/>
@endsection

@section('content')
  <sports></sports>
@endsection
